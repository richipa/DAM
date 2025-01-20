'''
Ejercicio 3: Suma de los N Primeros Números
Diseña un programa que solicite al usuario un número entero positivo NNN y calcule la suma de todos los números desde 1 hasta NNN. El programa debe mostrar el resultado de la suma.

'''
#Definimos las variables
numero=0
suma=0
#Asignamos la variable numero al numero que introduzca el usuario
numero=int(input("Introduce un numero entero y positivo: " ))

#Usamos un bucle for para que cuente todos los numeros del 1 hasta el numero que mete el usuario
if numero < 0:
    print("ERROR, no es numero positivo")

elif numero > 0:
    for i in range (1, numero):
        suma = suma + i

    print(f"La suma de los numeros desde 1 hasta {numero} es de {suma}")