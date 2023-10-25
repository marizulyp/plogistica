<?php

include("db.php");

if (isset($_POST['save'])){
    $clase = $_POST['clase'];
    $placa = $_POST['placa'];
    $serial = $_POST['serial'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $zona = $_POST['zona'];
    $observacionr = $_POST['observacionr'];
    $observaciong = $_POST['observaciong'];
    $ordeng = $_POST['ordeng'];
    echo $clase;
    echo $placa;
    echo $serial;
    echo $marca;
    echo $modelo;
    echo $zona;
    echo $observacionr;
    echo $observaciong;
    echo $ordeng;

    //<!--Inserte dentro de la tabla item los siguientes campos-->
    $query = "INSERT INTO item(clase, placa, serial, marca, modelo, zona, observacionr, observaciong, ordeng) VALUES ('$clase', '$placa', '$serial', '$marca', '$modelo', '$zona', '$observacionr', '$observaciong', '$ordeng')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Registro Guardado Exitosamente';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>
