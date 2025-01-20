'''

Descripción: Crea un programa que solicite al usuario una palabra y use un bucle para invertirla.

Instrucciones:
Solicita una palabra al usuario.
Usa un bucle for para recorrer la palabra de forma inversa.
Construye una nueva cadena con las letras en orden inverso.
Imprime la palabra invertida.
Ejemplo de entrada:
palabra = "Python"
Salida esperada:
La palabra invertida es: nohtyP

'''

palabra = ""

palabra_invertida = ""

palabra=input("Introduce una palabra: ")

for caracter in palabra:
    palabra_invertida = caracter + palabra_invertida

print (palabra_invertida)
    



