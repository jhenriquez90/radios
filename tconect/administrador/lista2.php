<?php 
session_start();
	require_once("dompdf/dompdf_config.inc.php");
	require("../conexion/conexion.php");
$jefatura=$_SESSION['categ'];
$sq=('SELECT  *FROM inventario WHERE jefatura = ("'.$jefatura.'")');
$resul=mysqli_query($conexion,$sq);
$estraido=mysqli_fetch_array($resul);
if($resul){
	}
$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<div align="center">
    <table width="95%" border="1">
      <tr>
        <td bgcolor="#0099FF"><strong>ID RADIO</strong></td>
        <td bgcolor="#0099FF"><strong>INVENTARIO</strong></td>
        <td bgcolor="#0099FF"><strong>SERIE</strong></td>
        <td bgcolor="#0099FF"><strong>TIPO RADIO</strong></td>
        <td bgcolor="#0099FF"><strong>JEFATURA</strong></td>
        <td bgcolor="#0099FF"><strong>ASIGNACION INDIVIDUAL</strong></td>
      </tr>';
$sql=('SELECT  *FROM inventario WHERE jefatura = ("'.$jefatura.'")');
$query=mysqli_query($conexion,$sql);

        while($dato=mysqli_fetch_array($query)){
	  $jefatura=$dato['jefatura'];
	   $dr="Select *FROM direccion where cod_direccion=".$jefatura."";
  $rdr=  mysqli_query($conexion,$dr) or die('error: '.mysqli_error($conexion));
   while($drc=mysqli_fetch_array($rdr))
   {
	   $jf=$drc['direccion'];
	   $_SESSION['jft']=$jf;
	  } 
$codigoHTML.='
      <tr>
        <td>'.$dato['idradio'].'</td>
        <td>'.$dato['cod_inventario'].'</td>
        <td>'.$dato['serie'].'</td>
        <td>'.$dato['tipo_radio'].'</td>
        <td>'.$_SESSION['jft'].'</td>
        <td>'.$dato['asignacion_individual'].'</td>
      </tr>';
      } 
$codigoHTML.='
<tr>
	</tr>
    </table>
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("ReporteFactura.pdf");
?>