package paquete;
//IMPORTS
import java.sql.*;
import java.util.*;
import modelo.Pelicula;

public class ListaPeliculas {
	
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
   }
