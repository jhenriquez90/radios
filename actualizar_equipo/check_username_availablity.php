<?php
sleep(1);
include('../conexion/conexion.php');
if($_REQUEST) {
    $idradio = $_REQUEST['idradio'];
    $query = "select * from inventario where idradio = '".strtolower($idradio)."'";
    $results = mysqli_query($conexion,$query) or die('ok');

    if(mysqli_num_rows(@$results) > 0)
        echo '<div id="Error">ID de Radio ya existe</div>';
    else
        echo '<div id="Success">Disponible</div>';
}
?>