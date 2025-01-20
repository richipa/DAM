'''
Ejercicio 5: Adivina el Número
Escribe un programa donde el usuario intente adivinar un número secreto entre 1 y 100. El programa debe indicar si el número ingresado es demasiado alto, demasiado bajo o correcto. El juego continúa hasta que el usuario adivine el número correctamente.

'''

#Para utilizar la funcion random en python, es necesario importar la libreria que contiene esa funcion.
#Para importar librerias utilizaremos la palabra reservada import

import random

#Asignamos un rango para el numero aleatorio entre 1 y 100

numero_secreto=random.randint(1,100)
numero = 0


#Hacemos un bucle de tipo while para que el usuario pueda adivinar el numero secreto y condiciones dentro del bucle para que el programa diga al usuario si el numero es demasiado alto o bajo.

while numero != numero_secreto:

#Le pedimos al usuario que introduzca un numero

    numero = int(input("Ingresa un numero aleatorio: "))

    if numero > numero_secreto:
        print(f"El numero que has introducido es demasiado alto")
    elif numero < numero_secreto:
        print(f"El numero que has introducido es demasiado bajo")
if numero == numero_secreto:
    print(f"Enhorabuena, has acertado")

