<?php

$id = $_GET['id'];
require_once ("../../includes/_db.php");
$consulta = "SELECT * FROM objetos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data" >

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" value="<?php echo $productos ['nombre']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Descripcion *</label>
<input type="text"  id="descripcion" name="descripcion" value="<?php echo $productos ['descripcion']; ?>" class="form-control" required>
</div>
</div>
</div>

<div class="row">
    <div class="col-md-4">
    <div class="mb-3">
<label for="categorias" class="form-label">A modo de:*</label>
<select name="modo" id="modo" class="form-control" required>
    <option value="Prestamo">Prestamo</option>
    <option value="Donado">Donado</option>
    
  </select>
    </div>   
</div>

    <div class="col-md-4">
    <div class="mb-3">
<label for="categorias" class="form-label">Categorias *</label>
<select name="categorias" id="categorias" class="form-control" required>
    <option value="Arte">Arte</option>
    <option value="Monografía">Monografía</option>
    <option value="Histórico">Histórico</option>
    <option value="Ciencia y Técnica">Ciencia y Técnica</option>
    <option value="Colección de Eteiquetas">Coleccioón de Etiquetas</option>
    <option value="Agricultura">Agricultura</option>
    <option value="Colección de Botellas">Colección de Botellas</option>
    <option value="Pinacoteca">Pinacoteca</option>
    <option value="Discografía">Discografía</option>

  </select>
    </div>   
</div>
</div>






<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file"  name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
<input type="hidden" name="accion" value="editar_producto">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<button type="submit" class="btn btn-success">Guardar</button>
<a href="../usuarios/index.php"><input type="button"  class="btn btn-primary space" value="Volver"></a>
</div>
</form>
</div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>