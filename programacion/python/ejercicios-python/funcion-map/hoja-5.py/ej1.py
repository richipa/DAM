'''

Ejercicio 1: Sumar 5 a Cada Número de una Lista
Enunciado: Tienes una lista de números y quieres sumar 5 a cada número. Usa la función map() junto con una función definida por el usuario que realice la suma.

Qué debes practicar:
Uso de la función map().
Definir una función que realice una operación específica (en este caso, sumar 5).


'''

#Creamos la lista
lista_numeros = [1, 2, 3, 4 ,5]

#Creamos la funcion
def suma_numero_5(numero):

    return numero + 5  #Nos de devuelve el numero sumado

#Hacemos el map para que itere en cada numero
numeros_sumados = list(map(suma_numero_5, lista_numeros))

print(numeros_sumados)