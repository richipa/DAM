package modelo;
import java.sql.*;
import java.sql.Date;
import java.util.*;

public class Facturas {
    int id_factura;
    int id_proveedor;
    Date fecha;
    double total;

    // CONSTRUCTOR
    public Facturas(int id_factura, int id_proveedor, Date fecha, double total) {
        this.id_factura = id_factura;
        this.id_proveedor = id_proveedor;
        this.fecha = fecha;
        this.total = total;
    }

    // METODO LISTAR
    public static List<Facturas> listarFacturas() {
        List<Facturas> lista = new ArrayList<>();
        String query = "SELECT * FROM Facturas_Recibidas";

        try (Connection conn = Conexion.conectar();
             Statement stmt = conn.createStatement();
             ResultSet rs = stmt.executeQuery(query)) {

            while (rs.next()) {
                // OBJETO FACTURA QUE ALMACENA LOS RESULTADOS DEL WHILE
                Facturas f = new Facturas(
                        rs.getInt("id_factura"),
                        rs.getInt("id_proveedor"),
                        rs.getDate("fecha"),
                        rs.getDouble("total")
                );
                lista.add(f);
            }

        } catch (SQLException e) {
            System.out.println("Error al obtener Facturas: " + e.getMessage());
        }
        return lista;
    }

    // METODO INSERTAR
    public static void insertarFacturas(int id_proveedor, Date fecha, double total) {
        String queryInsert = "INSERT INTO Facturas_Recibidas (id_proveedor, fecha, total) VALUES (?, ?, ?)";

        try (Connection conn = Conexion.conectar();
             PreparedStatement sentenciaI = conn.prepareStatement(queryInsert)) {

            sentenciaI.setInt(1, id_proveedor);
            sentenciaI.setDate(2, fecha);
            sentenciaI.setDouble(3, total);

            int filas = sentenciaI.executeUpdate();

            if (filas > 0) {
                System.out.println("Factura insertada correctamente.");
            }

        } catch (SQLException e) {
            System.out.println("Error al insertar Factura: " + e.getMessage());
        }
    }

    // METODO ELIMINAR
    public static void eliminarFacturas(int id_factura) {
        String queryDelete = "DELETE FROM Facturas_Recibidas WHERE id_factura = ?";

        try (Connection conn = Conexion.conectar();
             PreparedStatement sentenciaDel = conn.prepareStatement(queryDelete)) {

            sentenciaDel.setInt(1, id_factura);
            int filas = sentenciaDel.executeUpdate();

            if (filas > 0) {
                System.out.println("Factura eliminada correctamente.");
            } else {
                System.out.println("No existe una Factura con ese ID.");
            }

        } catch (SQLException error) {
            System.out.println("Error al eliminar la Factura: " + error.getMessage());
        }
    }

    // METODO ACTUALIZAR
    public static void actualizarFacturas(int id_proveedor, Date fecha, double total, int id_factura) {
        String queryUpdate = "UPDATE Facturas_Recibidas SET id_proveedor = ?, fecha = ?, total = ? WHERE id_factura = ?";

        try (Connection conn = Conexion.conectar();
             PreparedStatement sentenciaUp = conn.prepareStatement(queryUpdate)) {

            sentenciaUp.setInt(1, id_proveedor);
            sentenciaUp.setDate(2, fecha);
            sentenciaUp.setDouble(3, total);
            sentenciaUp.setInt(4, id_factura);

            int filas = sentenciaUp.executeUpdate();

            if (filas > 0) {
                System.out.println("Factura actualizada correctamente.");
            } else {
                System.out.println("No se encontró una Factura con ese ID.");
            }

        } catch (SQLException e) {
            System.out.println("Error al actualizar Factura: " + e.getMessage());
        }
    }

    // toString para mostrar facturas correctamente
    public String toString() {
        return "ID: " + id_factura +
               ", Proveedor ID: " + id_proveedor +
               ", Fecha: " + fecha +
               ", Total: " + total;
    }
}
