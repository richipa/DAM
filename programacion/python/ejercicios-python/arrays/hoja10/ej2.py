'''
Enunciado: Crea dos matrices de 2x3 con valores enteros de tu elección. Suma ambas matrices elemento por elemento y muestra el resultado.
'''
import numpy as np
matriz1=np.array([[10, 5, 20], [6, 10, 50]])
matriz2=np.array([[10, 5, 90], [6, 1, 10]])
suma= matriz1 + matriz2
print(suma)