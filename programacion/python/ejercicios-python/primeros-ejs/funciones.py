

def saludar():
    print("Hola")

def despedir():
    print ("Adios")

def saludovip(nombrevip, apellidovip):
    print(f"Hola {nombrevip} {apellidovip}")

def pinta(numero):
    print("*" *numero)

#############################################

nombre = "Ricardo"
apellido = "Perez"

#saludovip(nombre, apellido)

#pinta(30)

def suma(numero1, numero2):
# resultado  = numero1 + numero2
    return numero1 + numero2

#multiplicar por 5 el resultado suma

print(f"La suma es: {suma(2, 4)}")

calculo = suma(2, 4)

print (f"La multiplicacion es: {calculo * 5}")

import requests

respuesta = requests.get("https://www.google.com")
print("El código de respuesta es:", respuesta.status_code)


