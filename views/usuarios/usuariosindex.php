
<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>

<body>
  
<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">

<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <span class="material-icons">search</span>
                                </button>
                            </div>
                        </div>
                    </form>
    
    <div class="mb-3">

   
                                <a href="usuarios/formulario_agregar.php"><input type="button"  class="btn btn-primary space" value="Crear Usuario"></a>
                            
</div>
<div class="col-sm-12 mb-3">
<center><h3>Información de sesion </h></center>
</div>
<div class="col-sm-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
<th>Nombre</th>
<th>Telefono</th>
<th>Correo</th>

<th>registro</th>


</tr>

</thead>

<tbody>

<?php

$sql = "SELECT  nombre,  telefono, correo,registro FROM user WHERE correo ='$actualsesion'";
$usuarios = mysqli_query($conexion, $sql);
if($usuarios -> num_rows > 0){
foreach($usuarios as $key => $row ){




?>
<tr>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['telefono']; ?></td>
<td><?php echo $row['correo']; ?></td>

<td><?php echo $row['registro']; ?></td>
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
<div class="col-sm-12 mb-3">
<center><h3>Usuarios</h3></center>
</div>
<div class="col-sm-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
<th>Nombre</th>
<th>Telefono</th>
<th>Correo</th>




</tr>

</thead>

<tbody>

<?php

$sql = "SELECT  nombre,  telefono, correo FROM user ";
$usuarios = mysqli_query($conexion, $sql);
if($usuarios -> num_rows > 0){
foreach($usuarios as $key => $row ){




?>
<tr>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['telefono']; ?></td>
<td><?php echo $row['correo']; ?></td>


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
    </body>

</html>