'''

Descripción:
Crea un programa que cuente cuántas veces el usuario ingresa un número negativo antes de ingresar un número positivo.

Instrucciones:
Inicializa un contador en 0.
Utiliza un bucle while que continúe hasta que el usuario ingrese un número positivo.
En cada iteración, solicita al usuario que ingrese un número.
Si el número es negativo, incrementa el contador.
Cuando el usuario ingrese un número positivo, imprime cuántos números negativos ingresó

'''
#Definimos las variables
contador = 0
numero = 0
ejemplo = True  #Aqui he usado un booleano porque no puedo inicializar la variable "numero" en 0 sin más, ya que si no, el programa sale usando el "break" directamente.
while ejemplo == True:
    numero = int(input("Introduce un numero: " ))

    if numero >= 0:
        break
    elif numero < 0:
        contador = contador + 1

print(f"Ingresaste {contador} numeros negativos " )