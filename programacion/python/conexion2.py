import mysql.connector

def conectarBDD(clase):
    conexion  = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="clase"
    )
    if conexion.is_connected():
        print("Conectado a la base de datos")
        return conexion
    


