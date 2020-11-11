<?php

if(!isset($_GET['id'])) header("Location: index.php");

$conexion=mysqli_connect("localhost", "root", "", "eatin");
$mysqli = new mysqli("localhost", "root", "", "eatin");

$plat = $_GET['id'];

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

	<?php
    $sql="SELECT * FROM menu WHERE idplatillo = '$plat'";
    $result=mysqli_query($conexion,$sql);
    $mostrar=mysqli_fetch_array($result); 
    ?>
	
	<div class="container"  style="padding-top: 100px;">
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;">&nbsp;<i class="fas fa-plus"></i>&nbsp;&nbsp;<?php echo $mostrar['nombre_platillo'];?></p>

	<div class="card">
		<div class="card-body">
			<form method="post" action="scripts/agregar_carrito.php?id=<?php echo $plat?>">
	        	<?php
				if($mostrar['categoria'] == 'boneless' || $mostrar['categoria'] == 'tenders' || $mostrar['categoria'] == 'alitas' || $mostrar['categoria'] == 'hamburguesas') {
	        	?>
	        	<div class="form-group">
			    <label>Salsa</label>
			    <select class="form-control" name="salsa">
			    	<?php
			        $sql="SELECT * FROM extras WHERE tipo_extra = 'salsa'";
			        $result=mysqli_query($conexion,$sql);
			        while($mostrar=mysqli_fetch_array($result)){ ?> 
			    	<option value="<?php echo $mostrar['idextra']?>"><?php echo $mostrar['nombre_extra']." - $".$mostrar['costo_extra'];?></option>
			    	<?php } ?>	
			    </select>
			  	</div>

			  	<div class="form-group">
			    <label>Papas fritas</label>
			    <select class="form-control" name="papas">
			    	<?php
			        $sql="SELECT * FROM extras WHERE tipo_extra = 'papas'";
			        $result=mysqli_query($conexion,$sql);
			        while($mostrar=mysqli_fetch_array($result)){ ?> 
			    	<option value="<?php echo $mostrar['idextra']?>"><?php echo $mostrar['nombre_extra']." - $".$mostrar['costo_extra'];?></option>
			    	<?php } ?>	
			    </select>
			  	</div>
			  	<?php } ?>

			  	<?php
			  	if($mostrar['categoria'] != 'bebidas' && $mostrar['categoria'] != 'complementos' && $mostrar['categoria'] != 'otros') {
			  	?>
			  	<div class="form-group">
			  		<label>Comentarios</label>
			    	<input type="text" placeholder="Instrucciones para el chef" class="form-control" name="comentarios_extra">
			  	</div>
	            <?php } ?>

			  	<input type="submit" name="enviar" class="btn btn-dark btn-block" value="Agregar" style="background-color: #2E1F27; color: #DD7230;">
	        </form>
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
</style>

</html>