'''

Ejercicio 4: Redondear una Lista de Números Decimales
Enunciado: Tienes una lista de números decimales y quieres redondear cada uno de ellos. Utiliza la función map() y la función predefinida round().

Qué debes practicar:
Uso de la función map().
Aplicar funciones predefinidas de Python (round()).
Trabajar con números decimales y redondeo.


'''
#Creamos la lista
lista_numeros = [3.181, 2.978, 10.569, 4.574]

#Creamos la funcion
def numeros_decimales(numero):

    return round(numero) #Round para que redondee cada numero de la lista

#Hacemos el map para que itere en cada numero
numeros_redondeados = list(map(numeros_decimales, lista_numeros))

print(numeros_redondeados)