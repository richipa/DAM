package controlador;
import vista.Menus;
import modelo.Facturas;
import java.util.*;

public class ControladorFacturas {
	//OBJETO MENU PARA TODOS LOS TIPOS DE MENU
    Menus menu = new Menus();
    
   //MENU FACTURAS
    public void menuFacturas() {
        int opcion;

        do {
            opcion = menu.menuFacturas();

            switch (opcion) {
                case 1:
                insertarFacturas();
                break;
                
                case 2:
                listarFacturass();
                break;
                
                case 3:
                eliminarFacturas();
                break;
                
                case 4:
                actualizarFacturas();
                break;
                
                case 5:
                System.out.println("Volviendo al menú principal");
                break;
                
                default:
                System.out.println("Opción no válida. Inténtalo de nuevo.");
            }

        } while (opcion != 5);
    }
    

    public void insertarFacturas() {
    	//ESTAS 3 VARIABLES LLAMAN A LOS METODOS DE LA VISTA (ASI CON TODOS LOS METODOS)
        int id_proveedor = menu.pedirIdProveedor();
        java.sql.Date fecha = menu.pedirFecha();
        double total = menu.pedirTotal();
        Facturas.insertarFacturas(id_proveedor, fecha, total);
    }

    public void listarFacturass() {
    	//COGE LA LISTA DEL MODELO
        List<Facturas> lista = Facturas.listarFacturas();
        if (lista.isEmpty()) {
            System.out.println("No hay Facturass registradas.");
        } else {
            for (Facturas f : lista) {
                System.out.println(f); // Muestra cada Factura (usa toString())
            }
        }
    }

    public void eliminarFacturas() {
        int id = menu.pedirIdFactura();
        Facturas.eliminarFacturas(id);
    }

    public void actualizarFacturas() {
        int id = menu.pedirIdFactura();
        int id_proveedor = menu.pedirIdProveedor();
        java.sql.Date fecha = menu.pedirFecha();
        double total = menu.pedirTotal();
        Facturas.actualizarFacturas(id_proveedor, fecha, total, id);
    }
}

