<?php
session_start();

if ($_POST) {
$_SESSION["reiniciar"]=$_POST["setear"];
$_SESSION["incrementar"]=$_POST["DeAUno"];


if (isset($_SESSION["reiniciar"])){
  $_SESSION["contador"]=0;
};
if (isset($_SESSION["incrementar"])) {

$_SESSION["contador"]+=1;


};


header('Location: mostrar.php');

};
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="POST">
    <input type="submit" name="setear" value="Reiniciar">
    <input type="submit" name="DeAUno" value="Incrementar">
    </form>
  </body>
</html>
