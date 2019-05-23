<?php
$persona = [
  "Nombre" => "Jon",
  "Apellido" => "Snow",
  "Edad" => 27,
  "Hobbies" => ["Netflix","Fútbol","Programar"]
];

echo '<pre>';
var_dump($persona);
echo '</pre>';


$persona["Edad"]= 25;
$persona["Dirección"] = "Winterfell";
$persona["Hobbies"][]="Dibujar";

echo '<pre>';
var_dump($persona);
echo '</pre>';

?>
