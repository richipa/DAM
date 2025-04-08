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
			System.out.println("1. Dar de alta perro");
			System.out.println("2. Dar de alta gato");
			System.out.println("3. Buscar animal por chip");
			System.out.println("4. Salir");
			System.out.print("Selecciona una opción: ");
			
			int opcion = scanner.nextInt();
			
			switch(opcion) {
			case 1:
				veterinario.darDeAltaPerro(scanner);
				break;
			case 2:
				veterinario.darDeAltaGato(scanner);
			case 3:
				 System.out.print("Introduce el chip del animal a buscar: ");
				 int chip = scanner.nextInt();
				 Animal encontrar = veterinario.buscarAnimal(chip);
				 // Control de error
				 if (encontrar != null) {
				 encontrar.mostrar();
				 } else {
					 System.out.println("No se encontró ningún animal con ese chip.");
					 break;
				 }
			case 4:
                salir = true;
                
                System.out.println("Adios");
                
                break;	
			}
		}
	}

}
