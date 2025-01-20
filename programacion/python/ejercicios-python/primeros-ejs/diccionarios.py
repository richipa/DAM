#Los diccionarios son estructuras de datos que contienen una clave y un valor
#Cada clave tiene su valor

#Como definimos un diccionario

persona = {"nombre": "Juan", "edad": 30, "ciudad": "Madrid"}


#Como accedemos a los valores de un diccionario.
#Utilizando las claves.

#Imprime nombre de persona
print(persona["nombre"])

#Imprime edad de persona
print(persona["edad"])

#Imprime ciudad de persona
print(persona["ciudad"])


#Muestra los valores de cada clave en cada vuelta del bucle cambia de clave y nos muestra su valor
for clave in persona:
    print(persona[clave])

#Podemos crear una agenda con un diccionario, utilizaremos el nombre del contacto como clave y el telefono como valor

contactos={"Pedro":"44444", "Juan":"55555", "Nuria":"99999"}

for clave in contactos:
    print(f"El telefono de {clave} es {contactos[clave]}")

#Metodos utiles en los diccionarios:
#keys(): Devuelve una vista de todas las claves.
#values(): Devuelve una vista de todos los valores.
#items(): Devuelve una vista de todos los pares clave-valor.

stock_fruteria={"manzana": 3, "banana": 2, "naranja": 1}
for fruta, cantidad in stock_fruteria.items():
    print(f"Tengo {cantidad} {fruta}(s)")