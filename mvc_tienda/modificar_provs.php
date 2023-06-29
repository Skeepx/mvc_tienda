<?php 
include "models/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM proveedor where prov_id=$id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center alert alert-secondary">ACTUALIZAR PROVEEDORES</h5>
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <?php 
        include "controllers/actualizar_provs.php";
        
        while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre proveedor</label>
                <input type="text" class="form-control" name="nombre" value="<?=$datos->prov_nom?>">
                <div id="text" class="form-text">Escriba el nombre completo.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" value="<?=$datos->prov_direc?>">
            </div>
        <?php }
        ?>
        
        <button type="submit" class="btn btn-primary" name="actualizar" value="ok">Actualizar</button>
    </form>

</body>
</html>