<?php

     include("db.php");

     if (isset($_GET['id'])) {
        $id =$_GET['id'];
        $query = "DELETE FROM item WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("fallo");
        }
        $_SESSION['message'] = 'Registro Eliminado Exitosamente';
        $_SESSION['message_type'] = 'danger';
        header("location: index.php");
     }
?>