package controlador;
import vista.Menus;
public class ControladorGeneral {
	//OBJETO MENU PARA TODOS LOS TIPOS DE MENU
    Menus menu = new Menus();
    ControladorCliente controladorCliente = new ControladorCliente();
    ControladorProveedores controladorProveedores = new ControladorProveedores();
    ControladorArticulos controladorArticulos = new ControladorArticulos();
    ControladorFacturas controladorFacturas = new ControladorFacturas();
    ControladorVentas controladorVentas = new ControladorVentas();
    
   //MENU GENERAL
    public void menuGeneral() {
        int opcion;

        do {
            opcion = menu.menuGeneral();

            switch (opcion) {
                case 1:
                controladorCliente.menuCliente();
                break;
                
                case 2:
                controladorProveedores.menuProveedores();
                break;
                
                case 3:
                controladorArticulos.menuArticulos();
                break;
                
                case 4:
                controladorFacturas.menuFacturas();
                break;
                
                case 5:
                controladorVentas.menuVentas();
                break;
                
                case 6:
                	System.out.println("Saliendo del programa");
                break;
                
                default:
                System.out.println("Opción no válida. Inténtalo de nuevo.");
                
            }

        } while (opcion != 6);
    }
    
}


