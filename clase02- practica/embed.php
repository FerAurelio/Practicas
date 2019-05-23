<?php
$nombre= "Fernanda";

$numero= rand(0,1);
if ($numero==1) {
  $numero="SI";
}else
$numero="NO";

$webs=["<a href='http://www.google.com' target='_blank'>Google</a>","<a href='https://facebook.com' target='_blank'>Facebook</a>","<a href='https://twitter.com' target='_blank'>Twitter</a>",];
$sitiosWeb=[];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?=$nombre?></h2>
    <h3>¿Es usted un ganador?</h3>
<p><?=$numero?></p>
    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($webs as $sitio) {
      $sitiosWeb[]= "<li>$sitio</li>";
      echo $sitiosWeb[]= "<li>$sitio</li>";
      }


      ?>



    </ul>
  </body>
</html>
