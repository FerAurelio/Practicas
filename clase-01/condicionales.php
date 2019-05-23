<?php
$numero1=20;
$numero2=30;

if ($numero1>$numero2){
  echo "El número mayor es $numero1";
} else{
    echo  "El número mayor es $numero2";
  }

echo "<br>";

$random=rand(1, 5);

if ($random==3 || $random==5) {
echo $random;
}elseif ($random !=3){
echo "El número NO es 3";
}

echo "<br>";

$random2=rand(1,100);

if($random2>50){
  echo "El número es mayor a 50";
//}else if($random==50){
//  echo "¿qué pasa si el número es 50?";
}else{
  echo "El número es menor a 50";
}

echo "<br>";

$nombreDeUsuario= "admin";
$ContraseniaDeUsuario= "1234";

if ($nombreDeUsuario=="admin" && $ContraseniaDeUsuario=="1234"){
echo "Bienvenido!";
}else {
  echo "Hay un error en el login";
}

echo "<br>";

$nombreDeUsuario= "admin";
$ContraseniaDeUsuario= "";

if ($nombreDeUsuario=="admin" && $ContraseniaDeUsuario=="1234"){
echo "Bienvenido!";
}elseif ($nombreDeUsuario!="admin" && $ContraseniaDeUsuario=="1234") {
echo "El nombre de usuario es incorrecto";
}elseif($ContraseniaDeUsuario!="1234" && $nombreDeUsuario=="admin"){
  echo "La contraseña es incorrecta";
}else{
  echo "Hay un error en el login";
}

echo "<br>";

$edad=19;
$casado=true;
$sexo=["Masculino","Femenino","Otro"];

if($edad>18 && $casado!=false){
  echo "Bienvenido";
}elseif ($sexo[] = [2]) {
  echo "Bienvenido";
}

echo "<br>";

$cantidadDeAlumnos=-100;

if ($cantidadDeAlumnos){
echo true;
}
else {
echo false;
}

echo "<br>";

$cantidadDeAlumnos=-1;

if ($cantidadDeAlumnos){
echo true;
}
else {
echo false;
}

echo "<br>";

$cantidadDeAlumnos=0;

if ($cantidadDeAlumnos){
echo true;
}
else {
echo false;
}

echo "<br>";

$cantidadDeAlumnos=1;

if ($cantidadDeAlumnos){
echo true;
}
else {
echo false;
}

echo "<br>";

$cantidadDeAlumnos=100;

if ($cantidadDeAlumnos){
echo true;
}
else {
echo false;
}

echo "<br>";

$numero=5;

echo $numero % 2==0 ? "el número es par": "el número es impar";

echo "<br>";

$nota=10;

if ($nota<4) {
  echo "desaprobado";
}elseif ($nota>3 && $nota<6) {
  echo "zafamos";
}elseif ($nota>=6 && $nota<=8) {
  echo "Bien!!!";
}elseif ($nota==9) {
  echo "Muy bien!!";
}elseif ($nota==10) {
  echo "Excelente!!!!!";
}elseif ($nota>10 || $nota<1) {
  echo "El número no es válido";
}



?>
