#Estructuras de datos

#Se puede iniciar una lista vacia
amigos =[]

#Se puede iniciar una lista con valores
amigos = ["Juan", "Ana", "Carlos", "Sofía", "Pedro"] #Esto es una lista

#Podemos acceder a cada elemento de la lista utilizando su indice

#amigos = ["Juan", "Ana", "Carlos", "Sofía", "Pedro"]
#             0      1       2         3        4   

print (amigos[4]) #Muestra el elemento que corresponda con el indice

print(amigos) #Muestra todos los elementos de la lista

#for indicandole que vaya cogiendo elemento a elemento y metiendolo en 
#una variable, por ejemplo en este caso "amigo"
for amigo in amigos:
    print (amigo)

#si quiero conocer el tamaño de una lista, debo utilizar la funcion "len"

print(f"Tienes {len(amigos)} amigos, deberías salir más")

#La funcion len tambien nos devuelve el numero de caracteres en una variable string
cadena_texto = "En un lugar de la mancha de cuyo nombre no quiero acordarme."

print(f"La longitud de la cadena es de: {len(cadena_texto)}")

for caracter in cadena_texto:
    print(caracter)

#Las listas son mutables, es decir, que pueden cambiar de tamaño y se pueden modificar sus elementos
#Esta es la gran diferencia con las tuplas

#Añadir un elemento a la lista
#Para añadir un elemento a una lista, utilizamos el método append de la clase lista

print(f"Esta es la lista de amigos antes del append: {amigos}")

amigos.append("Faustino")

print(f"Esta es la lista de amigos despues del append: {amigos}")

#Tambien podemos añadir un elemento a la lista en el lugar que queramos
#Para eso usamos el metodo insert

print(f"Esta es la lista de amigos antes del append: {amigos}")

amigos.insert(0, "Paloma")

print(f"Esta es la lista de amigos despues del append: {amigos}")

#Tambien podemos eliminar elementos de una lista
#Para eso usamos el metodo remove

amigos.remove("4")

print(f"Esta es la lista de amigos despues del remove: {amigos}")

