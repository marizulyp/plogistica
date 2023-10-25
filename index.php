<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.5.1.min.js" charset="UFT-8"></script>
    <script src=".materialize/js/materialize.js/" charset="UFT-8"></script>

</header>
<body>
</body>
</html>
<nav class="navbar navbar-dark bg" style="background-color: #003134">
    <div class="container">
        <a href="index.php"class="navbar-brand"><strong>Area Logistica</strong></a>
    </div>
</nav>
<div class="container p-2">

    <div class="row">
        <div class="col-md-3">
        
            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>

        <div class="card card-body">
            <tittle><strong>Registrar Item</strong></tittle>
            <div class="input-group mt-3"></div>
            <form action="save.php" method="POST">
                <div class="form-group">
                    <input type="text" name="clase" class="form-control" placeholder="Clase Item" autofocus>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="placa" rows="2" class="form-control" placeholder="Placa Item" autofocus>
                </div><br>
                <div class="form-group">
                    <input type="text" name="serial" rows="2" class="form-control" placeholder="Serial Item" autofocus>
                </div><br>
                <div class="form-group">
                    <input type="text" name="marca" rows="2" class="form-control" placeholder="Marca Item" autofocus>
                </div><br>
                <div class="form-group">
                    <input type="text" name="modelo" rows="2" class="form-control" placeholder="Modelo Item" autofocus>
                </div><br>
                <select name="zona" class="form-select" aria-label="Default select example">
                    <option selected>Abre la zona de seleccion</option>
                    <option>Reparacion</option>
                    <option>Garantia</option>
                </select><br>
                <div class="form-group">
                    <textarea name="observacionr" rows="2" class="form-control" placeholder="Observasion Reparacion"></textarea>
                </div><br>
                <div class="form-group">
                    <textarea name="observaciong" rows="2" class="form-control" placeholder="Observasion Garantia"></textarea>
                </div><br>
                <div class="form-group">
                    <input type="text" name="ordeng" rows="2" class="form-control" placeholder="# Orden Garantia" autofocus>
                </div><br>
                <input type="submit" class="btn btn-outline-success" name="save" value="Guardar">
            </form>
        </div>

        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
            <a href="./excel.php" class="btn btn-outline-success">Descargar Excel</a>
            <div class="input-group mt-3"></div>
            <div class="input-group mb-3">
                    <input type="search" class="form-control me-2" placeholder="Buscar Item" name="buscar">
                    <button class="btn btn-outline-dark" type="submit" name="enviar">Buscar</button>
            </div>
                <thead>
                    <tr>
                        <th>Clase</th>
                        <th>Placa</th>
                        <th>Serial</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Zona Item</th>
                        <th>Obs Reparacion</th>
                        <th>Obs Garantia</th>
                        <th>Orden Garantia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query ="SELECT * FROM item";
                    $result_item = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_item)) { ?>
                       <tr>
                            <td><?php echo $row['clase'] ?></td>
                            <td><?php echo $row['placa'] ?></td>
                            <td><?php echo $row['serial'] ?></td>
                            <td><?php echo $row['marca'] ?></td>
                            <td><?php echo $row['modelo'] ?></td>
                            <td><?php echo $row['zona'] ?></td>
                            <td><?php echo $row['observacionr'] ?></td>
                            <td><?php echo $row['observaciong'] ?></td>
                            <td><?php echo $row['ordeng'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']?>">
                                <button type="button"  class="btn btn-outline-success mb-2">Editar</button>
                                </a>
                                <br><a href="delete.php?id=<?php echo $row['id']?>">
                                <button type="button" class="btn btn-outline-danger">Eliminar</button>
                                </a></br>
                                
                            </td>
                       </tr>
                       
                    <?php } ?>
                </tbody>
            </table>
</div>

<?php include("includes/footer.php") ?>
    