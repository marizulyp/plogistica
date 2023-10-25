<table class="table table-striped  table-dark table_id"></table>
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
                    </tr>
</thead>

<?php
include("db.php");

$result_item = mysqli_query($conn, $query);
$query = "SELECT * FROM item WHERE id = $id";
?>