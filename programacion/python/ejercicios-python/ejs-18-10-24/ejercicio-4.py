'''
Ejercicio 4: Contador de Vocales
Crea un programa que pida al usuario una cadena de texto y cuente cuántas vocales hay en la cadena. El programa debe considerar las vocales a, e, i, o, u en mayúsculas y minúsculas.

'''
#Iniciamos las variables
texto=""
contador=0

#SOlicitiamos datos necesarios
texto=input("Dame una cadena de texto: ")

#Realizamos el conteo de la vocales
#Al ser el tipo string un tipo iterable, podemos recorrer una cadena de texto caracter a caracter
#utilizaremos un bucle for para recorrer la cadena

for caracter in texto:
    if caracter in "aeiou":
        contador=contador+1

print(f"La cadena introducida tiene {contador} vocales")