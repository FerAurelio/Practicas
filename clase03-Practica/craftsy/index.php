<?php
/*
Generar una función descripcionLarga que dado un artículo devuelva un String que tenga la descripción del artículo y el precio.

Modificar la maqueta para que en el espacio donde se imprimen las descripciones de los artículos se imprima la descripcionLarga

Agregar un valor booleano a los “articulos” que sea “estaEnOferta”. Si el artículo está en oferta se le hace un 20% de descuento al precio original. Generar una función para calcular los precios finales y mostrarlos en la visualización del usuario.*/
require ("head.php");

require ("header.php");

require ("productos.php");
 ?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?=$charset;?>">
		<link rel="stylesheet" href="css/<?=$css;?>"<>
		<title><?=$tituloSección["home"];?></title>
	</head>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<header> <!-- Encabezadp -->
				<nav class="main-nav">
					<a href="index.html"><img class="logo" src="img/logo.png" alt="logo craftsy"></a>
					<ul class="menu">
						<?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
							<li><a href="<?php echo $linkUrl; ?>"> <?php echo $linkTxt; ?> </a></li>
						<?php endforeach; ?>
					</ul>
					<ul class="menu access">
						<?php foreach ($access as $linkAcc => $linkeado) : ?>
							<li><a href="<?php echo $linkeado; ?>"> <?php echo $linkAcc; ?> </a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</header>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
	<?php foreach ($products as $oneProduct):?>
      	<article class="producto"><!-- Contenedor de cada producto -->

						<img class="main-photo" src="img/<?= $oneProduct["imagen"]?>" alt="<?= $oneProduct["titulo"] ?>">
						<h2 class="name"><?= $oneProduct["titulo"] ?></h2>
						<p><?=$oneProduct["descripcion"]?></p>
				  	<a class="more" href="#">ver más</a>

					</article>
          	<?php endforeach; ?>
				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
