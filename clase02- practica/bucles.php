<?php
//1-Mostrar la tabla de multiplicar del 2 utilizando un for.

for ($i=0; $i<=20 ; $i++) {
  echo "$i <br>";
};

echo "<hr>";

//2-2. Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente)
$a=100;
while ($a >= 85) {
  echo "$a <br>";
  $a--;
}

echo "<hr>";
//3 -Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre
//por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.
$contador=1;

while ($contador<=5) {
  echo $contador*2;
  echo "<br>";

  $contador++;
}

echo "<hr>";
//4- Utilizando un while haremos un programa que tire una moneda (seleccionará un número
//al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar,
//debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.

$contadorTiros=0;
$contadorCaras=0;

while ($contadorCaras <5) {
  $moneda=rand(0,1);
$contadorTiros++;
echo "tire $contadorTiros <br>";

if ($moneda == 1){
  $contadorCaras++;
  echo "salio cara <br>";
}


}echo $contadorTiros++;


echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";

/*5- Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada
uno de los nombres en pantalla.*/
//a. Resolver este problema con un for.

$unArray =["Lucía","Pablo","Simona","Julia","Fernanda"];

for ($i=0; $i < count($unArray) ; $i++) {
echo "$unArray[$i] <br>";  // code...
}
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";
//b. Resolver este problema con while.

$a=0;
while ($a < count($unArray)) {
echo "$unArray[$a] <br>"; $a++;
}
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";
//c. Resolver este problema con un do/while.

$b=0;
do {
echo "$unArray[$b] <br>"; $b++;
} while ($b < count($unArray));

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";
//d. Resolver este problema con un foreach.

foreach ($unArray as $value) {
  echo "$value <br>";
}

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";

/*6. Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir
todos los números. La ejecución debe terminarse si alguno de los números encontrados es
un 5 (Se debe imprimir “Se encontró un 5!”)*/

$numeros=[1,2,3,4,5,6,7,8,9,10];
shuffle($numeros);

$i=0;
do {
  echo $numeros[$i]."<br>";
  $i++;
} while ($numeros[$i]!= 5 && $i< count($numeros)-1);
if ($numeros[$i]=5) {
  echo "Se encontró un 5!";
}
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";

/*7. Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando
cuantos números son pares.
*/

$dieznumeros=[];
$pares=0;

for ($i=0; $i < 10; $i++) {
$dieznumeros[] = rand(0, 100);
echo "$dieznumeros[$i] <br>";

if ($dieznumeros[$i]%2==0) {
 $pares= $pares+1;
}
}echo "son pares $pares";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";


/*8. Definir una variable $mascota que sea un array asociativo
a. En el índice animal debe decir qué animal es.
b. En el índice edad debe decir la edad.
c. En el índice altura debe decir la altura.
d. En el índice nombre debe decir el nombre
e. Recorrer los valores del array con un foreach imprimiendo (como ejemplo):
animal: perro
edad: 5
altura: 0,60
nombre: Sonic*/
$mascota=[
  "animal"=>"gato",
  "edad"=>"7 años",
  "altura"=>"28cm.",
  "nombre"=>"Irineo",];

foreach ($mascota as $indice => $valor) {
echo "$indice: $valor <br>";
}
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";


/*9. Partiendo de un archivo con la siguiente variable definida:$ceu
Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.*/

$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=>
"Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" =>
"Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
"Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
"Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino
Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica
Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

foreach ($ceu as $pais => $capital) {
  echo "$pais: $capital <br>";
}

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";

/*10. Partiendo de un archivo con la siguiente variable definida:*/

/*Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu
con el siguiente formato:
Las ciudades de Argentina son:
    ● Buenos Aires
    ● Córdoba
    ● Santa Fé
    Las ciudades de Brasil son:
    ● Brasilia
    ● Rio de Janeiro
    ● Sao Pablo
*/



$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];


  foreach ($ceu as $pais => $ciudad) {
     echo   "Las ciudades de $pais son: <br>";
  foreach ($ciudad as $valor) {
        echo  "<ul>
         <li>$valor</li>
       </ul>";
    }

         }

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";

/*15. A partir del ejercicio anterior:
● Agregarle a cada país un dato extra además de sus ciudades llamado
esAmericano. Este valor debe ser true o false.
● Hacer que la impresión anterior no muestre países que no sean Americanos.
IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo
por cada país en donde cada país tendrá los datos de sus ciudades y esAmericano.*/

$ceu2 = [
   "Argentina" => [[
     "ciudad1" => "Buenos Aires",
     "ciudad2" => "Córdoba",
     "ciudad3" => "Santa Fé",
     ],
     "esAmericano" => true],

   "Brasil" => [[
     "ciudad1" => "Brasilia",
     "ciudad2" => "Rio de Janeiro",
     "ciudad3" => "Sao Pablo",
     ],
     "esAmericano" => true],

   "Colombia" => [[
     "ciudad1" => "Cartagena",
     "ciudad2" => "Bogota",
     "ciudad3" => "Barranquilla",
     ],
     "esAmericano" => true],

   "Francia" => [[
     "ciudad1" => "Paris",
     "ciudad2" => "Nantes",
     "ciudad3" => "Lyon",
     ],
     "esAmericano" => false],

   "Italia" => [[
     "ciudad1" => "Roma",
     "ciudad2" => "Milan",
     "ciudad3" => "Venecia",
     ],
     "esAmericano" => false],

   "Alemania" => [[
     "ciudad1" => "Munich",
     "ciudad2" => "Berlin",
     "ciudad3" => "Frankfurt",
     ],
     "esAmericano" => false],
   ];

     foreach ($ceu2 as $paises => $datos) {
       if($datos["esAmericano"]==true){
         echo "Las ciudades de $paises son:<br>";
         echo "<ul>";
           foreach ($datos[0] as $ciudad) {
             echo "<li> $ciudad </li>";

           echo "<br>";
         }   echo "</ul>";
       }
   }
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";




?>
