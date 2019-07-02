<?php
require ("conection.php");

$stmt= $conection->prepare("SELECT s.id, s.title as titulo, g.name as genero, COUNT(e.id) AS cant_episodios, AVG(e.rating)as promedio_rating
FROM series as s
INNER JOIN seasons ON seasons.serie_id = s.id
INNER JOIN episodes AS e ON e.season_id = seasons.id
INNER JOIN genres AS g ON s.genre_id = g.id
WHERE s.id = :id");

$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$serie= $stmt->fetch(PDO::FETCH_ASSOC);



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $serie["titulo"]?></title>
  </head>
  <body>
    <ul><h1><?= $serie["titulo"]?></h1> <br>
  <li><h4>Género: <?= $serie["genero"]?></h4></li>
  <li><h4>Cantidad de episodios: <?= $serie["cant_episodios"]?></h4></li>
<li><h4>Promedio de rating: <?= $serie["promedio_rating"]?></h4></li>
  </ul>
  </body>
</html>
