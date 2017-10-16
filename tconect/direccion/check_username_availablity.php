<?php
sleep(1);
include('../conexion/conexion.php');
if($_REQUEST) {
    $ctipo = $_REQUEST['ctipo'];
    $query = "select * from direccion where cod_direccion = '".strtolower($ctipo)."'";
    $results = mysqli_query($conexion,$query) or die('ok');

    if(mysqli_num_rows(@$results) > 0)
        echo '<div id="Error">Cod Direccion ya existe</div>';
    else
        echo '<div id="Success">Disponible</div>';
}
?>