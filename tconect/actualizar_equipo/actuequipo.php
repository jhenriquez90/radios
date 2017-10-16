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
		<title>ACTUALIZAR EQUIPO</title>
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
		
	<!-- Main -->
		<div id="main-wrapper">
			<div class="container">

				<div id="main">
	
					<div class="row">
					
						<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<header>
										<h2>NAVEGADOR</h2>
										<span class="byline">Podrá tener acceso a:</span>
									</header>
									<ul class="style1">
										<li class="first">
											<p class="date"><a href="ingresar_equipo.php"><img src="images/ingresar.png" alt="" width="65" height="65" align="center" border="0"></a></p>
											Ingresar Nuevo Equipo.</li>
										<li class="first"><a href="#"></a>									    </li>
									  <li>
										<p class="date"><a href="equipo.php"><img src="images/modificar.png" alt="" width="65" height="65" align="center"></a></p>
										  <p>Modificar Equipo Existente.</p>
									  </li>
									</ul>
														
								</section>
							</div>
						<!-- Sidebar -->

						<!-- Content -->
							<div id="content" class="8u skel-cell-important">
							  <section>
								<header>
										<h2 align="center">ACTUALIZAR EQUIPO</h2>
										<span class="byline">INGRESE NUEVOS DATOS</span>
							    </header>
								  <p>
                                <!--____________________________!-->                                  
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
  <label for="idradio"> ID RADIO:<br />
  </label>
  <input type="text" name="idradio" id="idradio" value="<?php echo $idradio ?>" size="25" readonly>
</b>
</p>
<p>
<b>
  <label for="inventario">INVENTARIO:<br />
  </label>
  <input type="text" name="inventario" id="inventario" value="<?php echo $inventario ?>" size="25">
</b>
</p>
<p>
<b>
  <label for="serie">SERIE:<br />
  </label>
  <input type="text" name="serie" id="serie" value="<?php echo $serie ?>" size="25">
</b>
</p>
<p>
<b>
  <label for="tiporadio">TIPO DE RADIO:<br />
  </label>
  
 <select name="tiporadio" id="tiporadio" style="width:200px">
 <option><?php echo $tiporadio ?></option> 
 <option>Movil</option>
<option>Base</option>
<option>Portatil</option>
</select> 
  </b>
</p>
<p>
<b>
  <label for="modeloradio">MODELO DE RADIO:</label>
 </b>
  </p>
<p>
<b>
  <input type="text" name="modeloradio" id="modeloradio" value="<?php echo $modeloradio ?>" size="25">
</b>
</p>
<p>
<b>
  <label for="asignaciogeneral">ASIGNACION GENERAL:<br />
  </label>
  <input type="text" name="asignaciogeneral" id="asignaciogeneral" value="<?php echo $asignaciogeneral ?>" size="25">
</b>
</p>
<p>
<b>
  <label for="jefatura">JEFATURA:<br />
  </label>
  <select name="jefatura" id="jefatura" style="width:200px">
 <option><?php echo $jefatura ?></option> 
  <?php
$quer='Select *FROM direccion';
$resultad= mysqli_query($conexion,$quer) or die('error: '.mysqli_error($conexion));
while ( $r = mysqli_fetch_array($resultad) )
{
	$cd=$r['cod_direccion'];
	$d=$r['direccion']; 
?>
<option value="<?php echo $cd?>"><?php echo $d; }?></option>
</select> </b>
</p>
<p>
<b>
  <label for="asignacionindividual">ASIGNACION INDIVIDUAL:</label>
 </b>
  </p>
<p>
<b>
  <input type="text" name="asignacionindividual" id="asignacionindividual" value="<?php echo $asignacionindividual ?>" size="25">
</b>
</p>
<p>
<b>
  <label for="codlcp2">CAPACITY MAX:</label>
  </b>
  </p>
<p>
<b>
  <select name="codcm2" id="codcm2" style="width:200px">
    <option><?php echo $codcm2 ?></option>
    <option>si</option>
    <option>no</option>
  </select>
</b>
<p>
<b>
  <label for="codlcp2">LINKED CAPACITY PLUS:</label>
  </b>
  </p>
<p>
<b>
  <select name="codlcp2" id="codlcp2" style="width:200px">
    <option><?php echo $codlcp2 ?></option>
    <option>si</option>
    <option>no</option>
  </select>
</b>
</p>
<p>
<b>
  <label for="codcp2">CAPACITY PLUS:<br />
  </label>
  <select name="codcp2" id="codcp2" style="width:200px">
    <option> <?php echo $codcp2 ?> </option>
    <option>si</option>
    <option>no</option>
  </select>
</b>
</p>
<p>
<b>
  <label for="codipsc2">IP SITE CONNECT:</label>
  </b>
  </p>
<p>
<b>
  <select name="codipsc2" id="codipsc2" style="width:200px">
    <option> <?php echo $codipsc2 ?> </option>
    <option>si</option>
    <option>no</option>
  </select>
</b>
</p>
<p>
<b>
  <label for="observacio">OBSERVACION:</label>
  </b>
  </p>
<p>
<b>
  <textarea name="observacio" id="observacio" cols="25" rows="2"><?php echo $observacio ?></textarea>
</b>
</p>
<p>
  <input type="submit" name="guardar" id="guardar" value="MODIFICAR">
</p>
</div>
</form>
<!--_________________________________________!-->
                                  </p>
								  
								</section>
							</div>
						<!-- Content -->
							
					</div>
				
				</div>
			</div>
		</div>
	<!-- /Main -->

	

	<!-- Copyright -->
<div id="copyright">
			<div class="container">&copy; All rights reserved.</div>
	</div>


</body>
</html>