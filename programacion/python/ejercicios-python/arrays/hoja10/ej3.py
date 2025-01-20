'''
Enunciado: Crea una matriz de 4x4 con números enteros consecutivos, comenzando desde 1. Extrae y muestra la tercera columna de la matriz.
'''

import numpy as np
matriz4x4=np.arange(1, 17).reshape((4,4))
columna3=matriz4x4[:, 2]
print(columna3)