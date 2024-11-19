# Importar la libreria random
import random

# Diccionario que almacena los clientes y sus datos
registrocliente = {
    "Juan": {
        "dni": "12345678A",
        "numeropedido": 19,
        "listacompra": ["neumaticos", "llantas"]
    },
    "Maria": {
        "dni": "87654321B",
        "numeropedido": 89,
        "listacompra": ["faros delanteros"]
    },
    "Carlos": {
        "dni": "11223344C",
        "numeropedido": 3,
        "listacompra": []
    }
}

# Lista de productos
listaproductos = [
    "neumaticos", "aleron", "faros traseros", 
    "faros delanteros", "pomo", "llantas", 
    "retrovisores", "filtros", "faldones"
]

# Función para iniciar sesión o registrarse
def iniciar_sesion():
    while True:
        login = input("Bienvenido, ingrese un nombre para iniciar sesión (o 'registrarse' para crear una cuenta nueva): ")
        
        if login.lower() == "registrarse":
            nombrecliente = input("Ingrese su nombre para registrarse: ")
            if nombrecliente in registrocliente:
                print("Este nombre de usuario ya está registrado. Por favor, elija otro.")
                continue
            
            dni = input(f"Ingrese el DNI de {nombrecliente} para continuar: ")

            # Genera un número de pedido aleatorio
            numeropedido = random.randint(1, 200)

            # Almacena el DNI, el número de pedido y la lista de compras en el diccionario
            registrocliente[nombrecliente] = {
                "dni": dni,
                "numeropedido": numeropedido,
                "listacompra": []
            }
            print(f"Cliente registrado: {nombrecliente} con DNI {dni}")
            return nombrecliente  # Devuelve el nombre del nuevo cliente

        elif login in registrocliente:  # Verifica si el usuario ya está registrado
            datos = registrocliente[login] 
            print(f"¡Hola! {login} con DNI: {datos['dni']} y Número de pedido: {datos['numeropedido']}")
            return login
        else:
            print("Usuario no registrado. Por favor, registre primero.")

# Función para mostrar todos los productos disponibles.
def mostrar_productos():
    print("Estos son los productos disponibles: ")
    for producto in listaproductos:
        print(f"- {producto}")

# Función para seleccionar productos y añadirlos a la lista de la compra.
def seleccionar_productos(login):
    while True:
        seleccion_producto = input("Seleccione un producto de nuestro catálogo (o escriba 'salir' para finalizar): ")
        if seleccion_producto.lower() == "salir":
            break
        if seleccion_producto in listaproductos:
            # Añade el producto a la lista de compras del cliente
            registrocliente[login]["listacompra"].append(seleccion_producto)
            print(f"Producto '{seleccion_producto}' agregado a su lista de la compra.")
        else:
            print("Producto no encontrado, intente de nuevo.")

# Función para mostrar la lista de compras del cliente.
def mostrar_lista_compra(login):
    print(f"Esta es tu lista de la compra y tu numero de pedido: ")
    print(f"Numero de pedido : {registrocliente[login]['numeropedido']}")
    for producto in registrocliente[login]["listacompra"]:
        print(f"- {producto}")

# Función para mostrar la información de la compra
def mostrar_informacion_compra(login):
    datos = registrocliente[login]
    numero_pedido_input = input("Ingrese su número de pedido para ver la información de la compra: ")
    
    # Verificamos si el número de pedido ingresado coincide con el número de pedido del cliente
    if numero_pedido_input == str(datos['numeropedido']):
        print("\n--- Información de la Compra ---")
        print(f"Cliente: {login}")
        print(f"DNI: {datos['dni']}")
        print(f"Número de Pedido: {datos['numeropedido']}")
        print("Productos Comprados:")
        for producto in datos["listacompra"]:
            print(f"- {producto}")
        print("-------------------------------\n")
    else:
        print("Número de pedido incorrecto. No se puede mostrar la información de la compra.")


# Función para mostrar todos los clientes registrados y permitir seleccionar uno por DNI
def mostrar_clientes_registrados():
    respuesta = input("Te gustaría ver los clientes registrados? (si/no): ")
    if respuesta == "si":
        print("\n--- Clientes Registrados ---")

        # Itera sobre el diccionario de clientes para mostrar la información de cada uno
        for cliente in registrocliente:
            print(f"Cliente: {cliente}, DNI: {registrocliente[cliente]['dni']}, Número de Pedido: {registrocliente[cliente]['numeropedido']}")
            print("-------------------------------\n")

        # Solicitar al usuario que ingrese el DNI de un cliente
        dni_seleccionado = input("Ingrese el DNI del cliente para ver su carrito de la compra: ")

        # Buscar el cliente por DNI
        for cliente in registrocliente:
            if registrocliente[cliente]['dni'] == dni_seleccionado:

                # Guarda el nombre del cliente si el DNI coincide
                cliente_encontrado = cliente
                break
        
        #Si se encuentra el cliente, muestra su información de la compra
        if cliente_encontrado:
            print(f"Carrito del cliente: {cliente_encontrado}, DNI: {registrocliente[cliente_encontrado]['dni']}, , Carrito : {registrocliente[cliente_encontrado]['listacompra']}")
        else:
            print("No se encontró un cliente con ese DNI.")


# Función para ejecutar todo el programa
def main():
    cliente_actual = iniciar_sesion()
    while True:
        mostrar_productos()
        seleccionar_productos(cliente_actual)
        mostrar_lista_compra(cliente_actual)
        mostrar_informacion_compra(cliente_actual)
        mostrar_clientes_registrados()
        
        continuar = input("¿Desea realizar otra acción? (si/no): ")
        if continuar.lower() != "si":
            print("Gracias por su visita. ¡Hasta luego!")
            break

main()
