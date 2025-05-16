package modelo;
import java.sql.*;
import java.util.*;

public class Articulos {
	int id_articulo;
	String nombre;
	float precio_unitario;
	int stock;
	
	//CONSTRUCTOR
	public Articulos (int id_articulo, String nombre, float precio_unitario, int stock) {
		this.id_articulo = id_articulo;
		this.nombre = nombre;
		this.precio_unitario = precio_unitario;
		this.stock = stock;
	}
	
	//METODO LISTAR
	public static List<Articulos>listarArticulos(){
		List<Articulos> lista = new ArrayList<>();
		
		String query = "SELECT * FROM Articulos";
		
		try (Connection conn = Conexion.conectar();
				Statement stmt = conn.createStatement();
				ResultSet rs = stmt.executeQuery(query)) {
			while (rs.next()) {
				//OBJETO PELICULA QUE ALMACENA LOS RESULTADOS DEL WHILE
				Articulos a = new Articulos(
				rs.getInt("id_articulo"),
				rs.getString("nombre"),
				rs.getFloat("precio_unitario"),
				rs.getInt("stock")
				);
				lista.add(a);
				}
			
				//POSIBLE ERROR 1
				} catch (SQLException e) {
				System.out.println("Error al obtener Articulos: " + e.getMessage());
				}
				return lista;
				}
	
	
	//METODO INSERTAR
	public static void insertarArticulos(String nombre, String precio_unitario, String stock) {
		String queryInsert = "INSERT INTO Articulos (nombre, precio_unitario, stock) " + "VALUES (?, ?, ?)";
		
		try (Connection conn = Conexion.conectar();
				
			PreparedStatement sentenciaI = conn.prepareStatement(queryInsert)) {
			// EJECUTA LA SENTENCIA
	        sentenciaI.setString(1, nombre);
	        sentenciaI.setString(2, precio_unitario);
	        sentenciaI.setString(3, stock);
	        
	        int filas = sentenciaI.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Articulo insertado correctamente.");
	        }

	    } catch (SQLException e) {
	        System.out.println("Error al insertar Articulo: " + e.getMessage());
	    }
	}
	
	
	//METODO ELIMINAR
	public static void eliminarArticulos(int id_articulo) {
	    String queryDelete = "DELETE FROM Articulos WHERE id_articulo = ?";
	    try (Connection conn = Conexion.conectar();
	         PreparedStatement sentenciaDel = conn.prepareStatement(queryDelete)) {

	        sentenciaDel.setInt(1, id_articulo); 
	        int filas = sentenciaDel.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Articulo eliminado correctamente.");
	        } else {
	            System.out.println("No existe un Articulo con ese ID.");
	        }
	    } catch (SQLException error) {
	        System.out.println("Error al eliminar el Articulo: " + error.getMessage());
	    }
	}
	
	
	//METODO ACTUALIZAR
	public static void actualizarArticulos(String nombre, String precio_unitario, String stock, int id_articulo) {
		String queryUpdate = "UPDATE Articulos SET nombre = ?, precio_unitario = ?, stock = ? WHERE id_articulo = ?";
		
		try (Connection conn = Conexion.conectar();		
				PreparedStatement sentenciaUp = conn.prepareStatement(queryUpdate)) {

	        sentenciaUp.setString(1, nombre);
	        sentenciaUp.setString(2, precio_unitario);
	        sentenciaUp.setString(3, stock);
	        sentenciaUp.setInt(4, id_articulo);

	        int filas = sentenciaUp.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Articulo actualizado correctamente.");
	        } else {
	            System.out.println("No se encontró un Articulo con ese ID.");
	        }

	    } catch (SQLException e) {
	        System.out.println("Error al actualizar Articulo: " + e.getMessage());
	    }
	}
	
	//METODO QUE HE AÑADIDO PORQUE SI NO, NO ME MUESTRA LOS Articulos BIEN
	public String toString() {
	    return "ID: " + id_articulo +
	           ", Nombre: " + nombre +
	           ", precio_unitario: " + precio_unitario +
	           ", Stock: " + stock;
	}

}
