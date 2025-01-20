'''

Ejercicio 2: Leer el Contenido de un Archivo de Texto
Enunciado: Crea un archivo de texto llamado frase.txt y escribe en él una frase de tu elección (puedes hacerlo de forma manual). Luego, escribe un programa que abra y lea el contenido de frase.txt y lo muestre en pantalla.

'''

#Abrir archivos
def creararchivo():
    with open('frase.txt', 'w') as archivo1:
        contenido = archivo1.write("Este es un mensaje personalizado por Ricardo")
        print(contenido)


def leerarchivo():
    with open ("frase.txt", "r") as archivo1:
        contenido = archivo1.read()
        print (contenido)



def crearyescribir():
    creararchivo()
    leerarchivo()

crearyescribir()