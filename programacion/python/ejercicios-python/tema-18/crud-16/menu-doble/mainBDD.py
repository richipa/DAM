#Programa principal para probar la conexion a la base de datos
import dao_ej15 as ejercicio15
import dao_ej16 as ejercicio16

#funcion del menu de las dos tablas
def menu_global():
    while True:
        print("=== Gestión de Tablas ===")
        print("1. Tabla Departamento")
        print("2. Tabla Trabajadores")
        print("3. Salir")

        opcion=int(input("Seleccione una opción: "))

        #si la opcion es 1 , se ejecuta el menu de la tabla Departamento, si es 2, se ejecuta el menu de la tabla Trabajadores
        if opcion == 1:
            ejercicio15.menu()

        elif opcion == 2:
            ejercicio16.menu()

        elif opcion == 3:
            print("Hasta pronto")
            break


        else:
            print("Opción no válida. Por favor, seleccione una opción válida.")

menu_global()