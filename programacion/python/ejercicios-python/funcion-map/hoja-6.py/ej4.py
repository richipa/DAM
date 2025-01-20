'''

Ejercicio 4: Filtrar libros por categoría
En una librería online, tienes una lista de libros con diferentes categorías (novela, ensayo, poesía, etc.). 

Usa filter() para filtrar solo los libros de la categoría "novela" y muestra los resultados.


'''
#Creamos el diccionario con la lista libros
lista_libros= [
{"libro": "geronimo stilton", "categoria": "fantasia"},
{"libro": "romeo y julieta", "categoria": "amor"},
{"libro": "el diario de greg", "categoria": "novela"},
{"libro": "fabulas de esopo", "categoria": "novela"},
]

#Creamos la funcion 
def categoria_libros(palabra):

    #Nos devuelve el libro que es de novela
    return palabra["categoria"] == "novela"

#filter para iterar por cada palabra de la lista y filtrar novela
filtrados=list(filter(categoria_libros, lista_libros))

print(filtrados)