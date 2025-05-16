package vista;

import java.util.Scanner;

public class Menus {
    Scanner scanner = new Scanner(System.in);
    
    public int menuGeneral() {
        System.out.println("\n--- MENÚ DE GESTION ---");
        System.out.println("1. Gestionar clientes");
        System.out.println("2. Gestionar proveedores");
        System.out.println("3. Gestionar articulos");
        System.out.println("4. Gestionar facturas");
        System.out.println("5. Gestionar ventas");
        System.out.println("6. Salir del programa");
        System.out.print("Elige una opción: ");
		return scanner.nextInt();
    	
    }
    
    //MENU CLIENTE Y SUS METODOS
    public int menuCliente() {
        System.out.println("\n--- MENÚ CLIENTES ---");
        System.out.println("1. Insertar cliente");
        System.out.println("2. Listar clientes");
        System.out.println("3. Eliminar cliente");
        System.out.println("4. Actualizar cliente");
        System.out.println("5. Volver al menú principal");
        System.out.print("Elige una opción: ");
        return scanner.nextInt();
    }

    public String pedirNombre() {
        System.out.print("Nombre: ");
        scanner.nextLine(); 
        return scanner.nextLine();
    }

    public String pedirEmail() {
        System.out.print("Email: ");
        return scanner.nextLine();
    }

    public String pedirTelefono() {
        System.out.print("Teléfono: ");
        return scanner.nextLine();
    }

    public int pedirIdCliente() {
        System.out.print("ID del cliente: ");
        return scanner.nextInt();
    }
    
    //MENU PROVEEDORES Y METODOS
    public int menuProveedores() {
        System.out.println("\n--- MENÚ PROVEEDORES ---");
        System.out.println("1. Insertar proveedor");
        System.out.println("2. Listar proveedores");
        System.out.println("3. Eliminar proveedor");
        System.out.println("4. Actualizar proveedor");
        System.out.println("5. Volver al menú principal");
        System.out.print("Elige una opción: ");
        return scanner.nextInt();
    }

    public String pedirNombreP() {
        System.out.print("Nombre: ");
        scanner.nextLine(); 
        return scanner.nextLine();
    }

    public String pedirCifP() {
        System.out.print("CIF (ej. A12345678): ");
        return scanner.nextLine();
    }

    public String pedirTelefonoP() {
        System.out.print("Teléfono: ");
        return scanner.nextLine();
    }

    public int pedirIdProveedor() {
        System.out.print("ID del proveedor: ");
        return scanner.nextInt();
    }
    
    //MENU ARTICULOS Y METODOS
    public int menuArticulos() {
        System.out.println("\n--- MENÚ ARTICULOS ---");
        System.out.println("1. Insertar articulo");
        System.out.println("2. Listar articulos");
        System.out.println("3. Eliminar articulos");
        System.out.println("4. Actualizar articulo");
        System.out.println("5. Volver al menú principal");
        System.out.print("Elige una opción: ");
        return scanner.nextInt();
    }

    public String pedirNombreA() {
        System.out.print("Nombre: ");
        scanner.nextLine(); 
        return scanner.nextLine();
    }

    public String pedirPrecio() {
        System.out.print("Precio Unitario: ");
        return scanner.nextLine();
    }

    public String pedirStock() {
        System.out.print("Stock: ");
        return scanner.nextLine();
    }

    public int pedirIdArticulo() {
        System.out.print("ID del articulo: ");
        return scanner.nextInt();
    }
    
    //MENU FACTURAS Y METODOS
    public int menuFacturas() {
        System.out.println("\n--- MENÚ FACTURAS ---");
        System.out.println("1. Insertar factura");
        System.out.println("2. Listar facturas");
        System.out.println("3. Eliminar facturas");
        System.out.println("4. Actualizar factura");
        System.out.println("5. Volver al menú principal");
        System.out.print("Elige una opción: ");
        return scanner.nextInt();
    }

    public int pedirIdFactura() {
        System.out.print("ID de la factura: ");
        return scanner.nextInt();
    }

    public int pedirIdProveedorFacturas() {
        System.out.print("ID del proveedor: ");
        return scanner.nextInt();
    }

    public java.sql.Date pedirFecha() {
        System.out.print("Fecha (AAAA-MM-DD): ");
        scanner.nextLine();
        String fechaStr = scanner.nextLine();
        return java.sql.Date.valueOf(fechaStr);
    }

    public double pedirTotal() {
        scanner.nextLine();
        System.out.print("Total de la factura: ");
        return Double.parseDouble(scanner.nextLine());
    }
    
    //MENU VENTAS Y METODOS
    public int menuVentas() {
        System.out.println("\n--- MENÚ VENTAS ---");
        System.out.println("1. Insertar nueva venta");
        System.out.println("2. Listar ventas");
        System.out.println("3. Eliminar venta");
        System.out.println("4. Actualizar venta");
        System.out.println("5. Volver al menú principal");
        System.out.print("Elige una opción: ");
        return scanner.nextInt();
    }
    
    public int pedirIdVenta() {
        System.out.print("ID de la venta: ");
        return scanner.nextInt();
    }

    public int pedirIdClienteVentas() {
        System.out.print("ID del cliente: ");
        return scanner.nextInt();
    }

    public int pedirIdArticuloVentas() {
        System.out.print("ID del artículo: ");
        return scanner.nextInt();
    }

    public int pedirCantidad() {
        System.out.print("Cantidad: ");
        return scanner.nextInt();
    }

    public java.sql.Date pedirFechaVentas() {
        System.out.print("Fecha (AAAA-MM-DD): ");
        scanner.nextLine(); // limpiar buffer
        String fechaStr = scanner.nextLine();
        return java.sql.Date.valueOf(fechaStr);
    }

    
}

