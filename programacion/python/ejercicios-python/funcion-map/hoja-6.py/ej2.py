'''

Ejercicio 2: Filtrar vehículos con revisión pasada
Tienes una lista de vehículos con su estado de revisión técnica (aprobada o pendiente). Usa filter() para crear una lista con los vehículos que ya han pasado la revisión y luego muestra los resultados.


'''
#Creamos un diccionario
lista_vehiculos =[
{"vehiculo": "bmw", "estado": "revision aprobada"},
{"vehiculo": "seat", "estado": "revision pendiente"},
{"vehiculo": "audi", "estado": "revision aprobada"},
{"vehiculo": "fiat", "estado": "revision pendiente"},
]


#Creamos la funcion
def revision(palabra):

    #Nos devuelve el estado donde este aprobado
    return palabra["estado"] == "revision aprobada"

#filter para que itere en cada palabra y filtre revision aprobada
revisados = list(filter(revision, lista_vehiculos))

print (revisados)

