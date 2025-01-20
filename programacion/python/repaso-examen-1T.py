#Repaso los arrays

import numpy as np

def arrays():
    mi_lista = [1, 2, 3, 4,]

    mi_array = np.array(mi_lista)

    print(mi_array)  # [1 2 3 4]


    mi_matriz = np.array( [ [ 1, 2, 3 ], [ 4, 5, 6 ] ] )
    print(mi_matriz)
    # Salida:
    # [[1 2 3]    #El valor 2 sería el elemento (0,1) de mi array - fila 0 columna 1
    #  [4 5 6]]   #El valor 6 sería el elemento (1,2) de mi array - fila 1 columna2


def conjuntos_de_datos():
    # Conjuntos de datos

    # Crea una lista llamada frutas que contenga tres nombres de frutas. Imprime el nombre de la primera fruta.
    '''
    frutas = ['manzana', 'plátano', 'fresa']
    print(frutas[0]) # manzana
    '''
    # Crea un diccionario llamado alumno con los datos de un estudiante (nombre, edad, curso). Imprime el valor del nombre.
    '''
    alumno = {"nombre": "Juan", "edad": 20, "curso": "DAM"}
    
    print(alumno["nombre"], alumno["edad"], alumno["curso"])
    
    for clave in alumno:
        print(alumno["edad"], alumno["curso"])
    '''
    #Podemos crear una agenda con un diccionario, utilizaremos el nombre del contacto como clave y el telefono como valor.
    '''
    agenda_contactos = {"Ricardo": "444", "Juan": "555", "Valen": "777"}
    for clave in agenda_contactos:
        print(f"El telefono de {clave} es {agenda_contactos[clave]}")
    '''
    #Repaso de listas
    lista_amigos = ["Ricardo", "Iker", "Marcos"]
    '''
    print(f"Tienes {len(lista_amigos)} amigos, deberías salir más")
    '''
    for elementos in lista_amigos:
        print(elementos)


#Estructuras de datos complejas
def estructuras_de_datos_complejas():
    
    frutas = ["manzana", "plátano", "fresa", "naranja", "limón"]
    # print(frutas[0:3]) #Imprime los primeros 3 elementos de la lista

    frutas[1] = "kiwi"
    frutas.append("papaya") #Añade un elemento al final de la lista
    print(frutas) #Imprime la lista con el cambio
    
    
'''
#Funcion MAP
#Tenemos una lista de precios de productos y queremos aplicar un incremento del 10% a cada uno:
#Lista de precios
precios = [10, 20, 30, 40]
#Funcion que incrementa el precio en un 10%
def aumentar_precio(precio):
    #Devuelve cada precio incrementado en un 10%
    return precio * 1.10
#Aplicamos map() a la lista "precios"
precios_aumentados = list(map(aumentar_precio, precios))
print(precios_aumentados)

'''

'''
#Lista con los datos
numeros = [10, 20, 30, 40, 50]

#Funcion que almacena la operación
def elevar_al_cuadrado(numero):
    return numero ** 2

#Una vez tenemos una lista con datos y una operacion, podemos aplicar map()
numeros_elevados = list(map(elevar_al_cuadrado, numeros))
print(numeros_elevados)
'''

#Ejercicios practica
#Añade una nueva ciudad al final de la lista.
'''
ciudades = ["Madrid", "Barcelona", "Málaga", "Valencia", "León"]

#ciudades.append("Brazil")

del ciudades[3]
print (ciudades)
'''
'''
ciudades = ["Madrid", "Londres", "París", "Berlín", "Roma"]
ciudades.append("X")  # Añadir una nueva ciudad
ciudades[1] = "X"  # Cambiar el nombre de la segunda ciudad
del ciudades[3]  # Eliminar la cuarta ciudad
print("Lista actualizada:", ciudades)
'''
#Eleva al cuadrado cada elemento del array.
#Filtra los valores mayores a 50.
'''
array1 = np.array([10, 20, 30, 40, 50, 100, 400])

elevado = array1 ** 2
print(elevado)

mayor50 = array1[array1 > 50]
print(mayor50)
'''

def saludar(carlos):
    print("¡Hola, " + carlos + "!")




def saludo_personalizado(nombre, hora_del_dia):
    if hora_del_dia == "mañana":
        print("¡Buenos días, " + nombre + "!")
    elif hora_del_dia == "tarde":
        print("¡Buenas tardes, " + nombre + "!")
    else:
        print("¡Buenas noches, " + nombre + "!")



def diccionario():
    telefono_contactos = {
    "Ana": "555-1234",
    "Carlos": "555-5678",
    "Laura": "555-9876"
}
    telefono_contactos["Ricardo"] = "555-1111"
    del telefono_contactos["Ana"]
    telefono_contactos["Ricardo"] = "777-777"
    for clave, valor in telefono_contactos.items():
        print(clave, ":", valor)


'''
numeros = [10, 20, 30, 40, 50, 100, 400]
def sumeta(numero):
    return numero + 1000

numero_sumado = list(map(sumeta, numeros))
print (numero_sumado)

'''
def archivos():
    archivo = open('mi_archivo.txt', 'a')
    contenido = archivo.write("Hijos de puta")
    with open ('mi_archivo.txt', 'a') as archivo:
        archivo.write("que tal?")
    print(contenido)
    archivo.close()

archivos()