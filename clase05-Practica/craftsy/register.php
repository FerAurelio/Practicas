<?php
require_once "countries.php";
require_once "registerController.php";


if ($_POST) {
 $nameByPost= trim($_POST ["nombre"]);
 $emailByPost= trim($_POST["email"]);


 $errorsInRegister= registerValidate();

if(!$errorsInRegister){

	$imgName= saveImage();

  $_POST["imgUser"]=$imgName;

	saveUser();

	header("location: perfil.php?nombre=" . $nameByPost . "&&email=" . $emailByPost . "&&imgUser=" . $imgName);
	exit;

}
}


?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/styles.css">
		<title>Craftsy | Registrate</title>
	</head>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<header> <!-- Encabezadp -->
				<nav class="main-nav">
					<a href="index.html"><img class="logo" src="img/logo.png" alt="logo craftsy"></a>
					<ul class="menu">
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Tablets</a></li>
						<li><a href="#">Computadoras</a></li>
					</ul>
					<ul class="menu access">
						<li><a href="login.html">login</a></li>
						<li><a href="register.html">registro</a></li>
					</ul>
				</nav>
			</header>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="form-container">
					<h1>Registrate</h1>
						<form class="access-form" method="post" enctype="multipart/form-data"> <!--Abre formulario -->
				      <!-- input Nombre -->
							<div class="field-group">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" placeholder="Ingresá tu nombre" value="<?= isset($nameByPost)? $nameByPost : "";?>" >
					      <!-- "id": vincula al label con el input.
					            "name": identifica al campo cuando se envía el form. El valor de del campo viene de lo que el usuario escribió en la caja de texto.-->

								<?php if (isset($errorsInRegister["inName"])):?>
									<p class="form-text alert-hide">
									<?=$errorsInRegister["inName"];?>
								</p>
							<?php endif; ?>
							</div>
				      <!-- input Email -->
				      <div class="field-group">
				      	<label for="email">Email</label>
								<input type="email"  name="email" placeholder="Ingresá tu email" value="<?= isset($emailByPost)? $emailByPost: "";?>">
					      <!-- "id": vincula al label con el input.
					            "name": identifica al campo cuando se envía el form. El valor de del campo viene de lo que el usuario escribió en la caja de texto.-->
									<?php if (isset($errorsInRegister["inEmail"])):?>
								<p class="form-text alert-hide">
								<?=$errorsInRegister["inEmail"];?>
								</p>
							<?php endif; ?>
				      </div>
							<div class="field-group">
								<label for="password">Contraseña</label>
								<input type="password"  name="password" placeholder="password" value="" >
								<?php if (isset($errorsInRegister["inPassword"])):?>
								<p class="form-text alert-hide">
								<?=$errorsInRegister["inPassword"];?>
								</p>
							<?php endif; ?>
							</div>

							<h3 for="pais">País de nacimiento</h3>
							<!-- Para que funcione el atributo "required" debe haber una option con value="" (vacío).-->
							<!-- El atributo "selected" predefine que opción se muestra primero en el desplegable. Sin no está seteado se muestra la primera opción.-->
							<select name="pais" >
								<option value="">Por favor, elija una opción</option>
								<?php foreach ($arrayPaises as $code => $unPais): ?>
									<option value="<?= $code ?>"><?= $unPais['name'] ?></option>
								<?php endforeach; ?>
							</select>
							<?php if(isset($errorsInRegister["inCountry"])): ?>
							<p class="form-text alert-hide">
								<?=$errorsInRegister["inCountry"];?>
							</p>
            <?php endif; ?>
							<h3>Subí tu foto de perfil</h3>
							<input type="file" name="imgProfile">
              <?php if (isset($errorsInRegister["inImgProfile"])): ?>
              	<p class="form-text alert-hide">
								<?=$errorsInRegister["inImgProfile"];?>
              <?php endif; ?>
             	</p>
							<h3>Género</h3>
							<!-- "name": igual para todos los radio buttons relacionados. De lo contario no funciona la selección cruzada entre los botones.-->
				      <input type="radio" id="masc" name="genero" value="m"> <!-- Masculino (Para mostrarlo en este ejercicio, quitar las marcas de comentarios.-->
				      <!-- Opción 2, colocamos texto al final de la etiqueta <input> -->
				      <label for="masc">Masculino</label> <!-- Opción 1: colocamos un label para identificar la eleccion -->

							<input type="radio" id="fem" name="genero" value="f"> <!-- Femenino (Para mostrarlo en este ejercicio, quitar las marcas de comentarios.-->
				      <!-- Opción 2, colocamos texto al final de la etiqueta <input> -->
				      <label for="fem">Femenino</label> <!-- Opción 1: colocamos un label para identificar la eleccion -->


				      <input type="radio" id="ns-nc" name="genero" value="ns-nc"> <!-- Prefiero no decirlo (Para mostrarlo en este ejercicio, quitar las marcas de comentarios.-->
				      <!-- Opción 2, colocamos texto al final de la etiqueta <input> -->
				      <label for="ns-nc">Prefiero no decirlo</label> <!-- Opción 1: colocamos un label para identificar la eleccion -->


				      <h3>Hobbies</h3>
				      <!-- A diferencia de los type="radio", los check box funcionan independientes entre si.
				      Aún así, para el envío del formulario corresponde que el atributo "name" se mantenga si hablamos de la misma temática. En este caso: hobbies.
				      El texto del checkbox se comporta igual que el de los radio: pude ir al final o dentro de un <label> -->
				      <input type="checkbox" id="gui" name="hobbies" value="guitarra">
				      <label for="gui">Guitarra</label>

				      <input type="checkbox" id="fut" name="hobbies" value="futbol">
				      <label for="fut">Fútbol</label>

				      <input type="checkbox" id="tenis" name="hobbies" value="tenis">
				      <label for="tenis">Tenis</label>

							<input type="checkbox" id="developer" name="developer" value="developer">
					 		<label for="developer">Programación</label>


							<!-- Text área -->
							<div class="field-group">
					      <h3 for="comentarios">Dejános tus comentarios</h3>
					      <textarea name="name" id="comentarios" rows="8" cols="40"></textarea>
							</div>

							<input type="checkbox" id="tyc" name="tyc" value="yes">
				      <label for="tyc">Acepto los términos y condiciones.</label>
							<?php if (isset($errorsInRegister["intyc"])): ?>
								<p class="form-text alert-hide">
								<?=$errorsInRegister["intyc"];?>
							<?php endif; ?>


							<br>
							<br>
				      <input type="submit" value="Registrarme">
							<input type="reset" value="Cancelar">
<br>
<br>



				    </form>
				</section>
			</main>
		</div>

	</body>
</html>
