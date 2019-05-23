<?php
/*Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++.*/



/*Definir una función mayor() que reciba 3 números y devuelva el mayor.
Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite.
Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100.
Modificar tabla para que si recibe un sólo parámetro utilice el número 100.*/


function mayor($n1,$n2,$n3){
global  $funcionesEjecutadas;
$funcionesEjecutadas++;
$resultado=0;
  if($n1>$n2 && $n1>$n3){
  $resultado=$n1;
  }elseif ($n2>$n1 && $n2>$n3) {
  $resultado= $n2;
  }else {
  $resultado=$n3;
}
return $resultado;
}

echo mayor(10,5,8);


echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";


function tabla($base,$limite){
  global  $funcionesEjecutadas;
  $funcionesEjecutadas++;
for ($i=$base; $i<=$limite; $i++) {
$array[]= $i;
}
return $array;
}

var_dump(tabla(2,35));

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";


function mayor2($n1,$n2,$n3=100){
  global  $funcionesEjecutadas;
  $funcionesEjecutadas++;
$resultado=0;
  if($n1>$n2 && $n1>$n3){
  $resultado=$n1;
  }elseif ($n2>$n1 && $n2>$n3) {
  $resultado= $n2;
  }else {
  $resultado=$n3;
}
return $resultado;
}


echo mayor2(300,8);


echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";


function tabla2($base,$limite=100){
  global  $funcionesEjecutadas;
  $funcionesEjecutadas++;
for ($i=$base; $i<=$limite; $i++) {
$array[]= $i;
}
return $array;
}

var_dump(tabla2(93));

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";




?>
