<?php
	require_once 'conection.php';

	$pageTitle = 'transacciones';
	require_once 'partials/head.php';
$stmt=$conection->prepare("SELECT id,name FROM genres");
  $stmt->execute();
  $generos=$stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_POST) {
  try{
    $conection->PDO::startTransaction();

    $stmt=$conection->exec("INSERT INTO movies VALUES (null,null,null,:titulo,:rating,:premios,:fecha_estreno,:duracion,:genero)");
    $stmt=$conection->exec("INSERT INTO movies VALUES (null,null,null,:titulo,:rating,:premios,:fecha_estreno,:duracion,:genero)");
    $stmt=$conection->exec("INSERT INTO movies VALUES (null,null,null,:titulo,:rating,:premios,:fecha_estreno,:duracion,:genero)");
  }catch (\Exception $error){
    $stmt->rollback();
  }

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
