'''

Ejercicio 1: Contar números pares
Escribe una función llamada contar_pares que reciba una lista de números y devuelva la cantidad de números pares en la lista.

def contar_pares(numeros):
    # Tu código aquí

Ejemplo de uso:
print(contar_pares([1, 2, 3, 4, 5, 6]))  # Debería imprimir 3


'''
#Definimos la funcion "contar_pares" que contenga la variable lista
def contar_pares(lista):
    print (f"Los pares son {lista}")
    numero_par=[0, 2, 4, 6, 8, 10]
    numero= int
    contador = 0
    for numero in lista:
        if numero in numero_par:
            contador = contador +1
        return contador
    

#######################

lista =list(range(0, 10, 2))  #Lista de 10 numeros
numero_par=[0, 2, 4, 6, 8, 10]  #Variable que almacena esos numeros en especifico
numero= int
contador = 0
for numero in lista:  
    if numero in numero_par:   #Si el numero en la lista es igual a algun valor de los numeros de "numero_par" se suma +1 en el contador
        contador = contador +1
print(f"La cantidad de pares es de: {contador} ")  
contar_pares(lista)  #Invoco la funcion

#Respuesta profesor
'''
def contar_pares(listanumeros):
    contador = 0
    for numero in listanumeros:
        if (numero % 2 == 0):
            contador += 1
    return contador

############################

lista=list(range(10))  #Lista de 10 numeros
numeros_pares = contar_pares(lista)
print(f"Los pares de esta cadena de numeros son: {numeros_pares}")

'''