'''
Descripción:
Crea un programa que solicite al usuario su edad y determine en qué etapa de la vida se encuentra.

Instrucciones:
Solicita al usuario que ingrese su edad.
Utiliza estructuras if-elif-else para determinar la etapa:
Si la edad es menor que 13, muestra "Eres un niño/a."
Si la edad está entre 13 y 17, muestra "Eres un/a adolescente."
Si la edad está entre 18 y 64, muestra "Eres un/a adulto/a."
Si la edad es 65 o mayor, muestra "Eres un/a adulto/a mayor."

'''

edad = 0

edad = int (input("Introduce tu edad: " ))

if edad < 13:
    print ("Eres uno niño/a.")

elif edad >= 13 and edad <= 17:
    print ("Eres un/a adolescente.")

elif edad >= 18 and edad <= 64:
    print ("Eres un/a adulto/a.")

else:
    print ("Eres un/a adulto/a mayor.")
    
