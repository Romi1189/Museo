<!DOCTYPE html>
<html lang="es-MX">
<?php
error_reporting(0);
session_start();
$actualsesion = $_SESSION['correo'];

if($actualsesion == null || $actualsesion == ''){

    echo 'acceso denegado';
    die();
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Museo Histórico De Angaco</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="../../../css/emergente.css">
    <link rel="stylesheet" href="../../../css/estilo.css">
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#60A483">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../../views/usuarios/inicio.php">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3"><img src="../../../css/LogoNuevo-1024x1024.png"  alt="" width="80" height="80"></div>
</a>
<hr class="sidebar-divider my-0">
<li class="nav-item active">
    <a class="nav-link" href="../../../views/usuarios/inicio.php">
        <i class="material-icons-outlined"></i>
        <span>BIENVENIDO</span></a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading" style="color: white">
    Administrar
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="../../../index.php">
    <span class="material-symbols-outlined">
<img src="../../../css/museum_FILL0_wght400_GRAD0_opsz24.png">
</span>
        <span>Bienes Culturales</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="../galeria.php">
    <span class="material-symbols-outlined">
<img src="../../../css/gallery_thumbnail_FILL0_wght400_GRAD0_opsz24.png" >
</span>
        <span>Galeria</span>
    </a>
</li>
<li class="nav-item" >
    <a class="nav-link collapsed" href="../categorias.php">
    <span class="material-symbols-outlined" >
<img src="../../../css/category_FILL0_wght400_GRAD0_opsz24.png" >
</span>
        <span>  Categorias</span>
    </a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading" style="color: white">
    PERFIL
</div>
<li class="nav-item">
    <a class="nav-link collapsed" href="../../usuariosindex.php">
    <span class="material-symbols-outlined"><img src="
../../../css/person_FILL0_wght400_GRAD0_opsz24.png">
        <span>Información de usuarios</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="../../../../includes/_sesion/cerrarSesion.php">
    <span class="material-symbols-outlined" >
<img  src="../../../css/logout_FILL0_wght400_GRAD0_opsz24.png" >
</span>
        <span>Salir</span></a>
        
</li>

<hr class="sidebar-divider d-none d-md-block">

<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0"></button>
</div>
</ul>
<!-- EMPIEZA EL NAVBAR -->
       <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
                <nav  class="navbar navbar-expand navbar bg topbar mb-4 static-top shadow" style="background:#60A483">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                   <h2>Museo Histórico de Angaco</h2>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small"><?php echo $actualsesion?> </span>
                                <span class="material-symbols-outlined">
<img src="../../../css/account_circle_FILL0_wght400_GRAD0_opsz24.png" >
</span>  
                            </a>
                        </li>
                    </ul>
                </nav>
<body>
<center><h3>Nuevo Usuario</h3></center>
<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../../includes/fun2.php" method="POST" >
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control">
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="correo" class="form-label">Correo electronico *</label>
<input type="email"  id="correo" name="correo" class="form-control">
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="password" class="form-label">Password *</label>
<input type="password"  id="password" name="password" class="form-control">
</div>
</div>
</div>

<div class="mb-3">
<label for="telefono" class="form-label">Telefono *</label>
<input type="tel"  id="telefono" name="telefono" class="form-control">

</div>

<div class="mb-3">
<label for="rol" class="form-label">Rol *</label>   
<select id="tipo" name="tipo">
        <option value="0" disabled selected>Seleccione el rol</option>
        <option value="1">Administrador</option>
        <option value="2">Usuario</option>
    </select>
</div>
<div class="mb-3">
<input type="hidden" name="insertar" value="insertar">
<button type="submit"   class="btn btn-success">Guardar</button>
   
                                <a href="../usuariosindex.php"><input type="button"  class="btn btn-primary space" value="Volver"></a>
                            
</div>

</form>
</div>
</div>
</body>
<?php require 'C:\xampp\htdocs\museo\includes\_footer.php' ?>
</html>