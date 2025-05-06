package modelo;

public class Pelicula {
    private String id;
    private String titulo;
    private String genero;
    private int anio;
    private String director;
    private String nombreSala;

    //CONSTRUCTOR
    public Pelicula(String id, String titulo, String genero, int anio, String director, String nombreSala) {
        this.id = id;
        this.titulo = titulo;
        this.genero = genero;
        this.anio = anio;
        this.director = director;
        this.nombreSala = nombreSala;
    }

    //METODOS GETTER PARA DEVOLVER LOS DATOS DE LAS PELICULAS
    public String getId() { return id; }
    public String getTitulo() { return titulo; }
    public String getGenero() { return genero; }
    public int getAnio() { return anio; }
    public String getDirector() { return director; }
    public String getNombreSala() { return nombreSala; }

    public void mostrar() {
        System.out.printf("%5s | %-30s | %-15s | %-4d | %-25s | %-15s\n",
            id, titulo, genero, anio, director, nombreSala);
    }
}