package paquete;
// IMPORTS
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class ConexionPeliculas {
	
	// METODO PARA CONECTARME A MI BASE DE DATOS
	public static Connection conectar() throws SQLException {
    String URL = "jdbc:mysql://localhost:3306/cine_ricardoperez";
    String USER = "root";
    String PASSWORD = "1234";
    return DriverManager.getConnection(URL, USER, PASSWORD);
	}
}


