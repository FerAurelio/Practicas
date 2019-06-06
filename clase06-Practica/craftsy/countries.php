<?php
	$paises = file_get_contents('https://restcountries.eu/rest/v2/all');

	$arrayPaises = json_decode($paises, true);
?>
