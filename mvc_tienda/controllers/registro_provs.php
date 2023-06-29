<?php
    if(!empty($_POST["crear"])){
        if (!empty($_POST["nombre"]) and !empty($_POST["direccion"])){
            
            $nombre=$_POST["nombre"];
            $direccion=$_POST["direccion"];


            $sql=$conexion->query("INSERT INTO proveedor(prov_nom, prov_direc) VALUES ('$nombre','$direccion')");

            if ($sql==1){
                echo '<div class="alert-success">Proveedor registrado correctamente</div>';
            }else{
               echo '<div class="alert-danger">Error al registrar proveedor</div>';
            }

        }else{
            echo '<div class="alert-danger">Complete todos los campos</div>';
        }
    }
?>