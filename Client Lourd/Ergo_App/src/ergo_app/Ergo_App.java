/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ergo_app;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import javax.swing.JOptionPane;

/**
 *
 * @author samy
 */
public class Ergo_App {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws ClassNotFoundException {
        
        
        String myDriver = "com.mysql.jdbc.Driver";
	//String url = "jdbc:mysql://localhost/ergoapp?autoReconnect=true&useSSL=false"; 
	String url = "jdbc:mysql://localhost/ergoapp"; 
        Connection conn = null;
        Class.forName(myDriver);
        try {
	    	if(conn==null){
			 conn = DriverManager.getConnection(url,"root","");
                         System.out.println("Connexion BDD Ok !!");
}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			System.out.println("Connexion BDD echouée");
			e.printStackTrace();
		} 
            
        Frame Identification = new Frame();
        Identification.setVisible(true);
        Identification.setResizable(false);
  
    }

    void setVisible(boolean b) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
   
}


