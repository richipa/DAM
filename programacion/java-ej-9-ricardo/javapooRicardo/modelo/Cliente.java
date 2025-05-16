package modelo;
import java.sql.*;
import java.util.*;

public class Cliente {
	int id_cliente;
	String nombre;
	String email;
	String telefono;
	
	//CONSTRUCTOR
	public Cliente (int id_cliente, String nombre, String email, String telefono) {
		this.id_cliente = id_cliente;
		this.nombre = nombre;
		this.email = email;
		this.telefono = telefono;
	}
	
	//METODO LISTAR
	public static List<Cliente>listarClientes(){
		List<Cliente> lista = new ArrayList<>();
		
		String query = "SELECT * FROM Clientes";
		
		try (Connection conn = Conexion.conectar();
				Statement stmt = conn.createStatement();
				ResultSet rs = stmt.executeQuery(query)) {
			while (rs.next()) {
				//OBJETO PELICULA QUE ALMACENA LOS RESULTADOS DEL WHILE
				Cliente c = new Cliente(
				rs.getInt("id_cliente"),
				rs.getString("nombre"),
				rs.getString("email"),
				rs.getString("telefono")
				);
				lista.add(c);
				}
			
				//POSIBLE ERROR 1
				} catch (SQLException e) {
				System.out.println("Error al obtener clientes: " + e.getMessage());
				}
				return lista;
				}
	
	
	//METODO INSERTAR
	public static void insertarClientes(String nombre, String email, String telefono) {
		String queryInsert = "INSERT INTO Clientes (nombre, email, telefono) " + "VALUES (?, ?, ?)";
		
		try (Connection conn = Conexion.conectar();
				
			PreparedStatement sentenciaI = conn.prepareStatement(queryInsert)) {
			// EJECUTA LA SENTENCIA
	        sentenciaI.setString(1, nombre);
	        sentenciaI.setString(2, email);
	        sentenciaI.setString(3, telefono);
	        
	        int filas = sentenciaI.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Cliente insertado correctamente.");
	        }

	    } catch (SQLException e) {
	        System.out.println("Error al insertar cliente: " + e.getMessage());
	    }
	}
	
	
	//METODO ELIMINAR
	public static void eliminarClientes(int id_cliente) {
	    String queryDelete = "DELETE FROM Clientes WHERE id_cliente = ?";
	    try (Connection conn = Conexion.conectar();
	         PreparedStatement sentenciaDel = conn.prepareStatement(queryDelete)) {

	        sentenciaDel.setInt(1, id_cliente); 
	        int filas = sentenciaDel.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Cliente eliminado correctamente.");
	        } else {
	            System.out.println("No existe un cliente con ese ID.");
	        }
	    } catch (SQLException error) {
	        System.out.println("Error al eliminar el cliente: " + error.getMessage());
	    }
	}
	
	
	//METODO ACTUALIZAR
	public static void actualizarClientes(String nombre, String email, String telefono, int id_cliente) {
		String queryUpdate = "UPDATE Clientes SET nombre = ?, email = ?, telefono = ? WHERE id_cliente = ?";
		
		try (Connection conn = Conexion.conectar();		
				PreparedStatement sentenciaUp = conn.prepareStatement(queryUpdate)) {

	        sentenciaUp.setString(1, nombre);
	        sentenciaUp.setString(2, email);
	        sentenciaUp.setString(3, telefono);
	        sentenciaUp.setInt(4, id_cliente);

	        int filas = sentenciaUp.executeUpdate();

	        if (filas > 0) {
	            System.out.println("Cliente actualizado correctamente.");
	        } else {
	            System.out.println("No se encontró un cliente con ese ID.");
	        }

	    } catch (SQLException e) {
	        System.out.println("Error al actualizar cliente: " + e.getMessage());
	    }
	}
	
	//METODO QUE HE AÑADIDO PORQUE SI NO, NO ME MUESTRA LOS CLIENTES BIEN
	public String toString() {
	    return "ID: " + id_cliente +
	           ", Nombre: " + nombre +
	           ", Email: " + email +
	           ", Teléfono: " + telefono;
	}

}


	






