'''
Ejercicio 1: Usar filter() para eliminar los números menores a 10
Dada la siguiente lista de números:
numeros = [4, 9, 16, 25, 1, 7, 12]

Define una función mayor_a_10() que devuelva True para los números mayores que 10 y úsala con filter() para quedarte solo con esos números.
'''

numeros = [4, 9, 16, 25, 1, 7, 12]

def mayor_a_10(numero):

    return numero > 10

numero_mayor = filter(mayor_a_10, numeros)
print(list(numero_mayor))

############################################


'''
Ejercicio 2: Usar map() para convertir metros a centímetros
Dada la siguiente lista de alturas en metros:

alturas_metros = [1.60, 1.75, 1.80, 1.50]

Define una función metros_a_centimetros() que multiplique cada altura por 100 para convertirla a centímetros, y úsala con map().

'''

alturas_metros = [1.60, 1.75, 1.80, 1.50]


def metros_a_centimetros(altura):

    return altura * 100

conversion = list(map(metros_a_centimetros, alturas_metros))
print (conversion)