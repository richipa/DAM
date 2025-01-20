'''

Ejercicio 3: Escribir Múltiples Líneas en un Archivo
Enunciado: Escribe un programa que cree un archivo de texto llamado notas.txt. El programa debe solicitar al usuario ingresar tres notas (como texto) y escribir cada una en una nueva línea del archivo. Luego, cierra el archivo.

'''

def creararchivo():
    archivo_notas = open("notas.txt", "w")
    
    nota1=input("Escribe una nota: ")
    nota2=input("Escribe una nota: ")
    nota3=input("Escribe una nota: ")
    notas = [nota1, nota2, nota3]
    archivo_notas.write(nota1 + "\n" + nota2 + "\n" + nota3 + "\n")
    print (f"Las notas introducidas son {notas}")
    archivo_notas.close

creararchivo()
