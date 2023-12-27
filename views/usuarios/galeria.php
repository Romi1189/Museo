<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="../../bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/estilogaleria.css">
   <title>Museo Histórico De Angaco</title></head>
<?php include ('../../includes/_header.php');?>
<body>
   <!-- <form
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
    <section class="gallery min-vh-100">
        
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img src="../../includes/fotos/imagen/cicina antigua.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../../includes/fotos/imagen/planchas.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../../includes/fotos/imagen/pupitre.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../../includes/fotos/imagen/radios antiguas.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../../includes/fotos/imagen/telefono antiguo.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../../includes/fotos/imagen/vitrola.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../../includes/fotos/imagen/mate antiguo.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../../includes/fotos/imagen/balanza antigua.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../../includes/fotos/imagen/museo.jpg" class="gallery-item" alt="gallery">
                </div>
            </div>
        </div>

    </section>

  <!-- Modal -->
  <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <!--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
         <button type="button" class="close"  data-bs-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
        </div>
        <div class="modal-body">
        <img src="../../includes/fotos/imagen/cicina antigua.jpg" class="modal-img" alt="modal img">
        </div>
        
      </div>
    </div>
  </div>

    <script src="../../js/main.js"></script>
 
    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
</body>
<?php include ('../../includes/_footer.php');?>
</html>