'''
Descripción: Crea un programa que establezca una contraseña predefinida y luego solicite al usuario que ingrese la contraseña. El programa debe continuar solicitando la contraseña hasta que el usuario la ingrese correctamente.

Instrucciones:
Define una variable con la contraseña (por ejemplo, "python123").
Usa un bucle while para solicitar al usuario que ingrese la contraseña.
Si la contraseña ingresada es incorrecta, muestra el mensaje "Contraseña incorrecta, intenta de nuevo.".
Si la contraseña es correcta, imprime "¡Acceso concedido!" y termina el bucle.
Ejemplo de interacción:
Contraseña establecida: "python123"

Entrada: "hola"
Salida: Contraseña incorrecta, intenta de nuevo.

Entrada: "python123"
Salida: ¡Acceso concedido!

'''
#Definimos dos variables para mas tarde comparar: la contraseña metida por el usuario y la contraseña definida.

contraseña_definida = "python123"
contraseña = ""


while contraseña != contraseña_definida:
    contraseña=input("Introduce la contraseña: ")
    if contraseña != contraseña_definida:
        print("Contraseña incorrecta, intenta de nuevo.")  #Si la contraseña no coincide con "contraseña_definida" te dice que lo intentes de nuevo.

    else:
        print("¡Acceso concedido!")  #Si no, nos deja acceder y sale del bucle.
        break