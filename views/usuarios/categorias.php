<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'arte'?>">
ARTE
</a>
        </div>
<div class="col-sm-4">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'monografía'?>">
MONOGRAFÍA
</a>
</div>  
<div class="col-sm-4">
<a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'histórico'?>">
HISTÓRICO
</a>
</div>  
</div>
<div class="row">
<div class="col-sm-4">
<a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'ciencia y técnica'?>">
CIENCIA Y TÉCNICA
</a>
</div>

<div class="col-sm-4">
<a class="catmascotas" href="productosCategoria.php?categoria=<?php echo 'coleccion de etiquetas'?>">
COLECCIÓN DE ETIQUETAS
</a>
</div>
<div class="col-sm-4">
<a class="catautomovilstico" href="productosCategoria.php?categoria=<?php echo 'agricultura'?>">
AGRICULTURA
</a>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<a class="catvestimenta" href="productosCategoria.php?categoria=<?php echo 'colección de botellas'?>">
COLECCIÓN DE BOTELLAS
</a>
</div>
<div class="col-sm-4">
<a class="cattelefonia" href="productosCategoria.php?categoria=<?php echo 'pinacoteca'?>">
PINACOTECA
</a>
</div>
<div class="col-sm-4">
<a class="catdeportes" href="productosCategoria.php?categoria=<?php echo 'discografía'?>">
DISCOGRAFÍA
</a>
</div>
</div>
<!--<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>-->
<?php require '../../includes/_footer.php' ?>
</body>

</html>