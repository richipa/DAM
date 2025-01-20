'''

Ejercicio 3: Calcular el Doble de Cada Número en una Lista
Enunciado: Quieres calcular el doble de cada número en una lista. Crea una función que calcule el doble y úsala junto con map().

Qué debes practicar:
Uso de la función map().
Definir funciones matemáticas básicas (en este caso, multiplicar por 2).
Transformar elementos de una lista.


'''
#Creamos la lista
lista_numeros = [3, 2, 10, 4 ,12]

#Creamos la funcion
def doble_numero(numero):

    return numero * 2  #Multiplicamos cada numero por 2, para sacar el doble

#Hacemos el map para que itere en cada numero
numeros_doblados = list(map(doble_numero, lista_numeros))

print (numeros_doblados)