<?php

/**
Objetivo: Crear un programa que realice operaciones aritméticas básicas (suma, resta, multiplicación, división) según la elección del usuario.
 */

$numero1 = readline("Introduce un numero: ");
$numero2 = readline("Introduce otro numero: ");
echo ("1.Suma \n 2.Resta \n 3.Multiplicacion \n 4.Division \n");
$opcion = readline("Selecciona una opcion para calcular estos dos numeros: ");

switch ($opcion) {
    case 1:
        $suma = $numero1 + $numero2;
        echo "La suma en total es: $suma";
        break;
    case 2:
        $resta = $numero1 - $numero2;
        echo "La resta en total es: $resta";
        break;
    case 3;
        $multiplicacion = $numero1 * $numero2;
        echo "La multiplicación en total es: $multiplicacion";
        break;
    case 4;
        $division = $numero1 / $numero2;
        echo "La division en total es: $division";
}