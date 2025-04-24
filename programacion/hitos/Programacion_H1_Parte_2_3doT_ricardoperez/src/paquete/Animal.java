package paquete;

public abstract class Animal {
	int chip;
	String nombre;
	int edad;
	String raza;
	boolean esAdoptado;
	
	public Animal(int chip, String nombre, int edad, String raza, boolean esAdoptado) {
		this.chip = chip;
		this.nombre = nombre;
		this.edad = edad;
		this.raza = raza;
		this.esAdoptado = esAdoptado;
	}
	
	// Metodo abstracto para subclases
	 abstract void mostrar();
	 
	 //Metodo que coge el chip necesario para acceder desde otras clases
	 public int getChip() {
		 return chip;
	 }
}
