<?php
require ("conection.php");

$stmt= $conection->prepare("SELECT DISTINCT CONCAT(a.first_name, '' , a.last_name) as actores
FROM actors as a");
$stmt->execute();
$actores= $stmt->fetchAll(PDO::FETCH_ASSOC);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actores</title>
  </head>
  <body>
    <ul><h1>Listado de Actores:</h1>
      <?php foreach ($actores as $actor): ?>
      <br>
      <li> <?= $actor["actores"] ?>

      </li>
<?php endforeach; ?>
    </ul>
