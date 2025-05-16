package modelo;
import java.sql.*;
import java.sql.Date;
import java.util.*;

public class Ventas {
    int id_venta;
    int id_cliente;
    int id_articulo;
    int cantidad;
    Date fecha_venta;

    // CONSTRUCTOR
    public Ventas(int id_venta, int id_cliente, int id_articulo, int cantidad, Date fecha_venta) {
        this.id_venta = id_venta;
        this.id_cliente = id_cliente;
        this.id_articulo = id_articulo;
        this.cantidad = cantidad;
        this.fecha_venta = fecha_venta;
    }

    // METODO LISTAR
    public static List<Ventas> listarventas() {
        List<Ventas> lista = new ArrayList<>();
        String query = "SELECT * FROM Ventas";

        try (Connection conn = Conexion.conectar();
             Statement stmt = conn.createStatement();
             ResultSet rs = stmt.executeQuery(query)) {

            while (rs.next()) {
                // OBJETO VENTA QUE ALMACENA LOS RESULTADOS DEL WHILE
                Ventas v = new Ventas(
                        rs.getInt("id_venta"),
                        rs.getInt("id_cliente"),
                        rs.getInt("id_articulo"),
                        rs.getInt("cantidad"),
                        rs.getDate("fecha_venta")
                );
                lista.add(v);
            }

        } catch (SQLException e) {
            System.out.println("Error al obtener ventas: " + e.getMessage());
        }
        return lista;
    }

    // METODO INSERTAR
    public static void insertarventas(int id_cliente, int id_articulo, int cantidad, Date fecha_venta) {
        String queryInsert = "INSERT INTO Ventas (id_cliente, id_articulo, cantidad, fecha_venta) VALUES (?, ?, ?, ?)";

        try (Connection conn = Conexion.conectar();
             PreparedStatement sentenciaI = conn.prepareStatement(queryInsert)) {

            sentenciaI.setInt(1, id_cliente);
            sentenciaI.setInt(2, id_articulo);
            sentenciaI.setInt(3, cantidad);
            sentenciaI.setDate(4, fecha_venta);

            int filas = sentenciaI.executeUpdate();

            if (filas > 0) {
                System.out.println("Venta insertada correctamente.");
            }

        } catch (SQLException e) {
            System.out.println("Error al insertar venta: " + e.getMessage());
        }
    }

    // METODO ELIMINAR
    public static void eliminarventas(int id_venta) {
        String queryDelete = "DELETE FROM Ventas WHERE id_venta = ?";

        try (Connection conn = Conexion.conectar();
             PreparedStatement sentenciaDel = conn.prepareStatement(queryDelete)) {

            sentenciaDel.setInt(1, id_venta);
            int filas = sentenciaDel.executeUpdate();

            if (filas > 0) {
                System.out.println("Venta eliminada correctamente.");
            } else {
                System.out.println("No existe una venta con ese ID.");
            }

        } catch (SQLException error) {
            System.out.println("Error al eliminar la venta: " + error.getMessage());
        }
    }

    // METODO ACTUALIZAR
    public static void actualizarventas(int id_cliente, int id_articulo, int cantidad, Date fecha_venta, int id_venta) {
        String queryUpdate = "UPDATE Ventas SET id_cliente = ?, id_articulo = ?, cantidad = ?, fecha_venta = ? WHERE id_venta = ?";

        try (Connection conn = Conexion.conectar();
             PreparedStatement sentenciaUp = conn.prepareStatement(queryUpdate)) {

            sentenciaUp.setInt(1, id_cliente);
            sentenciaUp.setInt(2, id_articulo);
            sentenciaUp.setInt(3, cantidad);
            sentenciaUp.setDate(4, fecha_venta);
            sentenciaUp.setInt(5, id_venta);

            int filas = sentenciaUp.executeUpdate();

            if (filas > 0) {
                System.out.println("Venta actualizada correctamente.");
            } else {
                System.out.println("No se encontró una venta con ese ID.");
            }

        } catch (SQLException e) {
            System.out.println("Error al actualizar venta: " + e.getMessage());
        }
    }

    // toString para mostrar ventas correctamente
    public String toString() {
        return "ID: " + id_venta +
               ", Cliente ID: " + id_cliente +
               ", Artículo ID: " + id_articulo +
               ", Cantidad: " + cantidad +
               ", Fecha de venta: " + fecha_venta;
    }
}
