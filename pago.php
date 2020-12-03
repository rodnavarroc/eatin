<?php

$conexion=mysqli_connect("localhost", "root", "", "eatin");
$mysqli = new mysqli("localhost", "root", "", "eatin");
$costo_total = 0;

session_start(); 
if(!isset($_SESSION['idpedido'])) header("Location: index.php");
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
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fa fa-money"></i>&nbsp;Tu cuenta</p>
		
		<?php 
		$idpedido=$_SESSION['idpedido'];
		echo("<p class='text-muted' style='margin: 0'> Pedido #".$idpedido."</p>");
		$sql="SELECT * FROM pedidos WHERE idpedido = '$idpedido'";
		$result=mysqli_query($conexion,$sql);
		$numero_filas = mysqli_num_rows($result);
		$mostrar1=mysqli_fetch_array($result);
		$arrayunserialize1=unserialize($mostrar1['pedido']);

		$longitud=count($arrayunserialize1);
		##$countinternal = count($arrayunserialize1[0]);

		for ($i=0; $i < $longitud; $i++) {
		$idplatillo = $arrayunserialize1[$i]['idPlatillo'];
		$idextra = $arrayunserialize1[$i]['extra_salsa'];
		$idextra1 = $arrayunserialize1[$i]['extra_papas'];
		?>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
					<div class="col-12">
						<br>
						
						<?php 
								$sql2="SELECT * FROM menu WHERE idplatillo = '$idplatillo'";
								$result2=mysqli_query($conexion,$sql2);
								$mostrar2=mysqli_fetch_array($result2);
								echo("<p>".$mostrar2['nombre_platillo']."</p>");
						?>
						<small class="text-muted">
						<?php
								$sql3="SELECT * FROM extras WHERE idextra = '$idextra'";
								$result3=mysqli_query($conexion,$sql3);
								$mostrar3=mysqli_fetch_array($result3);

								$sql4="SELECT * FROM extras WHERE idextra = '$idextra1'";
								$result4=mysqli_query($conexion,$sql4);
								$mostrar4=mysqli_fetch_array($result4);
								if($mostrar2['categoria'] == 'tenders' || $mostrar2['categoria'] == 'boneless' || $mostrar2['categoria'] == 'alitas' || $mostrar2['categoria'] == 'hamburguesas')
								{
									echo("<p>+ Salsa: ".$mostrar3['nombre_extra']."<br>");
									echo("+ Papas: ".$mostrar4['nombre_extra']."<br>");
									echo("+ Comentarios: ".$arrayunserialize1[$i]['comentarios']."</p>");
									
								}
								$costofinal=(intval($mostrar2['costo'])+intval($mostrar3['costo_extra'])+intval($mostrar4['costo_extra']));
						?>
						</small>
						<p style="font-size: 18px; text-align: right; background-color: #E7E393; padding-right: 10px; border-radius: 7px;">
						<small style="color: #854D27;">
							<?php echo("$".$costofinal." MXN"); ?><br>
						</small></p>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		
		<hr>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px; background-color: #854D27; color: #E7E393">
					<div class="col-12">
						<br>
						<label>Consumo Total</label>
						<p style="text-align: right; background-color: #E7E393; padding-right: 10px; border-radius: 7px;">
						<font style="color: #854D27;">$<?php echo $mostrar1['total']; ?></font></p>
						<label for="propina" style="color: #E7E393;">Propina</label>
						<p style="font-size: 15px; text-align: right; border-radius: 7px;">
							<select class="custom-select" style=" font-size: 15px; padding-right: 5px; background-color: #E7E393; border: 0px; color: #854d27;" name="propina" id="propina" onchange="myfunction()">
						      <option value="0">No dejar propina</option>
							  <option value="5">5%</option>
							  <option value="10">10%</option>
							  <option value="15">15%</option>
							  <option value="20">20%</option>
							</select>
						</p>
						<!-- SCRIPT DE JS PARA OBTENER EL VALOR Y MODIFICAR AUTOMATICAMENTE EN EL HTML-->
						<script type= "text/javascript">
						 function myfunction(){
							let propina = document.getElementById('propina').value;
							console.log(propina);
							let costoTotal = <?php echo $mostrar1['total']?>;
							let totalFinal = costoTotal+((costoTotal*propina)/100);
							console.log(totalFinal);
							$("#totalFinal").text("$ "+totalFinal+" MXN");//despues del $ es el id del lugar en donde se modificará el texto correspondiente (.text)
						 }
						</script>
						<p style="color: #E7E393;">
						Total por pagar
						</p>
						<p id="pagoFinal" style="font-size: 18px; text-align: center; background-color: #E7E393; border-radius: 7px;">
						<font id="totalFinal" style="color: #854D27;">$<?php echo $mostrar1['total']." MXN"; ?></font></p>
						
						<a href="scripts/forma_pago.php?metodoPago='Efectivo'&idpedido=<?php echo($idpedido);?>" class="btn btn-block" style="background-color: #F4C95D; color: #854D27;"><i class="fas fa-wallet"></i>&nbsp;Efectivo</a>
						<a href="scripts/forma_pago.php?metodoPago='Tarjeta'&idpedido=<?php echo($idpedido);?>" class="btn btn-block" style="background-color: #F4C95D; color: #854D27;"><i class="fas fa-credit-card"></i>&nbsp;Tarjeta de crédito / débito</a>
						<br>
					</div>
				</div>
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