#Creacion de constantes y variables de mi programa
IVA = 0.21
TOTAL_IVA = 1.21

nombre = input("¿Como te llamas: ")

print("Hola,", nombre) #Esto es un comentario


#print(f"Hola, {nombre}")

edad = input("Dame tu edad: ")

programacion = int(input("Dame tu nota de programacion: "))
lenguaje_marcas = int(input("Dame tu nota de lenguaje de marcas: "))
media = (programacion+lenguaje_marcas) /2

print(f"Tu nota media es {media}")

cantidad = int(input("Dime de que cantidad quieres que te calcule el IVA: "))

iva = float(cantidad) * IVA

importe_con_iva = float(cantidad) * TOTAL_IVA

print(f"El IVA de {cantidad} es {iva}")
print (f"El importe total con IVA es {importe_con_iva}")
