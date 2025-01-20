'''

Descripción: Escribe un programa que permita al usuario ingresar nombres uno por uno. El usuario puede terminar de ingresar nombres escribiendo "fin". Al final, el programa debe mostrar la lista completa de nombres ingresados y luego mostrarlos uno por uno.

Instrucciones:
Usa un bucle while para solicitar nombres al usuario.
Si el usuario ingresa "fin", termina el bucle.
Almacena cada nombre ingresado en una lista.
Al finalizar, imprime la lista completa de nombres.
Usa un bucle for para imprimir cada nombre individualmente.
Ejemplo de interacción:
Entrada: Ana
Entrada: Luis
Entrada: Marta
Entrada: fin

Salida esperada:
Los nombres ingresados son: ['Ana', 'Luis', 'Marta']

Lista de nombres:
- Ana
- Luis
- Marta

'''

#Asignamos variables
lista = [] 
nombre = input("Introduce un nombre: ")  #Pedimos al usuario que meta un nombre.

while nombre != "fin": 
    lista.append(nombre) 

    nombre = input("Introduce un nombre: ")  #Volvemos a pedir al usuario que meta un nombre pero dentro del bucle para que se repita.

print (f"Los nombres ingresados son {lista}")

print("La lista de nombres es:")  #Imprimeme este mensaje antes del bucle para que no se repita.
for nombre in lista:   
    print (f"- {nombre}")  #Imprimeme cada nombre en la lista en cada vuelta del bucle.







        