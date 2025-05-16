package modelo;
import java.sql.*;
import java.util.*;

public class Proveedores {
	int id_proveedor;
	String nombre;
	String cif;
	String telefono;
	
	//CONSTRUCTOR
	public Proveedores (int id_proveedor, String nombre, String cif, String telefono) {
		this.id_proveedor = id_proveedor;
		this.nombre = nombre;
		this.cif = cif;
		this.telefono = telefono;
	}
	
	//METODO LISTAR
	public static List<Proveedores>listarProveedores(){
		List<Proveedores> lista = new ArrayList<>();
		
		String query = "SELECT * FROM Proveedores";
		
		try (Connection conn = Conexion.conectar();
				Statement stmt = conn.createStatement();
				ResultSet rs = stmt.executeQuery(query)) {
			while (rs.next()) {
				//OBJETO PELICULA QUE ALMACENA LOS RESULTADOS DEL WHILE
				Proveedores p = new Proveedores(
				rs.getInt("id_proveedor"),
				rs.getString("nombre"),
				rs.getString("cif"),
				rs.getString("telefono")
				);
				lista.add(p);
				}
			
				//POSIBLE ERROR 1
				} catch (SQLException e) {
				System.out.println("Error al obtener Proveedores: " + e.getMessage());
				}
				return lista;
				}
	
	
	//METODO INSERTAR
	public static void insertarProveedores(String nombre, String cif, String telefono) {
		String queryInsert = "INSERT INTO Proveedores (nombre, cif, telefono) " + "VALUES (?, ?, ?)";
		
		try (Connection conn = Conexion.conectar();
				
			PreparedStatement sentenciaI = conn.prepareStatement(queryInsert)) {
			// EJECUTA LA SENTENCIA
	        sentenciaI.setString(1, nombre);
	        sentenciaI.setString(2, cif);
	        sentenciaI.setString(3, telefono);
	        
	        int filas = sentenciaI.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Proveedor insertado correctamente.");
	        }

	    } catch (SQLException e) {
	        System.out.println("Error al insertar Proveedor: " + e.getMessage());
	    }
	}
	
	
	//METODO ELIMINAR
	public static void eliminarProveedores(int id_proveedor) {
	    String queryDelete = "DELETE FROM Proveedores WHERE id_proveedor = ?";
	    try (Connection conn = Conexion.conectar();
	         PreparedStatement sentenciaDel = conn.prepareStatement(queryDelete)) {

	        sentenciaDel.setInt(1, id_proveedor); 
	        int filas = sentenciaDel.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Proveedor eliminado correctamente.");
	        } else {
	            System.out.println("No existe un Proveedor con ese ID.");
	        }
	    } catch (SQLException error) {
	        System.out.println("Error al eliminar el Proveedor: " + error.getMessage());
	    }
	}
	
	
	//METODO ACTUALIZAR
	public static void actualizarProveedores(String nombre, String cif, String telefono, int id_proveedor) {
		String queryUpdate = "UPDATE Proveedores SET nombre = ?, cif = ?, telefono = ? WHERE id_proveedor = ?";
		
		try (Connection conn = Conexion.conectar();		
				PreparedStatement sentenciaUp = conn.prepareStatement(queryUpdate)) {

	        sentenciaUp.setString(1, nombre);
	        sentenciaUp.setString(2, cif);
	        sentenciaUp.setString(3, telefono);
	        sentenciaUp.setInt(4, id_proveedor);

	        int filas = sentenciaUp.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Proveedor actualizado correctamente.");
	        } else {
	            System.out.println("No se encontró un Proveedor con ese ID.");
	        }

	    } catch (SQLException e) {
	        System.out.println("Error al actualizar Proveedor: " + e.getMessage());
	    }
	}
	
	//METODO QUE HE AÑADIDO PORQUE SI NO, NO ME MUESTRA LOS Proveedores BIEN
	public String toString() {
	    return "ID: " + id_proveedor +
	           ", Nombre: " + nombre +
	           ", cif: " + cif +
	           ", Teléfono: " + telefono;
	}

}








