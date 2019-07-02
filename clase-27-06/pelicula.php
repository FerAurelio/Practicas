<?php
	require_once 'conection.php';

	$stmt = $conection->prepare("
		SELECT m.title as titulo, m.rating, m.awards as premios , m.length as duracion, g.name AS genero
		FROM movies AS m
		LEFT JOIN genres AS g ON g.id = m.genre_id
		WHERE m.id = :id
	");

	$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$stmt->execute();

	$movie = $stmt->fetch(PDO::FETCH_ASSOC);

	$pageTitle = $movie['titulo'];
	require_once'partials/head.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul><h1 ><?= $movie['titulo']; ?></h5>
  <li><b>Rating: </b> <?= $movie['rating']; ?></p>
      <li><b>Premios: </b> <?= $movie['premios']; ?></p>
  <li><b>Género: </b> <?= $movie['genero']; ?></p>
<li><b>Duración: </b> <?= round($movie['duracion'] / 60); ?>hs</p>
  <a href="generos.php" class="btn btn-primary">Volver</a>

  </ul>
  </body>
</html>
