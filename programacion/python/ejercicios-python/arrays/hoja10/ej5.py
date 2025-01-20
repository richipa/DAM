'''
Ejercicio 5: Encontrar el Valor Máximo en Cada Columna
Enunciado: Crea una matriz de 4x3 con valores enteros aleatorios entre 1 y 50. Encuentra y muestra el valor máximo de cada columna.
'''
import numpy as np
matrizrandom=np.random.randint(1, 51, size=(4, 3))
maximo_columna=np.max(matrizrandom, axis=0)
print("La matriz es: ")
print(matrizrandom)
print("El maximo de cada columna es: ")
print(maximo_columna)