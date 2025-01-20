'''

Ejercicio 3: Filtrar empleados activos
Crea un programa que reciba una lista de empleados de una empresa con su estado laboral (activo o inactivo). 

Utiliza filter() para filtrar solo a los empleados que están actualmente activos y luego imprime sus nombres.


'''

#Creamos el diccionario con la lista empleados
lista_empleados = [
{"nombre": "ricardo", "estado": "inactivo"},
{"nombre": "rafa", "estado": "inactivo"},
{"nombre": "iker", "estado": "activo"},
{"nombre": "marcos", "estado": "inactivo"},
{"nombre": "ian", "estado": "activo"},
]

#Creamos la funcion
def estado_laboral(palabra):

    return palabra["estado"] == "activo"


#filter para que itere en cada palabra y filte activo
filtrados = list(filter(estado_laboral, lista_empleados))

print(filtrados)