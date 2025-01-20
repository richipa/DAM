'''

Descripción:
Escribe un programa que imprima las letras de una palabra ingresada por el usuario, pero solo las vocales.

Instrucciones:
Solicita al usuario que ingrese una palabra.
Utiliza un bucle for para recorrer cada letra de la palabra.
Utiliza una estructura if para verificar si la letra es una vocal (a, e, i, o, u).
Si la letra es una vocal, imprímela.

'''
#Definimos las variables "texto" para almacenar la palabra o frase que mete el usuario, y la variable caracter para que se identifique cada letra individualmente.
texto = ""
caracter = ""


texto = input("Introduce una frase: " ).lower()

#El bucle "for" para que nos saque una por una, cada vocal de la frase. Es decir dentro de cada "caracter" en el "texto", si el "caracter" está dentro de "aeiou" imprime las vocales.
for caracter in texto:
    if caracter in 'aeiou':
        print(f"Las vocales son {caracter}")


