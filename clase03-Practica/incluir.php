
<?php
/*Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.
Incluir en el archivo, saludo.php. ¿Qué sucede?
Reemplazar include por require. ¿Qué sucede?
Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?
En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede?*/

echo "soy incluir.php <br>";
include ("saludo.php");//antes de crear el archivo.php daba warning
echo "<br>";
require ("saludo.php");//antes de crear el archivo.php daba fatal error
echo "<br>";
echo "<br>";
echo "<br>";
include ("saludo.php");
echo "<br>";
include ("saludo.php");
echo "<br>";
include ("saludo.php");//se incluyo tres veces
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
include_once ("saludo.php");//no hizo nada porq ya estaba incluido, si borro los anteriores, aunq lo ponga tres veces lo incluye una vez sola.
echo "<br>";
include_once ("saludo.php");
echo "<br>";
include_once ("saludo.php");


 ?>
