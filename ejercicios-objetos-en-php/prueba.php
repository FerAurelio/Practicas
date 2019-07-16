<?php

/*Crear un archivo prueba.php que incluya el archivo anterior e instancie un usuario.
Imprimir en pantalla (a través de la función var_dump) dicha variable*/

/*4. Instanciar un segundo usuario e imprimirlo.*/
require_once ("Usuario.php");
require_once ("Celular.php");
require_once ("Habilidad.php");


$dibujar=new Habilidad("dibujar",5);
$programar=new Habilidad("programar", 3);
$cantar=new Habilidad("cantar", 2);

$celu1=new Celular("Samsung","A30","Claro",1138184355);
$unUsuario=new Usuario("Fernanda","fer.aurelio@hotmail.com", "123456", $celu1);

$unUsuario->setMail("chagausi@hotmail.com");

$celu2=new Celular("Motorola","G7","Claro",1126675370);
$unUsuario2=new Usuario("Pablo", "pablodellar@hotmail.com", "654321", $celu2);
$unUsuario2->setMail("pablo@hotmail.com");

$celu3=new Celular("Apple","6S","Movistar",1138675102);
$unUsuario3=new Usuario("Lucia","lucia@hotmail.com", "123456", $celu3);
$unUsuario->setHabilidades($programar);
$unUsuario->setHabilidades($dibujar);
$unUsuario->setHabilidades($cantar);


echo "<pre>";
var_dump($unUsuario, $unUsuario2, $unUsuario3);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?= $unUsuario->getMail() . " / " . $unUsuario2->getMail(); ?>

<h2>probando metodo saludar</h2>
<?= $unUsuario->saludar(); ?>

<h2>probando metodo mostrarTelefono</h2>

<?= $unUsuario->mostrarTelefono();
echo "<br>";?>


<?= $unUsuario3->mostrarTelefono(); ?>


<h2>probando metodo llamar</h2>

<?php
$duracion = 3;

echo $unUsuario->llamar($unUsuario3, $duracion) ;
echo "<br>";
?>

<h2>probando metodo getHabilidades</h2>


<?php
$unUsuarioarray=$unUsuario->getHabilidades();
var_dump($unUsuarioarray);




foreach($unUsuarioarray as $unaHabilidad){
 	echo "tiene la habilidad de " . $unaHabilidad ["nombre"];
 		}



echo "<br>";
echo "<br>";
echo "<br>";
?>





  </body>
</html>
