package helpdeskseverside;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;



public class LoginDB {
    private static final String DRIVER ="com.mysql.jdbc.Driver";
    private String DBName;  // = "jdbc:odbc:MySQLFleet";
    private String USERID;
    private String PASSWORD;
    
      
    public LoginDB(String DBName, String USERID, String PASSWORD) {
        this.DBName = DBName;
        this.USERID = USERID;
        this.PASSWORD = PASSWORD;
    }
    
    
    public Connection getConnection() {
        Connection conn = null;
        try {
            String URL = "jdbc:mysql://localhost:3306/" + DBName;
            Class.forName(DRIVER); // Load ODBC driver
            conn = DriverManager.getConnection(URL, USERID, PASSWORD);
           
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "Database connection failed", "Error", JOptionPane.ERROR_MESSAGE);
        } catch (ClassNotFoundException ex) {
             JOptionPane.showMessageDialog(null, ex.getMessage(), "Class Not Found Exception", JOptionPane.ERROR_MESSAGE);
        } 
          catch (Exception ex) {
             JOptionPane.showMessageDialog(null, ex.getMessage(), "Exception", JOptionPane.ERROR_MESSAGE);
        } 
        return conn;
    }
    //Calculating the size of the resultset
    public int getSizeOfResultSet(ResultSet rs){
        int rowCount = 0;
        try{
            while(rs.next()){
               rowCount = rowCount + 1;
            }
            rs.first();
        }
        catch (SQLException ex){
             JOptionPane.showMessageDialog(null, ex.getMessage(), "Database getSizeOfResultSet Failer", JOptionPane.ERROR_MESSAGE);
             return rowCount;
        }
        return rowCount;
        
    }
    public ResultSet getResultSet(Connection conn, String SQL) {
        Statement statement ;
        ResultSet rs = null;
        if (conn != null){
             try {
                statement = conn.createStatement();
                rs = statement.executeQuery(SQL);
            } catch (SQLException ex) {
             JOptionPane.showMessageDialog(null, ex.getMessage(), "Database getResultSet Failer", JOptionPane.ERROR_MESSAGE);
            }
        }
        else{
            System.err.println("Connection Object is NULL: Please First Create it using NEW");
        }
       return rs;
    }
        
    public boolean insertUpdateData(Connection conn, String SQL) {
        Statement statement ;
        try {
            statement = conn.createStatement();
            statement.executeUpdate(SQL);
            return true;
        } catch (SQLException ex) {
             JOptionPane.showMessageDialog(null, ex.getMessage(), "Database insertUpdateData Failer", JOptionPane.ERROR_MESSAGE);
            return false;
        }
    }
    public boolean insertUpdateDataWithException(Connection conn, String SQL) throws SQLException {
        Statement statement ;
        try {
            statement = conn.createStatement();
            statement.executeUpdate(SQL);
            return true;
        } catch (SQLException ex) {
                throw new SQLException();
        }
        
    }
    
    public Connection createNewDB(String DBName, String USERID, String PASSWORD) throws SQLException {
        this.DBName = DBName;
        this.USERID = USERID;
        this.PASSWORD = PASSWORD;
        
        Connection conn = null;
        try {
            String URL = "jdbc:mysql://localhost:3306/" ;
            Class.forName(DRIVER); // Load ODBC driver
            
            conn =  DriverManager.getConnection(
            "jdbc:mysql://localhost:3306/mysql?zeroDateTimeBehavior=convertToNull",USERID, PASSWORD);
        Statement st = conn.createStatement();
        st.executeUpdate("CREATE DATABASE " + DBName);
        st.close();
            
           
//        } catch (SQLException ex) {
//            JOptionPane.showMessageDialog(null, "Database connection failed", "Error", JOptionPane.ERROR_MESSAGE);
        } catch (ClassNotFoundException ex) {
             JOptionPane.showMessageDialog(null, ex.getMessage(), "Class Not Found Exception", JOptionPane.ERROR_MESSAGE);
        } 
          catch (Exception ex) {
             JOptionPane.showMessageDialog(null, ex.getMessage(), "Exception", JOptionPane.ERROR_MESSAGE);
        } 
        
        return conn;
        
    }
}


