<?php 

function insertar(){
    require_once ("_db.php");
   if(!isset($_POST)){
    $nombre=$_POST['nombre'];
               $correo = $_POST['correo'];
               $password = $_POST['password'];
               $telefono = $_POST['telefono'];
         
               $consulta = "INSERT INTO user (nombre, correo, telefono, password)
               VALUES ('$nombre', '$correo', '$telefono', '$password')";
         
              mysqli_query($conexion, $consulta);
              mysqli_close($conexion);
             
              
          }
          header("Location: views/usuarios/usuariosindex.php");
         }
     
     


?>
   //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio=$_FILES['foto']['size'];
    
        //se realiza la lectura de la imagen
                $imagenSubida=fopen($_FILES['foto']['tmp_name'], 'r');
                $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin =mysqli_escape_string($conexion,$binariosImagen);
                


    $consulta="INSERT INTO objetos (nombre, descripcion,  categorias, modo, imagen)
    VALUES ('$nombre', '$descripcion', '$categorias','$modo', '$imagenFin');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/");