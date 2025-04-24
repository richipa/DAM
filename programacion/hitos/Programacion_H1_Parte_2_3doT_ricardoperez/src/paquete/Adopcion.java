
package paquete;

public class Adopcion {
    private Animal animal;
    private String nombrePersona;
    private String dniPersona;

    public Adopcion(Animal animal, String nombrePersona, String dniPersona) {
        this.animal = animal;
        this.nombrePersona = nombrePersona;
        this.dniPersona = dniPersona;
    }

    public Animal getAnimal() {
        return animal;
    }

    public String getNombrePersona() {
        return nombrePersona;
    }

    public String getDniPersona() {
        return dniPersona;
    }

    public void mostrarAdopcion() {
        System.out.println("Animal adoptado:");
        animal.mostrar();
        System.out.println("Adoptado por: " + nombrePersona + " - DNI: " + dniPersona);
    }
}
