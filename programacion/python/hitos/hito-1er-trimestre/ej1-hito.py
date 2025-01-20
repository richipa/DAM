'''

Mostrar figuras por pantalla (2,5 puntos): a través de un menú solicitaremos al usuario qué tipo de figura quiere mostrar (1-Cuadrado|2-Rectángulo), si la opción no es correcta, se mostrará mensaje de error y se volverá a solicitar hasta que se correcta.

▪ Si ha seleccionada un cuadrado, pediremos su lado y mostraremos la figura, su área y perímetro

▪ Si ha seleccionado un rectángulo, pediremos base y altura y mostraremos la figura, su área y perímetro.


'''

opcion = ""
opciones_validas = [1, 2, 3]

print("MENU")

print("1 - Cuadrado")

print("2 - Rectángulo")

print("3 - Salir")

while True:
    opcion = int (input("Dime una opcion: " ))

    if opcion == 1:
        
        lado = int(input("Dime el lado del cuadrado: "))

        print ("*"* lado)
        print ("*"* lado)

        area = lado * lado

        print (f"Su area es de {area} ")

        perimetro = lado * 4

        print (f"Su perimetro es de {perimetro}")


        print ("_____________________________")

        print("MENU")

        print("1 - Cuadrado")

        print("2 - Rectángulo")

        print("3 - Salir")


    elif opcion == 2:

        base = int(input("Dame la base del rectangulo: "))

        altura = int(input("Dame la altura del rectangulo: "))

        print ("*"* base)
        print ("*"* altura)

        area = base * altura

        print (f"Su area es {area}")

        perimetro = base * 2 + altura * 2

        print (f"Su perimetro es {perimetro}")


        print ("_____________________________")

        print("MENU")

        print("1 - Cuadrado")

        print("2 - Rectángulo")

        print("3 - Salir")
        

    elif opcion == 3:
        
        print ("Hasta la próxima")
        break

    else:
        print ("Opcion incorrecta")

        print ("_____________________________")

        print("MENU")

        print("1 - Cuadrado")

        print("2 - Rectángulo")

        print("3 - Salir")
