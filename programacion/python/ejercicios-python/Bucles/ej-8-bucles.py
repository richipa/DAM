'''

Descripción:
Escribe un programa que muestre un menú de opciones simples al usuario y realice una acción según la opción seleccionada.

Instrucciones:
Muestra las siguientes opciones al usuario:
Saludar
Despedirse
Preguntar cómo está
Solicita al usuario que seleccione una opción ingresando el número correspondiente.
Utiliza estructuras if-elif-else para manejar cada opción y mostrar un mensaje adecuado.
Si el usuario ingresa una opción inválida, informa al usuario.

'''
opcion = ""

#Mostramos el menú al usuario.

print("¡Hola!, selecciona una opción:")
print("Opción 1: Saludar")
print("Opción 2: Despedirse")
print("Opción 3: Preguntar cómo está")

#Le pedimos al usuario que seleccione una de las opciones.
opcion = input("Introduce el número de la opción que desees (Ej. 1, 2 o 3): " )

#Aquí definimos que mensaje sale por pantalla según la opción que el usuario escoja.

if opcion == '1':
    print("¡Hola programador!")

elif opcion == '2':
    print("¡Hasta luego programador!")

elif opcion == '3':
    print("¿Como estás? ¿Has conseguido acabar tu código?")

else:
    print("Opción NO válida. Seleccione una opción del 1 al 3.")
