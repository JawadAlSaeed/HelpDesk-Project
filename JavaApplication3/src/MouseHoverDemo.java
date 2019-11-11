import javax.swing.*;
import javax.swing.border.Border;
import java.awt.*;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;

public class MouseHoverDemo
{
    public static void main(String[] args)
    {
        new MouseHoverDemo();
    }

    MouseHoverDemo()
    {
        JFrame jFrame = new JFrame("Mouse Hover Demo");
        jFrame.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        for(int i=0;i<25;i++) jFrame.add(new CustomPanel());
        jFrame.pack();
        jFrame.setLocationRelativeTo(null);
        jFrame.setVisible(true);
    }

    class CustomPanel extends JPanel implements MouseListener
    {
        boolean isHighlighted;
        Border blackBorder = BorderFactory.createLineBorder(Color.BLACK);
        Border redBorder = BorderFactory.createLineBorder(Color.RED,5);
        CustomPanel()
        {
            addMouseListener(this);
            setBorder(blackBorder);
            setFocusable(true);
        }

        @Override
        public Dimension getPreferredSize()
        {
            return new Dimension(200, 100);
        }

        @Override public void mouseClicked(MouseEvent e)
        {
            if(isHighlighted) setBorder(blackBorder);
            else setBorder(redBorder);
            isHighlighted=!isHighlighted;
        }

        @Override public void mousePressed(MouseEvent e){}
        @Override public void mouseReleased(MouseEvent e){}
        @Override public void mouseEntered(MouseEvent e){}
        @Override public void mouseExited(MouseEvent e){}
    }
}