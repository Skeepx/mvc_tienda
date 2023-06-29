<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Desea eliminar este registro?");
            return respuesta
        }
    </script>
<h1 class="text-center p-3"> PROVEEDORES </h1>
<?php
include "models/conexion.php";
include "controllers/registro_provs.php";
include "controllers/eliminar_provs.php";
?>
<div class=" container-fluid row">
    <form class="col-4 p-3" method="POST">
    <h3 class="text-center alert alert-secondary"> Crear proveedores </h3>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre proveedor</label>
        <input type="text" class="form-control" name="nombre">
        <div id="text" class="form-text">Escriba el nombre completo.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Dirección</label>
        <input type="text" class="form-control" name="direccion">
    </div>
    <button type="submit" class="btn btn-primary" name="crear" value="ok">Crear</button>
    </form>
    <div class="col-8 p-4"> 
        <table class="table">
            <thead class="bg-info">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "models/conexion.php";
                $sql = $conexion->query("SELECT * FROM proveedor");
                while ($datos=$sql->fetch_object()){ ?>
                    <tr>
                        <td><?= $datos->prov_id?></td>
                        <td><?= $datos->prov_nom?></td>
                        <td> <?= $datos->prov_direc?></td>
                        <td> 
                            <a href="modificar_provs.php?id=<?= $datos->prov_id?>" class="btn btn-small btn-warning">Editar</a>
                            <a onclick="return eliminar()" href="index.php?id=<?= $datos->prov_id?>" class="btn-small btn-danger">Eliminar </i></a>
                        </td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </div>
</div>    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>