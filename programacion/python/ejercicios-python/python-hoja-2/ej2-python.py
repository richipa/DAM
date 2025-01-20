'''
Descripción: Crea un programa que solicite al usuario números enteros de manera repetida. El programa debe calcular el promedio de los números introducidos y terminar cuando el usuario ingrese un cero.

Instrucciones:
Usa un bucle while para seguir solicitando números.
Si el número ingresado es cero, termina el bucle.
Lleva un registro de la suma total y del conteo de números introducidos.
Al finalizar, calcula y imprime el promedio de los números ingresados.
Ejemplo de entrada:
Entrada: 4
Entrada: 8
Entrada: 6
Entrada: 0

Salida esperada:
El promedio de los números introducidos es 6.0.

'''
#Definimos variables
numero = ""
suma = 0
promedio = 0
conteo = -1  #Iniciamos a -1 para que no nos cuente el 0 para el promedio

while numero != 0:  #Mientras que el numero sea diferente a 0, lee el numero y hazme las operaciones

        numero=int(input("Introduce un numero: " ))
        suma = suma + numero 
        conteo = conteo + 1
        

        if numero == 0:  #Si el usuario mete 0, hazme el promedio de los numeros introducidos antes del 0
            promedio = suma / conteo
        
print(f"El promedio de los numeros es {promedio}")
