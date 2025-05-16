package controlador;
import vista.Menus;
import modelo.Proveedores;
import java.util.*;

public class ControladorProveedores {
	//OBJETO MENU PARA TODOS LOS TIPOS DE MENU
    Menus menu = new Menus();
    
   //MENU ProveedoresS
    public void menuProveedores() {
        int opcion;

        do {
            opcion = menu.menuProveedores();

            switch (opcion) {
                case 1:
                insertarProveedores();
                break;
                
                case 2:
                listarProveedoress();
                break;
                
                case 3:
                eliminarProveedores();
                break;
                
                case 4:
                actualizarProveedores();
                break;
                
                case 5:
                System.out.println("Volviendo al menú principal");
                break;
                
                default:
                System.out.println("Opción no válida. Inténtalo de nuevo.");
            }

        } while (opcion != 5);
    }
    

    public void insertarProveedores() {
    	//ESTAS 3 VARIABLES LLAMAN A LOS METODOS DE LA VISTA (ASI CON TODOS LOS METODOS)
        String nombre = menu.pedirNombreP();
        String cif = menu.pedirCifP();
        String telefono = menu.pedirTelefonoP();
        Proveedores.insertarProveedores(nombre, cif, telefono);
    }

    public void listarProveedoress() {
    	//COGE LA LISTA DEL MODELO
        List<Proveedores> lista = Proveedores.listarProveedores();
        if (lista.isEmpty()) {
            System.out.println("No hay Proveedoress registrados.");
        } else {
            for (Proveedores p : lista) {
                System.out.println(p); // Muestra cada Proveedores (usa toString())
            }
        }
    }

    public void eliminarProveedores() {
        int id = menu.pedirIdProveedor();
        Proveedores.eliminarProveedores(id);
    }

    public void actualizarProveedores() {
        int id = menu.pedirIdProveedor();
        String nombre = menu.pedirNombreP();
        String cif = menu.pedirCifP();
        String telefono = menu.pedirTelefonoP();
        Proveedores.actualizarProveedores(nombre, cif, telefono, id);
    }
}


