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
		<title>VISUALIZAR EQUIPOS</title>
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
							   <li><a href="../administrador/lista2.php">imprimir</a></li>
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
										<h2>OPCIONES</h2>
										<span class="byline">Podrá tener acceso a:</span>
									</header>
									<ul class="style1">
										<li class="first">
											<p class="date"><a href="ingresar_equipo.php"><img src="images/ingresar.png" alt="" width="65" height="65" align="center"></a></p>
											Registre Nuevo Equipo.</li>
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
						  <section>
								<header>
										<h2 align="center">EQUIPO</h2>
										<span class="byline">VISUALIZAR EQUIPO EXISTENTES</span>
							    </header>
								  <p>
                                <!--____________________________!-->                                  
							   <form method="POST" action="buscar.php"> 
            <p><strong>Palabra clave:</strong>
            
              <label for="filtro"></label>
              <select name="filtro" id="filtro">
              <option> Seleccione Filtro </option>
              <option> ID RADIO </option>
              <option> INVENTARIO </option>
              <option> SERIE </option>
              </select>
              <input type="text" name="T1" size="20">
  <input type="submit" value="Buscar" name="buscar" />
            </p>
         </form> 
		
        <form id="form1" name="form1" method="post" action=""> 
		<table width="311" border="0" align="center">
<tr>
<td width="264"><div align="center">
<label for="menucategoria"></label>
<?php
include('../conexion/conexion.php');
//IMPRIMO CODIGO DE CATEGORIA
$query='Select *FROM direccion';
$resultado= mysqli_query($conexion,$query) or die('error: '.mysqli_error($conexion));
?>Jefatura: 
<select name="DG" id="DG" onchange="submit()">
<option value="<?php echo $nada=""?>"
<?php
if(empty($_POST['DG']))
{
$_POST['DG']="";
}//if
else 
if($_POST['DG']==$nada)
{                //aca chequeo si el post contiene el valor
echo ' selected="selected" ';  
}//if
?> 
> --Seleccione-- </option>
<?php
while($res= mysqli_fetch_array($resultado))
{
 $codigo_cat=$res["cod_direccion"];
 $desc=$res["direccion"];
 ?>
            <option value=" <?php
 echo $codigo_cat; ?>"
 <?php 
  
if(empty($_POST['DG']))
{
	$_POST['DG']="";
	}//if
	else 
if($_POST['DG']==$codigo_cat)
{                //aca chequeo si el post contiene el valor
echo ' selected="selected" ';  
}//if
 ?> 
 >
<?php
 echo $desc;
}//while 
?>
</option> 		   
</select> <?php
//IMPRIMO ACTIVOS
//if(isset($_POST['menucategoria']))
//{
if(empty($_POST['DG']) and $_POST['DG']== $nada)
{	
 $categoria=NULL;
 $_SESSION['codigo']="---";
 $_SESSION['descripcion']="---";
   
   echo "<p>";
	$sql=("SELECT * FROM inventario");
				$query=mysqli_query($conexion,$sql);

				echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
						echo "<td align='center'> <b> ID RADIO</td>";
						echo "<td align='center'> <b> INVENTARIO</td>";
						echo "<td align='center'> <b> SERIE</td>";
						echo "<td align='center'> <b> DETALLE</td>";			?>			  
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
	else 
	{

?>
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <div align="center">
             </form> 
<!-- inicio tabla --> 
            <?php
	echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
						echo "<td align='center'> <b> ID RADIO</td>";
						echo "<td align='center'> <b> INVENTARIO</td>";
						echo "<td align='center'> <b> SERIE</td>";
						echo "<td align='center'> <b> DETALLE</td>";
 $categoria=$_POST['DG'];
 $_SESSION['categ']=$categoria;
$query='Select *FROM inventario where jefatura = "'.$categoria.'"';
$resultado= mysqli_query($conexion,$query) or die('error: '.mysqli_error($conexion));
	while($arreglo=mysqli_fetch_array($resultado))
	{
		
			echo "<tr class='success'>";
				    	echo "<td align='center'> <a href='actuequipo.php?cod=$arreglo[0]'>$arreglo[0]</td>";
				    	echo "<td align='center'> $arreglo[1]</td>";
				    	echo "<td align='center'> $arreglo[2]</td>";
						echo "<td align='center'> <a href='equipo1.php?cod=$arreglo[0]'>VER</td>"; 	
					echo "</tr>";		
	} 
	echo "</font>";
	}
echo "</table>";
?>          
<!-- fin-->
&nbsp;</div></td>
      </tr>     
    </table>
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