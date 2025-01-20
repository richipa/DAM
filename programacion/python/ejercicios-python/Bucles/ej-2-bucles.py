'''
Descripción:
Crea un programa que solicite al usuario que adivine una palabra secreta. El programa debe seguir pidiendo al usuario que intente adivinar hasta que lo logre.

Instrucciones:
Define una palabra secreta (por ejemplo, "python").
Utiliza un bucle while True para pedir al usuario que ingrese una palabra.

'''
#Definimos las variables "palabra_secreta" para asignar un valor a la palabra que el ususario debe adivinar y en la variable "palabra", en mi caso, almaceno los intentos.
palabra_secreta = "python"
palabra = ""

#Este "while" quiere decir que "Mientras la palabra que el usuario introduce sea igual a la palabra secreta, acierta y sale del programa. Mientras que si no es igual, el usuario debe volver a intentarlo".
while True:

    palabra= input("Adivina la palabra secreta: " )

    if palabra == palabra_secreta:

        print("Enhorabuena, has acertado!")

        break  #Break para salir del bucle solo en caso de que acierte

    else:
        print("Has fallado, intenalo de nuevo :(")