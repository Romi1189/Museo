<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>

<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">
<div class="col-sm-12 mb-3">
<center><h1>Bienes Culturales</h1></center>
</div>
<!--<form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <span class="material-icons">search</span>
                                </button>
                            </div>
                        </div>
                    </form>-->


<div class="col-sm-12">
<div class="table-responsive">
<div class="mb-3">
<a href="../usuarios/producto_agregar.php"><input  class="btn btn-primary" type="button" value="Agregar"></a>
</div>

<table class="table table-striped table-hover">
<thead>

<tr>

<th>Nombre</th>
<th>Descripción</th>
<th>Categorías</th>
<th>Reseña</th>
<th>Imagen</th>

<th>Acciones</th>


</tr>

</thead>

<tbody>

<?php

$sql = "SELECT * FROM objetos";
$productos = mysqli_query($conexion, $sql);
if($productos -> num_rows > 0){
foreach($productos as $key => $row ){
?>
<!--funcion y estilos para celdas en error-->
<?php

if ($row['cantidad'] <= $row['cantidad_min']) {
  $color = '#F78E8E';
  $clase = 'problema';
} else {
  $clase = 'correcto';
}
 
// ...

?>
<style>
      .problema{
        background-color: <?php echo $color?>;
        color: #000000;
    }
</style>
<!-- empieza la tabla-->
<tr>

<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['descripcion']; ?></td>



<td><?php echo $row['categorias']; ?></td>
<td><?php echo $row['modo']; ?></td>
<td><img width="50" src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" ></td>

<td>
  <a href="producto_editar.php?id=<?php echo $row['id']?>">
    <div">
      Editar
    </div>
  </a>
  <a>|</a>
  <a href="producto_eliminar.php?id=<?php echo $row['id']?>">
    <div">
    Eliminar
    </div>
  </a>
</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="4">No existe registros</td>
    </tr>

    <?php
}?>
</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>


        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
            </div>
        </section>
    </div>
    <?php require '../../includes/_footer.php' ?>
</html
