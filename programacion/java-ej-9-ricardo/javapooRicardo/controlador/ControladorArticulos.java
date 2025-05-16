package controlador;
import vista.Menus;
import modelo.Articulos;
import java.util.*;

public class ControladorArticulos {
	//OBJETO MENU PARA TODOS LOS TIPOS DE MENU
    Menus menu = new Menus();
    
   //MENU ArticulosS
    public void menuArticulos() {
        int opcion;

        do {
            opcion = menu.menuArticulos();

            switch (opcion) {
                case 1:
                insertarArticulos();
                break;
                
                case 2:
                listarArticuloss();
                break;
                
                case 3:
                eliminarArticulos();
                break;
                
                case 4:
                actualizarArticulos();
                break;
                
                case 5:
                System.out.println("Volviendo al menú principal");
                break;
                
                default:
                System.out.println("Opción no válida. Inténtalo de nuevo.");
            }

        } while (opcion != 5);
    }
    

    public void insertarArticulos() {
    	//ESTAS 3 VARIABLES LLAMAN A LOS METODOS DE LA VISTA (ASI CON TODOS LOS METODOS)
        String nombre = menu.pedirNombreA();
        String precio = menu.pedirPrecio();
        String stock = menu.pedirStock();
        Articulos.insertarArticulos(nombre, precio, stock);
    }

    public void listarArticuloss() {
    	//COGE LA LISTA DEL MODELO
        List<Articulos> lista = Articulos.listarArticulos();
        if (lista.isEmpty()) {
            System.out.println("No hay Articuloss registrados.");
        } else {
            for (Articulos a : lista) {
                System.out.println(a); 
            }
        }
    }

    public void eliminarArticulos() {
        int id = menu.pedirIdArticulo();
        Articulos.eliminarArticulos(id);
    }

    public void actualizarArticulos() {
        int id = menu.pedirIdArticulo();
        String nombre = menu.pedirNombreA();
        String precio = menu.pedirPrecio();
        String stock = menu.pedirStock();
        Articulos.actualizarArticulos(nombre, precio, stock, id);
    }
}



