package modelo;

public class Sala {
    private String idSala;
    private String nombreSala;

  //CONSTRUCTOR
    public Sala(String idSala, String nombreSala) {
        this.idSala = idSala;
        this.nombreSala = nombreSala;
    }

  //METODOS GETTER PARA DEVOLVER LOS DATOS DE LAS SALAS
    public String getIdSala() { return idSala; }
    public String getNombreSala() { return nombreSala; }

    @Override
    public String toString() {
        return nombreSala;
    }
}
