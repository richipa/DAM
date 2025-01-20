'''

Ejercicio 4: Filtrar elementos mayores a un valor dado
Enunciado: Crea un array de Numpy con 8 números enteros. Luego, crea un nuevo array que solo contenga los elementos mayores a 5 y muéstralo.

Motivo para usar arrays: Con Numpy, puedes aplicar filtros de manera muy rápida usando operaciones de comparación en una sola línea. Filtrar listas de esta forma requeriría escribir bucles y condicionales adicionales.

'''

#Importamos la biblioteca numpy y le ponemos un alias
import numpy as np

#Creamos el array
array_1=np.array([1, 2, 3, 4, 5, 6, 7, 8])


#filtramos para que muestre solo los mayores de 5
filtro = array_1[array_1 > 5]

print(filtro)
