<?php
/*Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++.*/



/*Generar un archivo llamado superficie.php:
Definir una función triangulo() que retorne su superficie.
Definir una función rectangulo() que retorne su superficie.
Definir una función cuadrado() que retorne su superficie.
Utilizando la función pi(), definir una función circulo() que retorne su superficie.*/


function triangulo($base,$altura){
  global  $funcionesEjecutadas;
  $funcionesEjecutadas++;
return ($base*$altura)/2;

}

echo triangulo(10,5);


echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";



function rectangulo($base,$altura){
  global  $funcionesEjecutadas;
  $funcionesEjecutadas++;
return $base*$altura;

}

echo rectangulo(10,5);




echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";




function cuadrado($lado){
  global  $funcionesEjecutadas;
  $funcionesEjecutadas++;
return $lado*$lado;

}

echo cuadrado(4);



echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";





function circulo($radio){
  global  $funcionesEjecutadas;
  $funcionesEjecutadas++;
return M_PI*$radio*$radio;




}

echo circulo(4);







echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";



?>
