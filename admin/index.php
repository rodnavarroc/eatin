<?php

$conexion=mysqli_connect("localhost", "root", "", "eatin");
$mysqli = new mysqli("localhost", "root", "", "eatin");
$costo_total = 0;

session_start(); 
$page = $_SERVER['PHP_SELF'];
$sec = "10";
header("Refresh: $sec; url=$page");
?>
<!DOCTYPE html>
<html>
<head>
	<title>EatIn</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/94f47f52fa.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Epilogue&family=Inter&family=News+Cycle&display=swap" rel="stylesheet"> 
</head>
<body style="font-family: Epilogue; background-color: #f2f2f2; color: #2E1F27;">

	<!--menu-->
	<div class="container fixed-top" style="background-color: transparent;">
		<div class="row">
			<div class="col">
				<br>
				<div class="navbar navbar-expand-lg navbar-dark" style="background-color: #854D27; border-radius: 999px;">
				  <a class="navbar-brand" href="index.php" style="font-family: Epilogue; color: white;"><font color="#F4C95D">EatIn |</font> <small style="color: #E7E393;">Mireles Wings</small></a>
				  <span class="navbar-text">
				  </span>
				</div>
			</div>
		</div>
		<br>
	</div>
	<!--menu-->

	<!--llamar al mesero-->
	<div class="navbarx d-block d-sm-none p-2" id="myNavbar">
	  <a class="nav-link" href="status.php" style="border-radius: 99px; background-color: #2E1F27; color: #DD7230; float: right; font-size: 20px;">
	  	<i class="fas fa-bell"></i>
	  </a>
	</div>
	<!--llamar al mesero-->
	
	<div class="container"  style="padding-top: 100px;">
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fa fa-money"></i>&nbsp;Administrador</p>
		
		<?php 
		$sql="SELECT * FROM pedidos WHERE estatus != '3'";
		$result=mysqli_query($conexion,$sql);
		$numero_filas = mysqli_num_rows($result);
		##$mostrar=mysqli_fetch_array($result);
		
		for ($i=0; $i < $numero_filas; $i++) {
		?>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
					<div class="col-12">
						<br>
						
						<?php while($mostrar=mysqli_fetch_array($result)){
								$sentId = $mostrar['idpedido'];
								$estatusActual = $mostrar['estatus'];
								$nombreEstatus='';
								if(intval($estatusActual)==0) $nombreEstatus='En cola';
								if(intval($estatusActual)==1) $nombreEstatus='En preparación';
								if(intval($estatusActual)==2) $nombreEstatus='Pedido listo';
								if(intval($estatusActual)==3) $nombreEstatus='Pedido entregado';
								echo ("Pedido ".$mostrar['idpedido']."<br>");
								echo ("Estatus del pedido: ".$nombreEstatus."<br>");
								$arrayunserialize1=unserialize($mostrar['pedido']);
								$longitud=count($arrayunserialize1);
								for ($j=0; $j < $longitud; $j++) 
								{
									$idplatillo = $arrayunserialize1[$j]['idPlatillo'];
									$idextra = $arrayunserialize1[$j]['extra_salsa'];
									$idextra1 = $arrayunserialize1[$j]['extra_papas'];
									
									$sql2="SELECT * FROM menu WHERE idplatillo = '$idplatillo'";
									$result2=mysqli_query($conexion,$sql2);
									$mostrar2=mysqli_fetch_array($result2);
									echo("<p>".$mostrar2['nombre_platillo']."</p>");

									if($mostrar2['categoria'] == 'tenders' || $mostrar2['categoria'] == 'boneless' || $mostrar2['categoria'] == 'alitas' || $mostrar2['categoria'] == 'hamburguesas')
									{

									$sql3="SELECT * FROM extras WHERE idextra = '$idextra'";
									$result3=mysqli_query($conexion,$sql3);
									$mostrar3=mysqli_fetch_array($result3);
									echo("<p>+ Salsa: ".$mostrar3['nombre_extra']."<br>");
									$sql4="SELECT * FROM extras WHERE idextra = '$idextra1'";
									$result4=mysqli_query($conexion,$sql4);
									$mostrar4=mysqli_fetch_array($result4);
									echo("+ Papas: ".$mostrar4['nombre_extra']."<br>");
									echo("+ Comentarios: ".$arrayunserialize1[$j]['comentarios']."</p>");
									}
								}
						break;
						} ?><br>

					</div>
				</div>
			</div>
		</div>
		<br>
		<!-- aqui van los botones para cambiar de estado del pedido jejejeje-->
		
		<div style="text-align:center;">
		<?php if(intval($estatusActual)!=0){ ?>
		<a href="../scripts/modificar_estatus.php?idModificar=<?php echo($sentId); ?>&estatus=0&estatusActual=<?php echo($estatusActual); ?>" class="btn btn-primary" style="background-color: #F4C95D; color: #854D27;"></i>&nbsp; Regresar </a>
		<?php } ?>
		<?php if(intval($estatusActual)!=2){ ?>
		<a href="../scripts/modificar_estatus.php?idModificar=<?php echo($sentId); ?>&estatus=1&estatusActual=<?php echo($estatusActual); ?>" class="btn btn-primary" style="background-color: #F4C95D; color: #854D27; margin-left:7em;"></i>&nbsp; Avanzar </a>
		<?php } ?>
		<?php if(intval($estatusActual)==2){ ?>
		<a href="../scripts/modificar_estatus.php?idModificar=<?php echo($sentId); ?>&estatus=1&estatusActual=<?php echo($estatusActual); ?>" class="btn btn-primary" style="background-color: #F4C95D; color: #854D27; margin-left:7em;"></i>&nbsp; Finalizar pedido </a>
		<?php } ?>
		</div>
		<br>
		<?php } ?>
		
		

	</div>
	<br>

</body>

<style type="text/css">
	.categorias
	{
		padding-right: 5px;
		padding-left: 5px;
	}

	.navbarx {
	  background-color: transparent;
	  z-index: 99;
	  overflow: hidden;
	  position: fixed;
	  bottom: 0;
	  width: 100%;
	}

	/* Style the links inside the navigation bar */
	.navbarx a {
	  display: block;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 3% 5%;
	  text-decoration: none;
	  font-size: 17px;
	}

	.quitar_btn
	{
		display: block;
		text-decoration: none;
		color: #854D27;
	}

	.quitar_btn:hover
	{
		color: #854D27;
		text-decoration: none;
		display: block;
	}
</style>

</html>