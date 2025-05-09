package paquete;
//IMPORTS
import java.sql.*;

import java.util.*;
import modelo.Pelicula;

public class GestionPelis {
	
	
	// METODO LISTAR PELICULAS
	public static List<Pelicula> mostrarPeliculas() {
		//ARRAYLIST QUE GUARDA LAS PELICULAS
		List<Pelicula> lista = new ArrayList<>();
		
		//VARIABLE QUE ALMACENA UNA CONSULTA JOIN ENTRE LAS DOS TABLAS
        String query = "SELECT p.id_pelicula, p.titulo, p.genero, p.anio, p.director, s.nombre_sala " +
                "FROM peliculas p JOIN salas s ON p.id_sala = s.id_sala";
        
        //SE INTENTA CONECTAR
        try (Connection conn = ConexionPeliculas.conectar();
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(query)) {

               while (rs.next()) {
            	   
            	   //OBJETO PELICULA QUE ALMACENA LOS RESULTADOS DEL WHILE
                   Pelicula p = new Pelicula(
                       rs.getString("id_pelicula"),
                       rs.getString("titulo"),
                       rs.getString("genero"),
                       rs.getInt("anio"),
                       rs.getString("director"),
                       rs.getString("nombre_sala")
                   );
                   
                   lista.add(p);
               }
               
               //POSIBLE ERROR 1
           } catch (SQLException e) {
               System.out.println("Error al obtener películas: " + e.getMessage());
           }

           return lista;
       }
	
	// METODO Y CONSULTA INSERTAR PELICULAS
	public static void insertarPeliculas(Scanner scanner) {
		System.out.print("Inserta el ID de la nueva pelicula (ej: P6:");
		String id = scanner.nextLine();
		
		//CONSULTA PARA VER SI EXISTE Y DESPUES AÑADE
		String select = "SELECT COUNT(*) FROM peliculas WHERE id_pelicula = ?";
		String insert = "INSERT INTO peliculas (id_pelicula, titulo, genero, anio, director, id_sala) " + "VALUES (?, ?, ?, ?, ?, ?)";
		
		try (Connection conn = ConexionPeliculas.conectar();
				PreparedStatement sentenciaS = conn.prepareStatement(select);
				PreparedStatement sentenciaI = conn.prepareStatement(insert)) {
			
			 // VERIFICAR SI EXISTE EL ID
			sentenciaS.setString(1, id);
			ResultSet resultado = sentenciaS.executeQuery();
			resultado.next();
			
			if (resultado.getInt(1) > 0) {
				System.out.print("Error, ya hay una pelicula con ese ID.");
				return;
			}
			
			// CAPTURAR LOS DATOS 
            System.out.print("Título: ");
            String titulo = scanner.nextLine();
            System.out.print("Género: ");
            String genero = scanner.nextLine();
            System.out.print("Año: ");
            int anio = Integer.parseInt(scanner.nextLine());
            System.out.print("Director: ");
            String director = scanner.nextLine();
            System.out.print("ID Sala (ej: S1- Sala Principal, S2- Sala 3D, S3- Sala VIP): ");
            String idSala = scanner.nextLine();
            
            //ASIGNAR LOS VALORES A LA SENTENCIA
            sentenciaI.setString(1, id);
            sentenciaI.setString(2, titulo);
            sentenciaI.setString(3, genero);
            sentenciaI.setInt(4, anio);
            sentenciaI.setString(5, director);
            sentenciaI.setString(6, idSala);
            
            // EJECUTA LA SENTENCIA
            int filas = sentenciaI.executeUpdate();
            if (filas > 0) {
                System.out.println("Película insertada correctamente.");
            }
			
		} catch (SQLException error) {
			System.out.println("Error al insertar película: " + error.getMessage());
		}
				
	}
	
	
	// METODO ELIMINAR PELICULAS
	public static void eliminarPelicula(Scanner scanner) {
		System.out.print("Inserta el ID de la pelicula a eliminar: ");
		String id = scanner.nextLine();
		
		String delete = "DELETE FROM peliculas WHERE id_pelicula = ?";
		
		try (Connection conn = ConexionPeliculas.conectar();
				PreparedStatement sentenciaDel = conn.prepareStatement(delete)) {
			sentenciaDel.setString(1, id);
			int filas = sentenciaDel.executeUpdate();
			
			if (filas > 0) {
				System.out.println(" Película eliminada.");
			} else {
				System.out.println("No existe una pelicula con ese ID");
			}
			
		} catch (SQLException error) {
			System.out.println("Error al eliminar la pelicula" + error.getMessage());
		}
	}
	
	// TODOS LOS METODOS TIENEN LA MISMA ESTRUCTURA O SIMILAR
	
	// METODO ACTUALIZAR PELICULAS
	public static void modificarPelicula(Scanner scanner) {
        System.out.print("Inserta el ID de la película a modificar: ");
        String id = scanner.nextLine();
        
        String select = "SELECT COUNT(*) FROM peliculas WHERE id_pelicula = ?";
        String update = "UPDATE peliculas SET titulo = ?, genero = ?, anio = ?, director = ?, id_sala = ? WHERE id_pelicula = ?";
        
		try (Connection conn = ConexionPeliculas.conectar();
				PreparedStatement sentenciaSel = conn.prepareStatement(select);
				PreparedStatement sentenciaUp = conn.prepareStatement(update)) {
			
			sentenciaSel.setString(1, id);
			ResultSet resultado = sentenciaSel.executeQuery();
			resultado.next();
			
			if(resultado.getInt(1) == 0) {
				System.out.println("No existe una película con ese ID.");
				return;
			}
			
            System.out.print("Nuevo título: ");
            String nuevoTitulo = scanner.nextLine();
            System.out.print("Nuevo género: ");
            String nuevoGenero = scanner.nextLine();
            System.out.print("Nuevo Año: ");
            int nuevoAnio = Integer.parseInt(scanner.nextLine());
            System.out.print("Nuevo Director: ");
            String nuevoDirector = scanner.nextLine();
            System.out.print("Nueva Sala: ");
            String nuevaSala = scanner.nextLine();

            sentenciaUp.setString(1, nuevoTitulo);
            sentenciaUp.setString(2, nuevoGenero);
            sentenciaUp.setInt(3, nuevoAnio);
            sentenciaUp.setString(4, nuevoDirector);
            sentenciaUp.setString(5, nuevaSala);
            sentenciaUp.setString(6, id);
            
            int filas = sentenciaUp.executeUpdate();
            if (filas > 0) {
                System.out.println(" Película actualizada correctamente.");
            }

		} catch (SQLException error) {
			System.out.println("Error al modificar película: " + error.getMessage());
		}
	}
	
   }
