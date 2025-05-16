package controlador;

import vista.Menus;
import modelo.Cliente;
import java.util.*;

public class ControladorCliente {
	//OBJETO MENU PARA TODOS LOS TIPOS DE MENU
    Menus menu = new Menus();
    
   //MENU CLIENTES
    public void menuCliente() {
        int opcion;

        do {
            opcion = menu.menuCliente();

            switch (opcion) {
                case 1:
                insertarCliente();
                break;
                
                case 2:
                listarClientes();
                break;
                
                case 3:
                eliminarCliente();
                break;
                
                case 4:
                actualizarCliente();
                break;
                
                case 5:
                System.out.println("Volviendo al menú principal");
                break;
                
                default:
                System.out.println("Opción no válida. Inténtalo de nuevo.");
            }

        } while (opcion != 5);
    }
    

    public void insertarCliente() {
    	//ESTAS 3 VARIABLES LLAMAN A LOS METODOS DE LA VISTA (ASI CON TODOS LOS METODOS)
        String nombre = menu.pedirNombre();
        String email = menu.pedirEmail();
        String telefono = menu.pedirTelefono();
        Cliente.insertarClientes(nombre, email, telefono);
    }

    public void listarClientes() {
    	//COGE LA LISTA DEL MODELO
        List<Cliente> lista = Cliente.listarClientes();
        if (lista.isEmpty()) {
            System.out.println("No hay clientes registrados.");
        } else {
            for (Cliente c : lista) {
                System.out.println(c); // Muestra cada cliente (usa toString())
            }
        }
    }

    public void eliminarCliente() {
        int id = menu.pedirIdCliente();
        Cliente.eliminarClientes(id);
    }

    public void actualizarCliente() {
        int id = menu.pedirIdCliente();
        String nombre = menu.pedirNombre();
        String email = menu.pedirEmail();
        String telefono = menu.pedirTelefono();
        Cliente.actualizarClientes(nombre, email, telefono, id);
    }
}

