<?php
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM proveedor WHERE prov_id=$id");
    if ($sql==1){
        echo '<div class="alert alert-success">Proveedor eliminado</div>';
    }else{
        echo '<div class="alert alert-danger">No se pudo eliminar</div>'; 
    }
}
?>