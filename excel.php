<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= arealogistica.xls");

?>

<table class="table table-bordered">
                
                <thead>
                    <tr>
                        <th>Clase Item</th>
                        <th>Placa Item</th>
                        <th>Serial Item</th>
                        <th>Marca Item</th>
                        <th>Modelo Item</th>
                        <th>Zona Item</th>
                        <th>Observasion Reparacion</th>
                        <th>Observacion Garantia</th>
                        <th># Orden Garantia</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php
                    include("./db.php");
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
                                
                            </td>
                       </tr>
                    <?php } ?>
                </tbody>
            </table>