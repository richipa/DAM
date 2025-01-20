'''

Ejercicio 1: Crear y Escribir en un Archivo de Texto
Enunciado: Escribe un programa que cree un archivo de texto llamado saludo.txt y escriba en él la frase "¡Hola, bienvenidos al curso de Python!". Luego, cierra el archiv

'''

#Abrir archivos
def creararchivo():
    with open('archivo1.txt', 'w') as archivo1:
        contenido = archivo1.write("¡Hola, bienvenidos al curso de Python!")
        print(contenido)


def leerarchivo():
    with open ("archivo1.txt", "r") as archivo1:
        contenido = archivo1.read()
        print (contenido)



def crearyescribir():
    creararchivo()
    leerarchivo()

crearyescribir()
