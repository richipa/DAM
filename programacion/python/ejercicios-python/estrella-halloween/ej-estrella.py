import random

#Creamos el diccionario y almacenamos a los monstruos
lista_monstruos=[
{"tipo": "momia", "nivel": "2"},
{"tipo": "vampiro", "nivel": "5"},
{"tipo": "zombie", "nivel": "3"},
{"tipo": "zombie corredor", "nivel": "4"},
{"tipo": "gargola", "nivel": "5"},
{"tipo": "espiritu", "nivel": "4"},
{"tipo": "jinete sin cabeza", "nivel": "5"},
{"tipo": "murcielago maligno", "nivel": "1"},
]

#Creamos la lista de objetos (armas, pociones, hechizos)
lista_objetos=[
"escopeta",
"estaca",
"sartén",
"revolver",
"dagas",
"mandoble",
"hoja oculta",
"pocion de curacion",
"pocion de aguante",
"hechizo de llamas",
"hechizo congelador",
]

numero_intentos = 0

print("¡Bienvenido a la caza de monstruos de Halloween!")

mounstro = ""

while mounstro in lista_monstruos:
