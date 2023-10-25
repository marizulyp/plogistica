<?php
    include("db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM item WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $clase = $row['clase'];
            $placa = $row['placa'];
            $serial = $row['serial'];
            $marca = $row['marca'];
            $modelo = $row['modelo'];
            $zona = $row['zona'];
            $observacionr = $row['observacionr'];
            $observaciong = $row['observaciong'];
            $ordeng = $row['ordeng'];

        }
    }

    if (isset($_POST['update'])){
        $id = $_GET['id'];
        $clase = $_POST['clase'];
        $placa = $_POST['placa'];
        $serial = $_POST['serial'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $zona = $_POST['zona'];
        $observacionr = $_POST['observacionr'];
        $observaciong= $_POST['observaciong'];
        $ordeng = $_POST['ordeng'];

        $query = "UPDATE item set clase = '$clase', placa = '$placa', 
        serial = '$serial', marca = '$marca', modelo = '$modelo', zona = '$zona',
        observacionr = '$observacionr', observaciong = '$observaciong', ordeng = '$ordeng' WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Registro Actualizado Exitosamente';
        $_SESSION['message_type'] = 'success';
        header("location: index.php");

    }
?>

<?php include("includes/header.php") ?>

<link rel="stylesheet" href="style.css">
<div class="container p-9">
<br><br>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">
            <tittle><strong>Actualizar Item</strong></tittle>
            <div class="input-group"></div>
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="clase" value="<?php echo $clase; ?>" 
                        class="form-control" placeholder="Actualiza la clase">
                    </div><div class="input-group mt-3"></div>
                    <div class="form-group">
                        <input type="text" name="placa" value="<?php echo $placa; ?>" 
                        class="form-control" placeholder="Actualiza la placa">
                    </div><div class="input-group mt-3"></div>
                    <div class="form-group">
                        <input type="text" name="serial" value="<?php echo $serial; ?>" 
                        class="form-control" placeholder="Actualiza el serial">
                    </div><div class="input-group mt-3"></div>
                    <div class="form-group">
                        <input type="text" name="marca" value="<?php echo $marca; ?>" 
                        class="form-control" placeholder="Actualiza el serial">
                    </div><div class="input-group mt-3"></div>
                    <div class="form-group">
                        <input type="text" name="modelo" value="<?php echo $modelo; ?>" 
                        class="form-control" placeholder="Actualiza el serial">
                    </div><div class="input-group mt-3"></div>
                    <select name="zona" class="form-select" aria-label="Default select example" value="<?php echo $zona; ?>">
                    <option selected>Abre la zona de seleccion</option>
                    <option>Reparacion</option>
                    <option>Garantia</option>
                    </select><div class="input-group mt-3"></div>
                    <div class="form-group">
                    <textarea name="observacionr" rows="2" class="form-control" placeholder="Acatualiza observacion r"><?php echo $observacionr; ?></textarea>
                    </div><div class="input-group mt-3"></div>
                    <div class="form-group">
                    <textarea name="observaciong" rows="2" class="form-control" placeholder="Acatualiza observacion g"><?php echo $observaciong; ?></textarea>
                    </div><div class="input-group mt-3"></div>
                    <div class="form-group">
                        <input type="text" name="ordeng" value="<?php echo $ordeng; ?>" 
                        class="form-control" placeholder="Actualiza orden">
                    </div><div class="input-group mt-3"></div>
                    <button class="btn btn-outline-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php")?>