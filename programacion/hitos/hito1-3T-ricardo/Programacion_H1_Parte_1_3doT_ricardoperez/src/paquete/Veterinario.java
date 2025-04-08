package paquete;
import java.util.HashMap;
import java.util.Scanner;

public class Veterinario {
 HashMap<Integer , Animal> animales = new HashMap<>(); // Almacena animales por su chip
static Scanner scanner = new Scanner(System.in);



public void  darDeAltaPerro(Scanner scanner) {
    System.out.println("Numero de chip: ");
    int chip = scanner.nextInt();
    
    // Verificación del chip
    if (animales.containsKey(chip)) {
        System.out.println("Error: ya existe un animal con ese chip.");
        return;
    }
    scanner.nextLine();
    System.out.println("Nombre: ");
    String nombre = scanner.nextLine();
    scanner.nextLine();
    System.out.println("Edad: ");
    int edad = scanner.nextInt();
    scanner.nextLine();
    System.out.println("Raza: ");
    String raza = scanner.nextLine();
    scanner.nextLine();
    System.out.println("Adoptado (escribe true o false): ");
    Boolean adoptado = scanner.nextBoolean();
    scanner.nextLine();
    System.out.println("Tamaño: ");
    String tamano = scanner.nextLine();
    
    // Control de error al añadir el animal
    if (animales.containsKey(chip)) {
    	System.out.println("Este chip ya está registrado");
    } else {
    	Animal nuevoPerro = new Perro(chip, nombre, edad, raza, adoptado, tamano);
    	// Guardar el perro
    	animales.put(chip, nuevoPerro);
    	System.out.println("Perro registrado correctamente.");
    	}
    }
    


public void  darDeAltaGato(Scanner scanner) {
    System.out.println("Numero de chip: ");
    int chip = scanner.nextInt();
    
    // Verificación del chip
    if (animales.containsKey(chip)) {
        System.out.println("Error: ya existe un animal con ese chip.");
        return;
    }
    
    System.out.println("Nombre: ");
    String nombre = scanner.nextLine();
    
    System.out.println("Edad: ");
    int edad = scanner.nextInt();
    
    System.out.println("Raza: ");
    String raza = scanner.nextLine();
    
    System.out.println("Adoptado  (escribe true o false): ");
    Boolean adoptado = scanner.nextBoolean();
    
    System.out.println("Ha pasado el test de leucemia (escribe true o false): ");
    Boolean test_leucemia = scanner.nextBoolean();
        
    // Control de error al añadir el animal
    if (animales.containsKey(chip)) {
    	System.out.println("Este chip ya está registrado");
    } else {
    	Animal nuevoGato = new Gato(chip, nombre, edad, raza, adoptado, test_leucemia);
    	// Guardar el gato
    	animales.put(chip, nuevoGato);
    	System.out.println("Gato registrado correctamente.");
    	}
    }


public Animal buscarAnimal(int chip) {
	return animales.get(chip);
}

}

