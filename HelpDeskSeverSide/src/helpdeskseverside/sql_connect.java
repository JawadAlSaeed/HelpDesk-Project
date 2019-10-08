/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package helpdeskseverside;
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;
/**
 *
 * @author jawad.saeed
 */

public class sql_connect {
     private java.sql.Connection conn;
    private String dbName;
    private String userID;
    private String password;

    Connection cin=null;
    public static Connection ConnecrDB(){
        
        try{
            Class.forName("org.sqlite.JDBC");
            Connection con = DriverManager.getConnection("jdbc:sqlite://localhost:3306/")+ dbName;;
        } catch (ClassNotFoundException ex) {
             Logger.getLogger(sql_connect.class.getName()).log(Level.SEVERE, null, ex);
         } catch (SQLException ex) {
             Logger.getLogger(sql_connect.class.getName()).log(Level.SEVERE, null, ex);
         }
    }
    
    
}
