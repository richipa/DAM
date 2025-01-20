import conectarBDD

def listar_departamentos():
    conexion=conectarBDD.contectaBDD("empresa")

    # Crear un cursor
    cursor = conexion.cursor()


    # Escribir la consulta SQL
    consulta = """
        SELECT nombredep FROM departamento
        """
    # Ejecutar la consulta
    cursor.execute(consulta)

    # Obtener y mostrar los resultados
    resultados = cursor.fetchall()  # Obtiene todos los resultados de la consulta
    for nombredep in resultados:
            print(f"Nombre: {nombredep}")


    # Cerrar el cursor y la conexión
    cursor.close()
    conexion.close()

def insertar_cliente():
    conexion=conectarBDD.contectaBDD("empresa")

    # Crear un cursor
    cursor=conexion.cursor()

    #definir los datos del nuevo cliente
    nuevo_cliente=('pepe@mailto.com', "Pepe", '34827819', 30, '2020-01-15')

    consulta="INSERT INTO CLIENTES (email, nombre, telefono, puntos, fecha_registro) VALUES (%s, %s, %s, %s, %s) "
    cursor.execute(consulta, nuevo_cliente)

    #confirmar los cambios en la BBDD
    conexion.commit()
    print("Nuevo cliente insertado correctamente")

    cursor.close()
    conexion.close()