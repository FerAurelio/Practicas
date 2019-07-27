<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!--Modificar la vista creada para que en el caso de no haber ninguna
película se lea el mensaje “No hay películas”. Probar dicho caso.-->

@forelse ($array as $element)
  {{ $element}} <br>
@empty
    {{ "no hay peliculas"}}
@endforelse
  </body>
</html>
