'''

Ejercicio 5: Calcular la Longitud de Cada Palabra en una Lista
Enunciado: Tienes una lista de palabras y quieres saber cuántas letras tiene cada una. Crea una función que calcule la longitud y úsala junto con map().

Qué debes practicar:
Uso de la función map().
Definir funciones que trabajen con cadenas de texto (en este caso, calcular la longitud con len()).
Procesar listas de cadenas de texto para obtener información sobre sus elementos.


'''
#Creamos la lista
lista_palabras = ["salsa", "picante", "aceite", "ruedas"]

#Creamos la funcion
def longitud_palabra(palabra):

    return len(palabra) #len para que cuente el numero de letras en cada palabra

#Hacemos el map para que itere en cada palabra
contador = list(map(longitud_palabra, lista_palabras))

print (contador)