'''
Ejercicio 2: Número Par o Impar
Escribe un programa que pida al usuario un número y determine si es par o impar. El programa debe imprimir un mensaje indicando si el número es par o impar.

'''
#Definimos las variables
numero=0

numero = int(input("Escribe un numero a tu gusto: " ))

# Usamos dos condiciones para diferenciar el numero introducido de par e impar
if numero % 2 == 0:
    print("El numero que has introducido es par")
else:
    print("El numero que has introducido es impar")
