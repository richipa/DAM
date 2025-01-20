'''
Ejercicio 4: Calcular el Promedio de Cada Fila
Enunciado: Crea una matriz de 3x4 con valores enteros de tu elección. Calcula y muestra el promedio de los valores en cada fila de la matriz.
'''
import numpy as np
matrizpromedio = np.array([[5, 8, 3, 7],[10, 2, 6, 1],[9, 4, 12, 0]])
promedio=np.mean(matrizpromedio, axis=1)

print("La matriz es: ")
print(matrizpromedio)
print("El promedio de cada fila es: ")
print(promedio)