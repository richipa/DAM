import conexion2

def crear_tabla():
    conexion=conexion2.conectarBDD("clase")
    cursor=conexion.cursor()

    consulta = "CREATE TABLE IF NOT EXISTS clase (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(255)"
    cursor.execute(consulta)

    conexion.commit
    print("Nueva tabla creada correctamente")

    cursor.close()
    conexion.close()

crear_tabla()