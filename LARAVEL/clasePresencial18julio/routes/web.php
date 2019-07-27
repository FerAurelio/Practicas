<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/miPrimeraRuta', function () {
    return 'Creé mi primer ruta en Laravel';
});

Route::get('/esPar/{numero}', function ($numero) {
if ($numero%2==0) {
  return "el numero es par";
}
    return 'el numero es impar';
});

/*Crear una ruta llamada sumar que reciba dos números como
parámetros. La ruta debe retornar la suma de ambos números.*/

/*Modificar la ruta anterior para que pueda recibir un nuevo parámetro
opcional. Es decir, si la ruta anterior recibe el nuevo parámetro, debe
sumar los tres números, en caso contrario, debe realizar la suma
original*/

Route::get('/sumar/{numero1}/{numero2}/{numero3?}', function ($numero1, $numero2,$numero3 = null) {
if ($numero3!=null) {
  return $numero1+$numero2+$numero3;
}
    return $numero1 + $numero2;
});

Route::get('/peliculas/', function () {
$array = ["Toy Story","Buscando a Nemo", "Enredados", "La era del hielo", "monster inc"];
    $vac=compact("array");
    return view("peliculas",$vac);
});
