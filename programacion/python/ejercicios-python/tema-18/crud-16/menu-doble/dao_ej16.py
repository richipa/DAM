import conectarBDD

def crear():
    conexion=conectarBDD.contectaBDD("empresa")

    # Crear un cursor
    cursor = conexion.cursor()

    #Insertar nuevo registro
    dni=input("Escriba el dni del trabajador: ")
    nombre=input("Escriba el nombre del trabajador: ")
    ciudad=input("Escriba la ciudad donde reside: ")
    antiguedad=int(input("Escriba los años de antiguedad del trabajador: "))
    salario=int(input("Escriba el salario del trabajador: "))
    departamento=int(input("Escriba el numero del departamento al que pertenece: "))
    registro = (dni, nombre, ciudad, antiguedad, salario, departamento)

    #Consulta SQL INSERT
    consulta = "INSERT INTO trabajadores (dni, nombre, ciudad, antiguedad, salario, departamento) values (%s, %s, %s, %s, %s, %s)"
    cursor.execute (consulta, registro)

    #confirmar los cambios en la BBDD
    conexion.commit()
    print("Nuevo trabajador insertado correctamente")

    cursor.close()
    conexion.close()


def leer():
    conexion=conectarBDD.contectaBDD("empresa")
    cursor = conexion.cursor()

    #listar registros
    consulta_select = "SELECT * FROM trabajadores"

    cursor.execute(consulta_select)

    # Obtener y mostrar los resultados
    resultados = cursor.fetchall() #fetchall obtiene todos los resultados

    for fila in resultados:
        dni, nombre, ciudad, antiguedad, salario, departamento = fila[:6]
        print(f"DNI: {dni} / Nombre: {nombre} / Ciudad: {ciudad} / Años de antiguedad: {antiguedad} / Salario: {salario} / Número de departamento: {departamento}")

    #confirmar los cambios en la BBDD
    conexion.commit()
    print("Todos los trabajadores listados correctamente")

    cursor.close()
    conexion.close()


def actualizar():
    conexion=conectarBDD.contectaBDD("empresa")
    cursor = conexion.cursor()

    #actualizar registros
    actualiza = input("Seleccione el nombre de la persona que desea actualizar: ")
    actualiza_nombre = input("Escriba el nombre de su nueva ciudad: ")

    #consulta UPDATE
    consulta_update = "UPDATE trabajadores set ciudad = %s WHERE nombre = %s"
    cursor.execute(consulta_update, (actualiza_nombre, actualiza))

    conexion.commit()
    print("Localización actualizada correctamente")

    cursor.close()
    conexion.close()

def eliminar():
    conexion=conectarBDD.contectaBDD("empresa")
    cursor = conexion.cursor()   

    #elimiar registro
    elimina_usuario = input("Escriba el nombre del trabajador que desee eliminar: ")

    #consulta DELETE
    consulta_delete = "DELETE FROM trabajadores WHERE nombre = %s"
    cursor.execute(consulta_delete, (elimina_usuario,))

    # Confirmar los cambios en la base de datos
    conexion.commit()
    print("Trabajador eliminado correctamente")

    cursor.close()
    conexion.close()

def menu():
    while True:
        print("=== Gestión de Trabajadores ===")
        print("1. Crear nuevo trabajador")
        print("2. Leer trabajadores existentes")
        print("3. Actualizar un trabajador")
        print("4. Eliminar un trabajador")
        print("5. Salir")
        
        opcion = int(input("Seleccione una opción: "))
        
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


