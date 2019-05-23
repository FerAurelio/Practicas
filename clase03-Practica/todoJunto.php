<?php
/*Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver cuánto vale $funcionesEjecutadas en cada momento. ¿Esto está permitido? ¿Qué sucede?*/
echo $funcionesEjecutadas = 0;

/*Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.*/

include_once("funciones.php");
include_once("superficie.php");

function radioMayor($ra1,$ra2,$ra3){
$elMayor=0;
$sup1 = circulo($ra1);
$sup2 = circulo($ra2);
$sup3 = circulo($ra3);

return $elMayor= mayor($sup1,$sup2,$sup3);


}

echo radioMayor(4,6,2);
echo "<br>";

echo mayor(4,10,2);
echo "<br>";
echo rectangulo(4,2);

/*Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de la cadena: "Me encanta php, a mi también me encanta php!"*/
echo "<br>";
$cadena= "Me encanta php, a mi también me encanta php!";
$buscar= "php";
$buscado = strpos($cadena, $buscar);
echo "La palabra '$buscar' fue encontrada en la posición '$buscado'";
echo "<br>";






 ?>
