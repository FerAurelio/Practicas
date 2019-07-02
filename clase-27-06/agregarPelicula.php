<!--Partiendo de agregarPelicula.php modificarlo para que al enviarse el formulario
inserte una nueva película en la base de datos utilizando statements. Sugerencia:
crear un nuevo archivo (ej: guardar.php) en donde esté toda la lógica del proceso.
a. Sumarle a agregarPelicula.php un <select> con todos los géneros
existentes en nuestra DB, para poder elegir el mismo.

4. Armar un buscador de SERIES o PELICULAS, el mismo archivo debe servir para
buscar cualquier de las dos opciónes, por ejemplo a través de un radio-button,
preguntar al usuario qué desea buscar y luego de eso, realizar la consulta a la DB.
Generar errores si no se seleccionó el tipo de búsqueda y así mismo si la busqueda
no arrojo resultados-->
<?php
	require_once 'conection.php';

	$pageTitle = 'Agregar una película';
	require_once 'partials/head.php';
$stmt=$conection->prepare("SELECT id,name FROM genres");
  $stmt->execute();
  $generos=$stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_POST) {
require_once ("guardar.php");
}
?>
		<div class="container">
			<h2>Agregar una película</h2>
			<form method="post">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label>Título:</label>
							<input type="text" name="titulo" class="form-control">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Rating:</label>
							<input type="text" name="rating" class="form-control">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Premios:</label>
							<input type="text" name="premios" class="form-control">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Duración:</label>
							<input type="text" name="duracion" class="form-control">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Fecha de estreno:</label>
							<input type="date" name="fecha_estreno" class="form-control">
						</div>
              </div>
            	<div class="col-6">
            <div class="form-group">
              <label>Género</label>
              <select name="genero" class="form-control">
                <option value="">Elegí un género</option>
                <?php foreach ($generos as $genero): ?>
                  <option
                    value="<?= $genero["id"] ?>"
                    <?= isset($_POST["genero"]) && $_POST["genero"] == $genero["id"] ? 'selected' : '';  ?>
                  > <?= $genero["name"] ?> </option>
                <?php endforeach; ?>
              </select>
              </div>
        	</div>

					<div class="col-12 text-center">
						<button type="submit" class="btn btn-success">Guardar película</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
