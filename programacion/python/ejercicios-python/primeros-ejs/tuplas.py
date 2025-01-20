#Las tuplas en Python
#Las tuplas son similares a las listas pero no se pueden modificar una vez creadas.

#Como definimos una tupla:

mi_tupla = (10, 20, 30)
#            0   1   2

#Como accedemos a las tuplas

print(mi_tupla[0])

#Las tuplas se pueden concatenar o sumar

mi_tupla2=(40, 50, 60)

gran_tupla = mi_tupla + mi_tupla2

print(f"La tupla resultante de sumar las dos anteriores es {gran_tupla} ")

#Se pueden crear nuevas tuplas, repitiendo una las veces que queramos mediante el operador "*"

tupla_repeticion=mi_tupla*3

print (f"La tupla resultante de repetir la primera tupla TRES veces es {tupla_repeticion}")


