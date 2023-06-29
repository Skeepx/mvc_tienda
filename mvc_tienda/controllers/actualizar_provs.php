<?php 
    if(!empty($_POST["actualizar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["direccion"])){
            
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $direccion=$_POST["direccion"];

            $sql=$conexion->query("UPDATE proveedor SET prov_nom='$nombre', prov_direc='$direccion' WHERE prov_id=$id");
            if($sql==1){
                header("location:index.php");
            }else{
                echo  "<div class= 'alert alert-danger'>No se actualizó el proveedor</div>";
            }
        }else{
            echo  "<div class= 'alert alert-warning'>Complete todos los campos</div>";
        }
    }
?>