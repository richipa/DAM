package paquete;

public class Gato extends Animal {
	boolean testLeucemia;
	// Constructores
	public Gato(int chip, String nombre, int edad, String raza, boolean esAdoptado, boolean testLeucemia) {
		super(chip, nombre, edad, raza, esAdoptado);
			this.testLeucemia = testLeucemia;
	}

	@Override
	void mostrar() {
	    System.out.println("Gato:");
	    System.out.println("  Chip: " + chip);
	    System.out.println("  Nombre: " + nombre);
	    System.out.println("  Edad: " + edad + " años");
	    System.out.println("  Raza: " + raza);
	    System.out.println("  Adoptado: " + (esAdoptado ? "Sí" : "No"));
	    System.out.println("  Leucemia: " + (testLeucemia ? "Positivo" : "Negativo"));
	}

}
