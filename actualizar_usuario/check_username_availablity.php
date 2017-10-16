<?php
sleep(1);
include('../conexion/conexion.php');
if($_REQUEST) {
    $usuario = $_REQUEST['usuario'];
    $query = "select * from usuario where user = '".strtolower($usuario)."'";
    $results = mysqli_query($conexion,$query) or die('ok');

    if(mysqli_num_rows(@$results) > 0)
        echo '<div id="Error">ID de Usuario ya existe</div>';
    else
        echo '<div id="Success">Disponible</div>';
}
?>