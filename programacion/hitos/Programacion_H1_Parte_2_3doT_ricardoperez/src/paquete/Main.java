package paquete;
import java.util.Scanner;
public class Main {

	public static void main(String[] args) {
		boolean salir = false;
		Scanner scanner = new Scanner(System.in);
		   Veterinario veterinario = new Veterinario(); // Objeto de veterinario para usar sus metodos
		while(salir == false) {
			// MENU
			System.out.println("--- MENÚ VETERINARIO ---");
			System.out.println("1. Dar de alta animal");
			System.out.println("2. Listar Animales");
			System.out.println("3. Buscar animal");
			System.out.println("4. Realizar Adopcion");
			System.out.println("5. Dar de baja");
			System.out.println("6. Mostrar estadisticas de gatos");
			System.out.println("7. Salir");
			System.out.print("Selecciona una opción: ");
			
			int opcion = scanner.nextInt();
			
			switch(opcion) {
			
			case 1:
			    System.out.println("¿Qué tipo de animal quieres dar de alta?");
			    System.out.println("1. Perro");
			    System.out.println("2. Gato");
			    int tipo = scanner.nextInt();
			    if (tipo == 1) {
			        veterinario.darDeAltaPerro(scanner);
			    } else if (tipo == 2) {
			        veterinario.darDeAltaGato(scanner);
			    } else {
			        System.out.println("ERROR, ingrese un valor válido");
			    }
			    break;

		        
		    case 2:
		        veterinario.mostrarAnimales();
		        break;
		        
		    case 3:
		        System.out.print("Introduce el chip del animal a buscar: ");
		        int chip = scanner.nextInt();
		        Animal encontrar = veterinario.buscarAnimal(chip);
		        if (encontrar != null) {
		            encontrar.mostrar();
		        } else {
		            System.out.println("No se encontró ningún animal con ese chip.");
		        }
		        break;
		        
			case 4:
                veterinario.realizarAdopcion(scanner);  
                break;
                
			case 5:
				veterinario.darDeBajaAnimal(scanner);
				break;
				
			case 6:
				veterinario.mostrarEstadisticasGatos();
				break;
				
			case 7:
			    salir = true;
			    System.out.println("Adiós, muchas gracias");
			    break;

				
			}
		}
	}

}
