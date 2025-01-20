'''

Ejercicio 5: Filtrar tareas urgentes
Tienes una lista de tareas de un gestor de proyectos, y algunas de ellas están marcadas como urgentes. Utiliza filter() para obtener una lista de tareas urgentes y luego imprímelas.


'''
#Creamos el diccionario con la lista tareas
lista_tareas = [
{"tarea": "hacer hitos", "estado": "urgente"},
{"tarea": "hacer la colada", "estado": "no urgente"},
{"tarea": "entrenar", "estado": "urgente"},
{"tarea": "hacer la cama", "estado": "no urgente"},
]

#Creamos la funcion 
def tareas(palabra):

    #Nos devuelve SOLO la tarea que es de urgente
    return palabra["estado"] == "urgente"

#filter para iterar por cada palabra de la lista y filtrar novela
filtradas = list(filter(tareas, lista_tareas))

print(filtradas)