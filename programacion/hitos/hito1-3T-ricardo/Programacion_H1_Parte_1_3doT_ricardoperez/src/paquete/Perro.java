package paquete;
public class Perro extends Animal {
	String tamaño;
	// Constructores
	public Perro(int chip, String nombre, int edad, String raza, boolean esAdoptado, String tamaño) {
		super(chip, nombre, edad, raza, esAdoptado);
			this.tamaño = tamaño;
	}

	@Override
	void mostrar() {
	    System.out.println("Perro:");
	    System.out.println("  Chip: " + chip);
	    System.out.println("  Nombre: " + nombre);
	    System.out.println("  Edad: " + edad + " años");
	    System.out.println("  Raza: " + raza);
	    System.out.println("  Adoptado: " + (esAdoptado ? "Sí" : "No"));
	    System.out.println("  Tamaño: " + tamaño);
	}

}
