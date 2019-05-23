<?php

$productos=[
0 => [
"id" => "<b>1</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$300.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-1.jpg' alt='pdto 01'>",
"enOferta" => "<h3>En Oferta</h3>",
],
1 => [
"id" =>"<b>2</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$500.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-2.jpg' alt='pdto 02'>",
"enOferta" => false,
],
2 => [
"id" => "<b>3</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$900.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-3.jpg' alt='pdto 03'>",
"enOferta" => "<h3>En Oferta</h3>",
],
3 => [
"id" => "<b>4</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$800.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-1.jpg' alt='pdto 01'>",
"enOferta" => false,
],
4 => [
"id" => "<b>5</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$450.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-2.jpg' alt='pdto 02'>",
"enOferta" => "<h3>En Oferta</h3>",
],
5 => [
"id" => "<b>6</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$650.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-3.jpg' alt='pdto 03'>",
"enOferta" => false,
],
6 => [
"id" => "<b>7</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$400.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-1.jpg' alt='pdto 01'>",
"enOferta" => "<h3>En Oferta</h3>",
],
7 => [
"id" => "<b>8</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$600.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-2.jpg' alt='pdto 02'>",
"enOferta" => false,
],
8 => [
"id" => "<b>9</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$350.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-3.jpg' alt='pdto 03'>",
"enOferta" => "<h3>En Oferta</h3>",
],
9 => [
"id" => "<b>10</b>",
"titulo" => "<h2>Lorem ipsum amet</h2>",
"descripcion" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>",
"precio" => "<h2>$550.-</h2><br>",
"imagen" => "<img class='photo' src='images/img-pdto-1.jpg' alt='pdto 01'>",
"enOferta" => false,
]
];

$menu=["<li><a href='#'>home</a></li>","<li><a href='#'>quienes</a></li>","<li><a href='#'>servicios</a></li>","<li><a href='#'>portfolio</a></li>","<li><a href='#'>sucursales</a></li>","<li><a href='#'>contacto</a></li>",];
 ?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<?php foreach ($menu as $seccion) {
						echo $seccion;
					} ?>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<article class="product">

					<?php foreach ($productos as $producto) {
						foreach ($producto as $detalle) {
							echo "$detalle <br>";
								}
						echo "<a class='more' 'href=#'>ver más</a> <br><br><br>";
					}?>
			</article>
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
