package paquete;
//IMPORTS
import modelo.Pelicula;
//import modelo.Sala;
import java.util.*;


public class Main {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		
		int eleccion;
		
		//MENU
		do {
            System.out.println("\n--- MENÚ CINE ---");
            System.out.println("1. Ver películas");
            System.out.println("2. Salir");
            System.out.print("Seleccione una opción: ");
            eleccion = Integer.parseInt(scanner.nextLine());
            
            switch (eleccion) {
            case 1:
            	List<Pelicula> peliculas = ListaPeliculas.mostrarPeliculas();
            	
            	// POSIBLE ERROR 2
            	if (peliculas.isEmpty()) {
            		System.out.print("No hay peliculas registradas ahora mismo");
            	} else {
                    System.out.printf("%5s | %-30s | %-15s | %-4s | %-25s | %-15s\n",
                            "ID", "Título", "Género", "Año", "Director", "Sala");
                    System.out.println("----------------------------------------------------------------------------------------------");
                    for (Pelicula p : peliculas) {
                        p.mostrar();
                    }
                }
                break;
                
            case 2:
            	System.out.print("Adios");
            	break;
            }
            
            } while (eleccion != 2); 
            	scanner.close();
		}
	}

	


