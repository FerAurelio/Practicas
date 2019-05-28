<?php


if ($_POST) {
  $userFromPost= $_POST ["nombre"];
  $mailFromPost= $_POST ["email"];
  if ( empty($userFromPost) ) {
    echo "Completar nombre de usuario<br>";
  }
  if(filter_var($mailFromPost,FILTER_VALIDATE_EMAIL)==false){
    echo "No ingresaste un email válido";
  }elseif ($userFromPost && $mailFromPost) {
    echo header("Location: exito.php");
 }
}

?>


<!DOCTYPE HTML>
<html>
<body>
<form action="formulario.php" method="post">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" value=<?= isset($userFromPost) ? $userFromPost : ''; ?>>
<br>
<label for="email">E-mail:</label>
<input type="text" name="email" value=<?= isset($mailFromPost) ? $mailFromPost : ''; ?>>
<br>
<input type="submit">
</form>
</body>
</html>
