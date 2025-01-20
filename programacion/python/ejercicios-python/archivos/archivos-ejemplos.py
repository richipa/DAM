#Abrir archivos
def ejercicio():
    archivo = open('mi_archivo.txt', 'r')
    contenido = archivo.read()
    print(contenido)
    archivo.close()

#Llamo a la funcion
def main():
    ejercicio()
    
main()

#############################

#Otra opcion de abrir archivos
with open('mi_archivo.txt', 'r') as archivo:
    contenido = archivo.read()
    print(contenido)


#Para leer lineas individuales
with open('mi_archivo.txt', 'r') as archivo:
    linea = archivo.readline()
    while linea:
        print(linea.strip())
        linea = archivo.readline()

#Leer todas las lineas y almacenarlas en una lista
with open('mi_archivo.txt', 'r') as archivo:
    lineas = archivo.readlines()
    for linea in lineas:
        #strip es para hacer un retorno de carro
        print(linea.strip())

