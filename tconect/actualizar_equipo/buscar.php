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
		
	<!-- Main -->
		<div id="main-wrapper">
			<div class="container">

				<div id="main">
	
					<div class="row">
			   <?php
                 extract($_GET);
				 $filtro = $_POST["filtro"];
				$buscar = $_POST["T1"];
require("../conexion/conexion.php");
if($filtro=="SERIE")
{
$result =("SELECT * FROM inventario WHERE serie LIKE '%$buscar%' ORDER BY idradio"); 
		$query=mysqli_query($conexion,$result);

				echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
						echo "<td align='center'><b>ID RADIO</b></td>";
						echo "<td align='center'><b>INVENTARIO</b></td>";
						echo "<td align='center'><b>SERIE</b></td>";
						echo "<td align='center'><b>DETALLE</b></td>";
				

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td align='center'> <a href='actuequipo.php?cod=$arreglo[0]'>$arreglo[0]</td>";
				    	echo "<td align='center'> $arreglo[1]</td>";
				    	echo "<td align='center'> $arreglo[2]</td>";
						echo "<td align='center'> <a href='equipo1.php?cod=$arreglo[0]'>VER</td>"; 	
					echo "</tr>";
				}

				echo "</table>";
			} if($filtro=="ID RADIO") 
			{
			$result =("SELECT * FROM inventario WHERE idradio LIKE '%$buscar%' ORDER BY idradio"); 
		$query=mysqli_query($conexion,$result);

				echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
						echo "<td align='center'><b>ID RADIO</b></td>";
						echo "<td align='center'><b>INVENTARIO</b></td>";
						echo "<td align='center'><b>SERIE</b></td>";
						echo "<td align='center'><b>DETALLE</b></td>";
				

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td align='center'> <a href='actuequipo.php?cod=$arreglo[0]'>$arreglo[0]</td>";
				    	echo "<td align='center'> $arreglo[1]</td>";
				    	echo "<td align='center'> $arreglo[2]</td>";
						echo "<td align='center'> <a href='equipo1.php?cod=$arreglo[0]'>VER</td>"; 	
					echo "</tr>";
				}

				echo "</table>";
			} if ($filtro=="INVENTARIO") 
			{
			$result =("SELECT * FROM inventario WHERE cod_inventario LIKE '%$buscar%' ORDER BY idradio"); 
		$query=mysqli_query($conexion,$result);

				echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
						echo "<td align='center'><b>ID RADIO</b></td>";
						echo "<td align='center'><b>INVENTARIO</b></td>";
						echo "<td align='center'><b>SERIE</b></td>";
						echo "<td align='center'><b>DETALLE</b></td>";
				

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td align='center'> <a href='actuequipo.php?cod=$arreglo[0]'>$arreglo[0]</td>";
				    	echo "<td align='center'> $arreglo[1]</td>";
				    	echo "<td align='center'> $arreglo[2]</td>";
						echo "<td align='center'> <a href='equipo1.php?cod=$arreglo[0]'>VER</td>"; 	
					echo "</tr>";
				}

				echo "</table>";
			}
			
			?>
            
			
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