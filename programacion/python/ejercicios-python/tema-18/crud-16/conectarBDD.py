import mysql.connector

def contectaBDD(base_datos):

# Establecer conexión con la base de datos
    conexion = mysql.connector.connect(
    host="localhost",       # Dirección del servidor (localhost para base de datos local)
    user="root",         # Usuario de la base de datos
    password="1234",  # Contraseña del usuario
    database="empresa"    # Nombre de la base de datos
)

    return conexion