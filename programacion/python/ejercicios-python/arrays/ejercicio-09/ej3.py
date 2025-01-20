'''

Ejercicio 3: Calcular el promedio de un array

Enunciado: Crea un array de Numpy con 10 números enteros de tu elección. Calcula el promedio de los elementos y muestra el resultado.

Motivo para usar arrays: Numpy permite calcular el promedio de los elementos de un array con la función np.mean() de forma rápida y eficiente, algo que con listas requeriría escribir más código.

'''

#Importamos la biblioteca numpy y le ponemos un alias
import numpy as np

#np.mean para calcular el promedio de todos los valores en total
array_prom=np.mean([100, 90, 80, 70, 60, 50, 40, 30 ,20 ,10])

print(array_prom)