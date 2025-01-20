import numpy as np

mi_matriz = np.array( [ [ 1, 2, 3 ], [ 4, 5, 6 ] ] )
print(mi_matriz)
# Salida:
# [[1 2 3]    #El valor 2 sería el elemento (0,1) de mi array - fila 0 columna 1
#  [4 5 6]]   #El valor 6 sería el elemento (1,2) de mi array - fila 1 columna2

#########################################

np.zeros(): #Crea un array de ceros
ceros = np.zeros((3, 4))
print(ceros)
# Salida: una matriz de 3x4 con todos los valores en 0

np.ones(): #Crea un array de unos.
unos = np.ones((2, 2))
print(unos)
# Salida: una matriz de 2x2 con todos los valores en 1

np.linspace(): #Crea un array de valores espaciados uniformemente entre dos números.
valores = np.linspace(0, 1, 5)
print(valores)  # Salida: [0.   0.25 0.5  0.75   1.  ]

#########################################

array1 = np.array([1, 2, 3, 4])
array2 = np.array([10, 20, 30, 40])


suma = array1 + array2
print(suma)  # Salida: [11 22 33 44]


producto = array1 * array2
print(producto)  # Salida: [10 40 90 160]

#Raizes cuadradas
valores = np.array([1, 4, 9, 16])
raices = np.sqrt(valores)
print(raices)  # Salida: [1. 2. 3. 4.]

#Promedios
promedio = np.mean(valores)
print(promedio)  # Salida: 7.5

#4. Acceso y Modificación de Elementos
#Acceder y modificar elementos de un array de NumPy es similar a trabajar con listas en Python.
mi_array = np.array([10, 20, 30, 40])
print(mi_array[2])  # Salida: 30

mi_matriz = np.array([[1, 2, 3], [4, 5, 6]])
print(mi_matriz[1, 2])  # Salida: 6
