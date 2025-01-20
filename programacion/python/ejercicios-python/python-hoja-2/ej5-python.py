'''
Descripción: Escribe un programa que solicite al usuario ingresar números uno por uno. El usuario puede terminar de ingresar números escribiendo "hecho". Luego, usa un bucle para encontrar y mostrar el número mayor de los ingresados.

Instrucciones:
Usa un bucle while para solicitar al usuario que ingrese números.
Si el usuario ingresa "hecho", termina el bucle.
Convierte las entradas en números y almacénalos en una lista.
Usa un bucle for para recorrer la lista y encontrar el número mayor.
Imprime el número mayor encontrado.
Ejemplo de interacción:
Entrada: 3
Entrada: 7
Entrada: 2
Entrada: 9
Entrada: hecho

Salida esperada:
El número mayor ingresado es 9.

'''
#Definimos las variables

lista = []
numeros=(input("Introduce un numero: "))
numero_actual = ""
numero_nuevo = 0

#Mientras "numeros" no sean "hecho" el bucle se cumple.

while numeros != "hecho":

    numeros=int(numeros)

    lista.append(numeros)
    
    numeros=(input("Introduce un numero: "))

    if numeros == "hecho":
        break


for numeros in lista:
    numeros == numero_actual
    if numero_nuevo > numero_actual:
        numero_nuevo == numero_actual


print(f"El numero mayor ingresado es {numero_actual}")