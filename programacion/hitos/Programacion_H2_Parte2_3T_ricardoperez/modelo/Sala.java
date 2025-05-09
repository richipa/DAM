package modelo;

public class Sala {
    private String idSala;
    private String nombreSala;

    public Sala(String idSala, String nombreSala) {
        this.idSala = idSala;
        this.nombreSala = nombreSala;
    }

    public String getIdSala() { return idSala; }
    public String getNombreSala() { return nombreSala; }

    @Override
    public String toString() {
        return nombreSala;
    }
}
