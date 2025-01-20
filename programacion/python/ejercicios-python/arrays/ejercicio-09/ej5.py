'''

Ejercicio 5: Elevar al cuadrado cada elemento de un array
Enunciado: Crea un array de Numpy con 5 elementos enteros. Calcula el cuadrado de cada elemento y muestra el resultado.

Motivo para usar arrays: Numpy permite aplicar operaciones matemáticas, como la potenciación, a cada elemento de un array en una sola operación. Esto es mucho más eficiente que hacer un bucle para elevar cada elemento al cuadrado en una lista.

'''

#Importamos la biblioteca numpy y le ponemos un alias
import numpy as np

array_elevado=np.array([10,20,30,40,50])

#Elevamos cada numero del array al cuadrado con "**"
al_cuadrado = array_elevado ** 2

print (al_cuadrado)

