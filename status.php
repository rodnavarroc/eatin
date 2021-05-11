<?php

$conexion=mysqli_connect("localhost", "root", "", "eatin");
$mysqli = new mysqli("localhost", "root", "", "eatin");

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
	<!--menu -->
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
	<?php 
	$nombreEstatus='';
	$nombreEstatus1='';
	if(!isset($_SESSION['idpedido'])){
		$nombreEstatus='&nbsp;No hay pedidos para su mesa';
		$nombreEstatus1='Por favor, vuelva a la página principal para ordenar.';
		$mesa='';
		$idpedido='';
	}
	else{
		$mesa = $_SESSION['mesa'];
		$idpedido = $_SESSION['idpedido'];
		$sql="SELECT * FROM pedidos WHERE idpedido = '$idpedido'";
		$result=mysqli_query($conexion,$sql);
		$mostrar=mysqli_fetch_array($result);
		$estatusActual = $mostrar['estatus'];
		if(intval($estatusActual)==0) {
			$nombreEstatus='&nbsp;Su pedido está en cola'; 
			$nombreEstatus1='Entregado al chef';
			$page = $_SERVER['PHP_SELF'];
			$sec = "10";
			header("Refresh: $sec; url=$page");}
		if(intval($estatusActual)==1) {
			$nombreEstatus='&nbsp;Su pedido está en preparación'; 
			$nombreEstatus1='¡Pronto estará en su mesa!';
			$page = $_SERVER['PHP_SELF'];
			$sec = "10";
			header("Refresh: $sec; url=$page");
		}
		if(intval($estatusActual)==2) {
			$nombreEstatus='&nbsp;Su pedido está listo'; 
			$nombreEstatus1='¡En cualquier momentó llegará a su mesa!';
			$page = $_SERVER['PHP_SELF'];
			$sec = "10";
			header("Refresh: $sec; url=$page");
		}
		if(intval($estatusActual)==3) {
			$nombreEstatus='&nbsp;Su pedido ha sido entregado'; 
			$nombreEstatus1='¡Buen provecho!';
			$page = $_SERVER['PHP_SELF'];
			$sec = "10";
			unset($_SESSION['idpedido']);
			header("Refresh: $sec; url=$page");
		}
	}
	?>
	<!--llamar al mesero-->
	<div class="navbarx d-block d-sm-none p-2" id="myNavbar">
	  <a class="nav-link" href="status.php" style="border-radius: 99px; background-color: #2E1F27; color: #DD7230; float: right; font-size: 20px;">
	  	<i class="fas fa-bell"></i>
	  </a>
	</div>
	<!--llamar al mesero-->

	<div class="container" style="padding-top: 100px">
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;">&nbsp;<i class="fas fa-bell"></i>&nbsp; Estatus</p>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
					<div class="col-12">
						<br>
						<p>
							<i class="fas fa-hourglass-half"></i>&nbsp;<?php echo($nombreEstatus); ?><br>
							<small class="text-muted"><?php echo($nombreEstatus1); ?></small>
						</p>
					</div>
				</div>
				<br>
			</div>
		</div>
		<?php if(isset($_SESSION['idpedido'])){ ?>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px; background-color: #854D27; color: #E7E393">
					<div class="col-12">
						<br>
						<center>
							<p>Orden #<?php echo($idpedido); ?>
							<br>Mesa <?php echo($mesa); ?></p>
						</center>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
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
</style>

</html>