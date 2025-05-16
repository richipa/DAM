package controlador;
import vista.Menus;
import modelo.Ventas;
import java.util.*;
import java.sql.Date;

public class ControladorVentas {
    // OBJETO MENU PARA TODOS LOS TIPOS DE MENU
    Menus menu = new Menus();

    // MENU VENTAS
    public void menuVentas() {
        int opcion;

        do {
            opcion = menu.menuVentas();

            switch (opcion) {
                case 1:
                    insertarVentas();
                    break;

                case 2:
                    listarVentas();
                    break;

                case 3:
                    eliminarVentas();
                    break;

                case 4:
                    actualizarVentas();
                    break;

                case 5:
                    System.out.println("Volviendo al menú principal");
                    break;

                default:
                    System.out.println("Opción no válida. Inténtalo de nuevo.");
            }

        } while (opcion != 5);
    }

    public void insertarVentas() {
        int id_cliente = menu.pedirIdCliente();
        int id_articulo = menu.pedirIdArticulo();
        int cantidad = menu.pedirCantidad();
        Date fecha_venta = menu.pedirFecha();

        Ventas.insertarventas(id_cliente, id_articulo, cantidad, fecha_venta);
    }

    public void listarVentas() {
        List<Ventas> lista = Ventas.listarventas();
        if (lista.isEmpty()) {
            System.out.println("No hay Ventas registradas.");
        } else {
            for (Ventas v : lista) {
                System.out.println(v); // Muestra cada venta (usa toString)
            }
        }
    }

    public void eliminarVentas() {
        int id = menu.pedirIdVenta();
        Ventas.eliminarventas(id);
    }

    public void actualizarVentas() {
        int id = menu.pedirIdVenta();
        int id_cliente = menu.pedirIdCliente();
        int id_articulo = menu.pedirIdArticulo();
        int cantidad = menu.pedirCantidad();
        Date fecha_venta = menu.pedirFecha();

        Ventas.actualizarventas(id_cliente, id_articulo, cantidad, fecha_venta, id);
    }
}

