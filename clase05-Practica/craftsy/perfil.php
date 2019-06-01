<?php
require ("registerController.php");

if ($_GET) {
 $nameByGet= trim($_GET ["nombre"]);
 $emailByGet= trim($_GET["email"]);
 $imgByGet= $_GET["imgUser"];
 $undefinedUser= "img/img-user.png";
}
 ?>

<!DOCTYPE html>
<html>
	<?php require ("head.php"); ?>

	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<?php require ("header.php"); ?>

			<main> <!-- Cuerpo principal del sitio -->
				<section class="tarjeta">
<h2 class="name">Hola <?=isset($nameByGet)? $nameByGet : "";?>!!</h2>
<img class= "imgPerfil" src="<?=isset($imgByGet)? $imgByGet : $undefinedUser;?>" alt="Imagen de Perfil">
<h3><?=isset($emailByGet)? $emailByGet : "";?></h3>
				</section>

			</main>
		</div>
	</body>
</html>
