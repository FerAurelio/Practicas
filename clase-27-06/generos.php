<?php
require ("conection.php");
require_once 'conection.php';

$pageTitle = 'Géneros';
require_once 'partials/head.php';
$stmt=$conection->prepare("SELECT g.name as genero, m.title as pelicula, m.id
FROM genres as g
INNER JOIN movies as m ON genre_id=g.id");
$stmt->execute();
$generos=$stmt->fetchAll(PDO::FETCH_ASSOC);
 /*Armar un archivo generos.php para que liste todos los generos y por cada uno de los
géneros, además, arme un sector en donde indique todas las películas de dicho
género.
7. Modificar generos.php para que el título de cada película sea además un link a
pelicula.php enviando por GET el id de dicha película. pelicula.php debe mostrar la
información de dicha película.*/

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$pageTitle ?></title>
  </head>
  <body>
      <ul><h1><?=$pageTitle ?></h1>
        <?php foreach ($generos as $genero):?>
      <li><h4>Género: <?=$genero["genero"] ?></h4></li>
      <li><h4>Película: <a href="pelicula.php?id=<?=$genero["id"];?>">
        <?=$genero["pelicula"] ?></h4></a></li><br>
    <?php endforeach; ?>
    </ul>
  </body>
</html>
