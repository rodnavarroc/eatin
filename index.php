<?php

$mesa = 27; // = $_GET['mesa'];
session_start();
$_SESSION['mesa'] = $mesa;

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
	
	<div class="container" style="padding-top: 90px;">
		<div class="row">
			<div class="col-12">
				<center><img src=".vs\images\mirelesWings_Logo.png" class="img-fluid" width="20%;" height="20%;"></center>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<center><h3 style="font-family: News Cycle; padding: 5px 20px; font-size: 22px;">¡Bienvenido/a <br><b>Mireles Wings</b>! <br>¿Qué vas a comer hoy?</h3></center>
				<br>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fas fa-certificate"></i>&nbsp;Categorías | <small>Encuentra lo que buscas</small></p>
		<div class="d-flex flex-row flex-nowrap overflow-auto" style="padding: 0px 15px;">
			<div class="col-4 categorias">
				<a class="section_link" href="seccion.php?s=boneless"><div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src=".vs/images/boneless.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Boneless</center>
				  </div>
				</div></a>
			</div>
			<div class="col-4 categorias">
				<a class="section_link" href="seccion.php?s=alitas"><div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src=".vs/images/alitas.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Alitas</center>
				  </div>
				</div></a>
			</div>
			<div class="col-4 categorias">
				<a class="section_link" href="seccion.php?s=tenders"><div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src=".vs/images/tenders.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Tenders</center>
				  </div>
				</div></a>
			</div>
			<div class="col-4 categorias">
				<a class="section_link" href="seccion.php?s=complementos"><div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src=".vs/images/papas.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Entradas</center>
				  </div>
				</div></a>
			</div>
			<div class="col-4 categorias">
				<a class="section_link" href="seccion.php?s=otros"><div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src=".vs/images/otros.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Otros</center>
				  </div>
				</div></a>
			</div>
			<div class="col-4 categorias">
				<a class="section_link" href="seccion.php?s=bebidas"><div class="card" style="border: none; border-radius: 7px; background-color: #E7E393;">
				  <img src=".vs/images/bebidas.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Bebidas</center>
				  </div>
				</div></a>
			</div>
		</div>
		<hr>
	</div>
	<div class="container-fluid">
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fas fa-certificate"></i>&nbsp;Nuestros Favoritos | <small>Los más pedidos</small></p>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
				  <img src=".vs/images/fav_boneless.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div class="card-body">
				    <p style="font-family: Epilogue; color: #854D27;">Boneless Personales &nbsp;<span class="text-muted"> $80</span></p>
				    <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua.
				    </p>
				    <div class="row">
				    	<div class="col-6">
				    	<a href="agregar.php?id=13" class="btn btn-block" style="background-color: #E7E393; color: #854D27"><i class="fas fa-plus" style="color: #854D27"></i> Agregar</a>
					    </div>
					    <div class="col-6">
					    <a href="ar.php" type="button" class="btn btn-block" style="background-color: #854D27; color: #E7E393"><i class="fas fa-vr-cardboard" style="color: #E7E393"></i> AR</a>
					    </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
				  <img src=".vs/images/fav_alitas.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div class="card-body">
				    <p style="font-family: Epilogue; color: #854D27;">Alitas Personales &nbsp;<span class="text-muted"> $80</span></p>
				    <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua.
				    </p>
				    <div class="row">
				    	<div class="col-12">
				    	<a href="agregar.php?id=16" class="btn btn-block" style="background-color: #E7E393; color: #854D27"><i class="fas fa-plus" style="color: #854D27"></i> Agregar</a>
					    </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
				  <img src=".vs/images/fav_tenders.jpg" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div class="card-body">
				    <p style="font-family: Epilogue; color: #854D27;">Tenders Personales&nbsp;<span class="text-muted"> $80</span></small></p>
				    <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua.
				    </p>
				    <div class="row">
				    	<div class="col-12">
				    	<a href="agregar.php?id=10" class="btn btn-block" style="background-color: #E7E393; color: #854D27"><i class="fas fa-plus" style="color: #854D27"></i> Agregar</a>
					    </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<br>
	</div>
	
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

	.section_link
	{
		display: block;
		text-decoration: none;
		color: inherit;
	}
</style>

</html>