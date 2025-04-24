package paquete;
import java.util.HashMap;
import java.util.Scanner;

public class Veterinario {
 HashMap<Integer , Animal> animales = new HashMap<>(); // Almacena animales por su chip
static Scanner scanner = new Scanner(System.in);



public void darDeAltaPerro(Scanner scanner) {
    System.out.println("Numero de chip: ");
    int chip = scanner.nextInt();
    scanner.nextLine(); // Limpiar buffer

    // Verificación del chip
    if (animales.containsKey(chip)) {
        System.out.println("Error: ya existe un animal con ese chip.");
        return;
    }

    System.out.println("Nombre: ");
    String nombre = scanner.nextLine();

    System.out.println("Edad: ");
    int edad = scanner.nextInt();
    scanner.nextLine(); // Limpiar buffer

    System.out.println("Raza: ");
    String raza = scanner.nextLine();

    System.out.println("Adoptado (escribe true o false): ");
    Boolean adoptado = scanner.nextBoolean();
    scanner.nextLine(); // Limpiar buffer

    System.out.println("Tamaño: ");
    String tamano = scanner.nextLine();

    Animal nuevoPerro = new Perro(chip, nombre, edad, raza, adoptado, tamano);
    animales.put(chip, nuevoPerro);
    System.out.println("Perro registrado correctamente.");
}
    


public void darDeAltaGato(Scanner scanner) {
    System.out.println("Numero de chip: ");
    int chip = scanner.nextInt();
    scanner.nextLine(); // Limpiar buffer

    // Verificación del chip
    if (animales.containsKey(chip)) {
        System.out.println("Error: ya existe un animal con ese chip.");
        return;
    }

    System.out.println("Nombre: ");
    String nombre = scanner.nextLine();

    System.out.println("Edad: ");
    int edad = scanner.nextInt();
    scanner.nextLine(); 

    System.out.println("Raza: ");
    String raza = scanner.nextLine();

    System.out.println("Adoptado (escribe true o false): ");
    Boolean adoptado = scanner.nextBoolean();
    scanner.nextLine(); 

    System.out.println("Ha pasado el test de leucemia (escribe true o false): ");
    Boolean test_leucemia = scanner.nextBoolean();
    scanner.nextLine(); 

    Animal nuevoGato = new Gato(chip, nombre, edad, raza, adoptado, test_leucemia);
    animales.put(chip, nuevoGato);
    System.out.println("Gato registrado correctamente.");
}


public Animal buscarAnimal(int chip) {
	return animales.get(chip);
}

// Metodo para listar animalitos
public void mostrarAnimales() {
if (animales.isEmpty()){
System.out.println("no hay ningun animal registrado");
}else {
for (Animal animal : animales.values()) {
animal.mostrar();
System.out.println("___________________");
}
}
}

// Aqui gestiono las adopciones
HashMap<Integer, Adopcion> adopciones = new HashMap<>();

public void realizarAdopcion(Scanner scanner) {
    try {
        System.out.print("Introduce el chip del animal a adoptar: ");
        int chip = scanner.nextInt();
        scanner.nextLine(); 
        
        // Busco el animal por su chip
        Animal animal = animales.get(chip);

        if (animal == null) {
            System.out.println("No existe ningún animal con ese chip.");
            return;
        }

        // Si ya está adoptado, no permito otra adopción
        if (animal.esAdoptado) {
            System.out.println("Este animal ya ha sido adoptado.");
            return;
        }

        System.out.print("Nombre de la persona: ");
        String nombre = scanner.nextLine();

        System.out.print("DNI de la persona: ");
        String dni = scanner.nextLine();

        // Marco al animal como adoptado despues de su adopcion
        animal.esAdoptado = true;
        Adopcion nuevaAdopcion = new Adopcion(animal, nombre, dni);
        adopciones.put(chip, nuevaAdopcion);

        System.out.println("Adopción registrada correctamente.");
        
        // Control de error
    } catch (Exception e) {
        System.out.println("Error al realizar la adopción. Asegúrate de introducir los datos correctamente.");
        scanner.nextLine(); 
    }
}

//Aqui doy de baja a los animales
public void darDeBajaAnimal(Scanner scanner) {
 try {
     System.out.print("Introduce el chip del animal a dar de baja: ");
     int chip = scanner.nextInt();
     scanner.nextLine(); 

     // Compruebo si el animal existe
     if (!animales.containsKey(chip)) {
         System.out.println("No se encontró ningún animal con ese chip.");
         return;
     }

     // Lo elimino
     animales.remove(chip);

     // Si también estaba adoptado, elimino su adopción
     if (adopciones.containsKey(chip)) {
         adopciones.remove(chip);
         System.out.println("Se ha eliminado también el registro de adopción.");
     }

     System.out.println("Animal eliminado correctamente.");
     
     // Control de error
 } catch (Exception e) {
     System.out.println("Error al dar de baja al animal. Verifica el chip.");
     scanner.nextLine(); 
 }
}

//Muestro las estadisticas de los gatos
public void mostrarEstadisticasGatos() {
    int totalGatos = 0;
    int gatosConLeucemia = 0;

    for (Animal animal : animales.values()) {
        if (animal instanceof Gato) {
            totalGatos++;
            Gato gato = (Gato) animal;
            if (gato.testLeucemia) {
                gatosConLeucemia++;
            }
        }
    }

    // Muestro las estadisticas
    System.out.println("--- ESTADÍSTICAS DE GATOS ---");
    System.out.println("Total de gatos: " + totalGatos);
    System.out.println("Gatos con test de leucemia positivo: " + gatosConLeucemia);
}

}

