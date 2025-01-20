'''

Ejercicio 2: Convertir una Lista de Frases a Títulos
Enunciado: Tienes una lista de frases y quieres que cada palabra empiece con mayúscula (convertir cada frase a título). Aplica la función title() a cada frase usando map().

Qué debes practicar:
Uso de la función map().
Aplicar métodos predefinidos de Python (.title()).

'''
#Creamos la lista
lista_frases = ["salsa", "picante", "aceite", "ruedas"]

#Creamos la funcion
def convertir_frases(palabra):

    return palabra.title()  #Nos de devuelve la palabra con la primera mayuscula

#Hacemos el map para que itere en cada palabra
palabras_convertidas = list(map(convertir_frases, lista_frases))

print (palabras_convertidas)  #Mostramos la variable modificada