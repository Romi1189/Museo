<html>
    <head>
        <link rel="stylesheet" href="../css/emergente.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    </head>
<?php
require_once ('_db.php');
if(isset ($_POST['insertar'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['telefono']) >= 1) {
    $nombre = trim($_POST['nombre']);
          $correo = trim($_POST['correo']);
          $password = trim($_POST['password']);
          $telefono = trim($_POST['telefono']);
    
          $consulta = "INSERT INTO user (nombre, correo, telefono, password)
          VALUES ('DEFAULT',$nombre', '$correo', '$telefono', '$password')";
    
         mysqli_query($conexion, $consulta);
         mysqli_close($conexion);

         echo "<input type='checkbox' id='btn-modal1'>
         <div class='container-modal'>
         <div class='content-modal'>
         <h1>¡¡¡Nuevo usuario creado!!! </h1>  
         <div class='btn-cerrar'>
         <label for='btn-modal1'><a href='../views/usuarios/usuariosindex.php'>Cerrar</a></label>
         </div>
         </div>
         <label for='btn-modal1' class='cerrar-modal'></label>
         </div>"; 
    
   
}

else{ echo" 
    <input type='checkbox' id='btn-modal1'>
    <div class='container-modal'>
    <div class='content-modal'>
    <h1>¡¡¡Error al agregar el Usuario!!! </h1>  
    <div class='btn-cerrar'>
    <label for='btn-modal1'><a href='../views/usuarios/usuarios/formulario_agregar.php'>Cerrar</a></label>
    </div>
    </div>
    <label for='btn-modal1' class='cerrar-modal'></label>
    </div>";
  
}

}

?>
</html>