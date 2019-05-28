<?php
echo "<pre>";
var_dump($_GET);
echo "</pre>";
echo "<br>";
echo "<hr>";
echo "<br>";

echo "<br>". isset($_GET["nombre"]);

echo "<br>";
echo "<hr>";
echo "<br>";

foreach ($_GET as $valor => $dato) {
  echo "$valor= $dato <br>";
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<br>";
echo "<hr>";
echo "<br>";

echo "<br>". $_POST["nombre"];

echo "<br>";
echo "<hr>";
echo "<br>";

foreach ($_POST as $valor => $dato) {
  echo "$valor= $dato <br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";


if (is_array(getAllHeaders())) {
  foreach (getAllHeaders() as $key => $value) {
    echo "$key = $value <br>";
  }
}
echo "<br>";
echo "<hr>";
echo "<br>";







 ?>
