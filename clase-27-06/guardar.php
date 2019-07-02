<?php


$titulo=$_POST["titulo"];
$rating=$_POST["rating"];
$premios=$_POST["premios"];
$fecha_estreno=$_POST["fecha_estreno"];
$duracion=$_POST["duracion"];
$genero=$_POST["genero"];


$stmt= $conection->prepare("INSERT INTO movies VALUES (null,null,null,:titulo,:rating,:premios,:fecha_estreno,:duracion,:genero)");

$stmt->bindValue(":titulo",$titulo, PDO::PARAM_STR);
$stmt->bindValue(":rating",$rating, PDO::PARAM_STR);
$stmt->bindValue(":premios",$premios, PDO::PARAM_STR);
$stmt->bindValue(":fecha_estreno",$fecha_estreno, PDO::PARAM_STR);
$stmt->bindValue(":duracion",$duracion, PDO::PARAM_STR);
$stmt->bindValue(":genero",$genero, PDO::PARAM_STR);

$stmt->execute();

 ?>
