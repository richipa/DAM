'''

Ejercicio 1: Filtrar productos perecederos
Tienes una lista de productos en un almacén y algunos de ellos son perecederos (frutas, vegetales, etc.) mientras que otros no (enlatados, productos secos). 

Crea un programa que utilice filter() para obtener solo los productos perecederos y luego imprímelos.


'''

#Creamos la lista que no caduca
lista_productos = ["carne", "pescado", "legumbres", "pasta", "pan", "verduras"]

#Creamos la lista que si caduca
perecederos =["carne", "pescado", "pan", "verduras"]

#Creamos la funcion
def productos(palabra):

    return palabra in perecederos

#filter para que itere en cada palabra y filtre
productos_perecederos = filter(productos, lista_productos)

print(list(productos_perecederos))