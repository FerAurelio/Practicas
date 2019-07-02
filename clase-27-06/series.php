<!--
1. Crear el archivo series.php que con un statement consulte a la BD de todas la series
y los muestre como un listado (div, li).
a. Adicionar que tenga un link que vaya a serie.php.

Realizar un archivo serie.php que muestre los datos de una serie (EJ: cantidad de
episodios). Para esto, tendremos una variable $idSerie que será modificada
directamente en el código (ejemplo: $idSerie = 5;). La consulta debe hacerse a
través de un statement.
a. Modificar el archivo para que reciba un parámetro por GET serie_id y realice
la consulta en la bd por ese parámetro. Para probar editaremos la URL
modificando el queryString
b. Hacer que el link del archivo series.php funcione para cada elemento y
muestre los datos en serie.php.


-->
<?php
require ("conection.php");

$stmt= $conection->prepare("SELECT id, title FROM series");
$stmt->execute();
$series= $stmt->fetchAll(PDO::FETCH_ASSOC);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Series</title>
  </head>
  <body>
    <ul><h1>Listado de series:</h1>
      <?php foreach ($series as $serie): ?>
      <br>
      <li><b>Título:</b> <?= $serie["title"] ?>
<a href="serie.php?id=<?= $serie["id"]?>"> [Ver más...]</a>
      </li>
<?php endforeach; ?>
    </ul>






  </body>
</html>
