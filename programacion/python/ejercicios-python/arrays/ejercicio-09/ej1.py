'''

Ejercicio 1: Sumar dos arrays elemento por elemento
Enunciado: Crea dos arrays de Numpy de tamaño 5, llenos de números enteros. Luego, calcula la suma de ambos arrays elemento por elemento y muestra el resultado.

Motivo para usar arrays: Con Numpy, podemos sumar directamente dos arrays usando la operación +, sin necesidad de recorrer cada elemento manualmente como tendríamos que hacer con listas.

'''

#Importamos la biblioteca numpy y le ponemos un alias
import numpy as np

#Creamos los dos arrays
array_1=np.array([10,20,30,40,50])

array_2=np.array([1,2,3,4,5])

#Sumamos los dos arrays(10+1, 20+2, etc...)
array_sumado = array_1 + array_2


#Mostramos el resultado sumado
print(array_sumado)