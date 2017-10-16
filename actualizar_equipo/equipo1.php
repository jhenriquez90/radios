<?php
session_start();
if ($_SESSION['logeado']!='1') {
	echo "No registrado";
	header("Location:../index.php"); 
}
?>
<!DOCTYPE HTML>

<html>
<head>
		<title>VISUALIZAR EQUIPO</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
        
        <!--logo navegador!-->
        <link rel="shortcut icon" href="/tconect/pagina_principal/images/dbll.ico" />
 <!--!-->     
       
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
<body onload="nobackbutton();"> 
<script languaje = "javascript">
function nobackbutton(){
	
   window.location.hash="no-back-button";
	
   window.location.hash="Again-No-back-button" //chrome
	
   window.onhashchange=function(){window.location.hash="no-back-button";}
	
}
	</script>

	<!-- Header -->
	<div id="header-wrapper">
		<div id="header">
			<div class="container">
				<div id="logo"> <!-- Logo -->
                 <a href="../index.php"><img src="../pagina_principal/images/rp.png" alt="" width="150" height="160" align="left"></a>
					<h1><strong><a href="../index.php">CONECTIVIDAD</a></strong></h1>
					<p><span></span> <span>"DIRECCION NACIONAL DE TELEMATICA"</span></p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;				</p>
			  </div>
			</div>
			<div id="menu-wrapper">
				<div class="container">
					<nav id="nav">
					  <ul class= "nav">
							<li ><a href="../administrador/administrador.php">ADMINISTRADOR</a></li>
							<li ><a href="../actualizar_usuario/usuarios.php">USUARIOS</a>  </li>
                         
						<li ><a href="equipo.php">EQUIPOS</a></li>
							<li><a href="../login/salir.php">salir</a></li>
					  </ul>
				  </nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header -->
   
     <div id="page" class="container" >
	  <div class="column1">
	    <div class="title">
				<h2 align="center">TELEMATICA</h2>
	    </div>
		</div>
	  <div class="column2">
      					<h4 align="center"> <big> Detalle de Equipo </big> </h4>	
		
	 <?php
                 extract($_GET);
				require("../conexion/conexion.php");
				$sql=("SELECT * FROM inventario where idradio='$cod'");
				$query=mysqli_query($conexion,$sql);

				 while($arreglo=mysqli_fetch_array($query)){
				    	$idradio=$arreglo[0];
				    	$inventario=$arreglo[1];
				    	$serie=$arreglo[2];
				    	$tiporadio=$arreglo[3];
						$modeloradio=$arreglo[4];
						$asignaciogeneral=$arreglo[5];
				    	$jefatura=$arreglo[6];
				    	$asignacionindividual=$arreglo[7];
				    	$codcm2=$arreglo[8];
						$codlcp2=$arreglo[9];
						$codcp2=$arreglo[10];
						$codipsc2=$arreglo[11];
						$observacio=$arreglo[12];}
?>
 <form name="form1" method="post" action="codmodradio.php">
  <div align="center">
  <p>
  <b>
  <label for="idradio">ID RADIO:<br />
  </label>
  <input type="text" name="idradio" id="idradio" value="<?php echo $idradio ?>" readonly>
</b>
</p>
<p>
<b>
  <label for="inventario">INVENTARIO:<br />
  </label>
  <input type="text" name="inventario" id="inventario" value="<?php echo $inventario ?>" readonly>
</b>
</p>
<p>
<b>
  <label for="serie">SERIE:<br />
  </label>
  <input type="text" name="serie" id="serie" value="<?php echo $serie ?>" readonly>
</b>
</p>
<p>
<b>
  <label for="tiporadio">TIPO DE RADIO:<br />
  </label>
  <input type="text" name="tiporadio" id="tiporadio" value="<?php echo $tiporadio ?>" readonly>
</b>
</p>
<p>
<b>
  <label for="modeloradio">MODELO DE RADIO:</label>
  </b>
  </p>
<p>
<b>
  <input type="text" name="modeloradio" id="modeloradio" value="<?php echo $modeloradio ?>" readonly>
</b>
</p>
<p>
<b>
  <label for="asignaciogeneral">ASIGNACION GENERAL:<br />
  </label>
  <input type="text" name="asignaciogeneral" id="asignaciogeneral" value="<?php echo $asignaciogeneral ?>" readonly>
</b>
</p>
<p>
<b>
  <label for="jefatura">JEFATURA:<br />
  </label>
  <?php 
  $dr="Select *FROM direccion where cod_direccion=".$jefatura."";
  $rdr=  mysqli_query($conexion,$dr) or die('error: '.mysqli_error($conexion));
   while($drc=mysqli_fetch_array($rdr))
   {
	   $jf=$drc['direccion'];
	   $_SESSION['jft']=$jf;
	  } 
   ?>
  <input type="text" name="jefatura" id="jefatura" value="<?php echo $_SESSION['jft'] ?>" readonly>
</b>
</p>
<p>
<b>
  <label for="asignacionindividual">ASIGNACION INDIVIDUAL:</label>
  </b>
  </p>
<p>
<b>
  <input type="text" name="asignacionindividual" id="asignacionindividual" value="<?php echo $asignacionindividual ?>" readonly>
</b>
</p>
<p>
  <b>
  <label for="codcp3">CAPACITY MAX:<br>
  </label>
  <input type="text" name="codcm2" id="codcm3" value="<?php echo $codcm2 ?>" readonly>
</b>
</p>
<p>
<b>
  <label for="codlcp3">LINKED CAPACITY PLUS:</label>
  </b>
  </p>
  <p>
    <input type="text" name="codlcp2" id="codlcp3" value="<?php echo $codlcp2 ?>" readonly>
    </p>
  <p>
  <b>
  <label for="codcp3">CAPACITY PLUS:<br>
  </label>
  <input type="text" name="codcp2" id="codcp3" value="<?php echo $codcp2 ?>" readonly>
</b>
</p>

<p>
<b>
  <label for="codipsc2">IP SITE CONNECT:</label>
  </b>
</p>
<p>
<input type="text" name="codipsc2" id="codipsc2" value="<?php echo $codipsc2 ?>" readonly>
</p>
<p>
<b>
  <label for="observacio">OBSERVACION:</label>
 </b> 
 </p>
<p>
<b>
  <textarea name="observacio" id="observacio" cols="45" rows="2" readonly><?php echo $observacio ?></textarea>
</b>
</p>
<p>
<?php	echo "<td><div align='center'> <a href='equipo1.php?cod=$idradio&codborrar=2'>eliminar</a></div></td>"	;				
		
					extract($_GET);
					if(@$codborrar==2){
						$sqlborrar="DELETE FROM inventario WHERE idradio='$cod'";
						$resborrar=mysqli_query($conexion,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='equipo.php'</script>";
					}
					?>
</p>
<p>
<?php 
echo "<td><div align='center'> <a href='actuequipo.php?cod=$idradio'>MODIFICAR</td>";
?>
</p>
			
  </div>
</form>
         </div>
	  
  </div>
	
	<!-- Copyright -->
<div id="copyright">
			<div class="container">&copy; All rights reserved.</div>
	</div>


</body>
</html>