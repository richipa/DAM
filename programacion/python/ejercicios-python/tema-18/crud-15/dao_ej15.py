import conectarBDD

def crear():
    conexion=conectarBDD.contectaBDD("empresa")

    # Crear un cursor
    cursor = conexion.cursor()

    #Insertar nuevo registro
    numdep=input("Escriba el numero de departamento: ")
    nombredep=input("Escriba el nombre del departamento: ")
    registro = (numdep, nombredep)

    #Consulta SQL INSERT
    consulta = "INSERT INTO departamento (numdep, nombredep) values (%s, %s)"
    cursor.execute (consulta, registro)

    #confirmar los cambios en la BBDD
    conexion.commit()
    print("Nuevo departamento insertado correctamente")

    cursor.close()
    conexion.close()


def leer():
    conexion=conectarBDD.contectaBDD("empresa")
    cursor = conexion.cursor()

    #listar registros
    consulta_select = "SELECT * FROM departamento"

    cursor.execute(consulta_select)

    # Obtener y mostrar los resultados
    resultados = cursor.fetchall() #fetchall obtiene todos los resultados
    for numdep, nombredep in resultados:
        print (f"Numero: {numdep} / Nombre: {nombredep}")

    #confirmar los cambios en la BBDD
    conexion.commit()
    print("Todos los departamentos listados correctamente")

    cursor.close()
    conexion.close()


def actualizar():
    conexion=conectarBDD.contectaBDD("empresa")
    cursor = conexion.cursor()

    #actualizar registros
    actualiza = input("Seleccione el numero del departamento que desea actualizar: ")
    actualiza_nombre = input("Escriba el nuevo nombre del departamento: ")

    #consulta UPDATE
    consulta_update = "UPDATE departamento set nombredep = %s WHERE numdep = %s"
    cursor.execute(consulta_update, (actualiza_nombre, actualiza))

    conexion.commit()
    print("Departamento actualizado correctamente")

    cursor.close()
    conexion.close()

def eliminar():
    conexion=conectarBDD.contectaBDD("empresa")
    cursor = conexion.cursor()   

    #elimiar registro
    elimina_usuario = input("Escriba el numero del departamento que desee eliminar: ")

    #consulta DELETE
    consulta_delete = "DELETE FROM departamento WHERE numdep =%s"
    cursor.execute(consulta_delete, (elimina_usuario,))

    # Confirmar los cambios en la base de datos
    conexion.commit()
    print("Departamento eliminado correctamente")

    cursor.close()
    conexion.close()

def menu():
    while True:
        print("=== Gestión de Departamentos ===")
        print("1. Crear nuevo departamento")
        print("2. Leer departamentos existentes")
        print("3. Actualizar un departamento")
        print("4. Eliminar un departamento")
        print("5. Salir")
        
        opcion = int(input("Seleccione una opción: "))
        
        # Verificar la opción elegida
        if opcion == 1:
            crear()
        elif opcion == 2:
            leer()
        elif opcion == 3:
            actualizar()
        elif opcion == 4:
            eliminar()
        elif opcion == 5:
            print("Hasta la próxima")
            break
        else:
            print("Opción no válida. Por favor, seleccione una opción del 1 al 5.")
