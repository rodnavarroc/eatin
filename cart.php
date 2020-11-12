<?php

$conexion=mysqli_connect("localhost", "root", "", "eatin");
$mysqli = new mysqli("localhost", "root", "", "eatin");
$costo_total = 0;

session_start(); 
if(!isset($_SESSION['carrito']) || !array_keys($_SESSION['carrito'])) header("Location: index.php");

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
				  	  <a href="cart.php" style="color: #E7E393;"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;</a>
				      <a href="pago.php" style="color: #E7E393;"><i class="fa fa-money"></i></a>
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
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fa fa-shopping-cart"></i>&nbsp;Tu pedido</p>

		<?php 
		for ($i=0; $i <= max(array_keys($_SESSION['carrito'])); $i++) {
		
			if(!isset($_SESSION['carrito'][$i])) $i++;

		$plat = $_SESSION['carrito'][$i]['idPlatillo'];
		$sql="SELECT * FROM menu WHERE idplatillo = '$plat'";
    	$result=mysqli_query($conexion,$sql);
    	$mostrar=mysqli_fetch_array($result);
    	$costo = 0;
		?>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
					<div class="col-12">
						<br>
						
						<?php echo $mostrar['nombre_platillo']."&nbsp; <small><a class='quitar_btn' href='scripts/eliminar_item.php?id=$i' class='text-muted' style='float: right;'><i class='fas fa-trash-alt'></i></a></small>"; $costo += $mostrar['costo']; ?><br>
						<small class="text-muted">
						<?php 
						if($_SESSION['carrito'][$i]['extra_salsa'] != '0')
						{
							$extra = $_SESSION['carrito'][$i]['extra_salsa'];
							$sql2="SELECT * FROM extras WHERE idextra = '$extra'";
					    	$resultx=mysqli_query($conexion,$sql2);
					    	$mostrarx=mysqli_fetch_array($resultx); 

					    	$costo += $mostrarx['costo_extra'];

					    	echo("<p>+ Salsa: ".$mostrarx['nombre_extra']);
						}
						?>
						
						<?php 
						if($_SESSION['carrito'][$i]['extra_papas'] != '0')
						{
							$extra = $_SESSION['carrito'][$i]['extra_papas'];
							$sql2="SELECT * FROM extras WHERE idextra = '$extra'";
					    	$resultx=mysqli_query($conexion,$sql2);
					    	$mostrarx=mysqli_fetch_array($resultx); 

					    	$costo += $mostrarx['costo_extra'];

					    	echo("<br>+ Papas: ".$mostrarx['nombre_extra']);
						}
						?>
						
						<?php 
						if($_SESSION['carrito'][$i]['comentarios'] != '')
						{
							echo("<br>+ Comentarios: ".$_SESSION['carrito'][$i]['comentarios']."</p>");
						}
						else
						{
							echo("<br>");
						}
						?>

						</small>
						<p style="font-size: 18px; text-align: right; background-color: #E7E393; padding-right: 10px; border-radius: 7px;">
						<small style="color: #854D27;">
							<?php echo("$".$costo); $costo_total += $costo; ?><br>
						</small></p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<?php } ?>

		<hr>
		<div class="row">
			<div class="col-12" style="padding-left: 0px;padding-right: 0px;">
				<div class="card" style="border: none; border-radius: 7px; background-color: transparent;">
					<div class="col-12">
						</small>
						<p style="font-size: 18px; text-align: center; background-color: #854D27; border-radius: 7px;">
						<small style="color: #E7E393;">
							<?php echo("Total de la orden <br><font size='4' color='white'>$".$costo_total." MXN");?>
						</small></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">
				<a href="scripts/insertar_orden.php?costo=<?php echo($costo_total);?>" class="btn btn-block" style="background-color: #F4C95D; color: #854D27;"> <!-- type="button" -->
				<i class="fas fa-concierge-bell"></i>&nbsp;Ordenar</a>
				<hr>
				<a href="scripts/vaciar_carrito.php" class="btn btn-block" style="background-color: #E7E393; color: #854D27;"><i class="fas fa-trash-alt"></i>&nbsp; Vaciar carrito</a>
				<br><br>
			</div>
		</div>

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