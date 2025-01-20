'''

Ejercicio 2: Multiplicar cada elemento de un array por un número
Enunciado: Crea un array de Numpy de tamaño 6 con valores enteros de tu elección. Luego, multiplica cada elemento del array por 3 y muestra el resultado.

Motivo para usar arrays: La multiplicación escalar con arrays es mucho más eficiente en Numpy, ya que la operación se aplica directamente a cada elemento sin necesidad de un bucle.

'''

#Importamos la biblioteca numpy y le ponemos un alias
import numpy as np

#Creamos el array
array_mult=np.array([10,2,5,9,20,15])

#Multiplicamos cada num del array POR 3
multipilicacion= array_mult * 3

print(multipilicacion)