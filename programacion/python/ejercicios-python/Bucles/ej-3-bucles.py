'''

Descripción:
Escribe un programa que solicite al usuario un número y luego imprima todos los números desde ese número hasta cero.

Instrucciones:
Solicita al usuario que ingrese un número entero positivo.
Utiliza un bucle while que continúe mientras el número sea mayor o igual a cero.
En cada iteración, imprime el número actual y luego decrementa su valor en 1.

'''
#Asignamos la variable numero y la igualamos a 0.
numero = 0

#Pedimos al usuario que introduzca un numero y que este se almacene en la variable "numero".
numero = int(input("Introduce un número: " ))

#Con el bucle while decimos que "Mientras el numero introducido por el usuario sea positivo, imprime el numero introducido y ve decrementando su valor en -1 hasta llegar al 0".
while numero >= 0 : 
    
    print(numero)
    numero -=1  #Con "-=1" decrementamos el valor del numero de uno en uno.
        
