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
				  <a class="navbar-brand" href="index.php" style="font-family: Epilogue; color: white;"><font color="#F4C95D">EatIn |</font> <small style="color: #E7E393;">Las Alitas Santa Catarina</small></a>
				  <span class="navbar-text">
				      <a href="cart.php" style="color: #E7E393;"><i class="fa fa-shopping-cart"></i></a>
				  </span>
					<span class="navbar-text">
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
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fa fa-money"></i>&nbsp;Su cuenta</p>

		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
					<div class="col-12">
						<br>
						<p>
						Boneless Personales<br>
						</p>
						<p style="font-size: 18px; text-align: right; background-color: #E7E393; padding-right: 10px; border-radius: 7px;">
						<small style="color: #854D27;">$89.90</small></p>
					</div>
				</div>
			</div>
		</div>
		
		<hr>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px; background-color: #854D27; color: #E7E393">
					<div class="col-12">
						<br>
						<label>Consumo</label>
						<p style="font-size: 15px; text-align: right; background-color: #E7E393; padding-right: 7px; border-radius: 7px;">
						<small style="color: #854D27;  padding-right: 17px;">$89.90</small></p>
						<label for="propina">Propina</label>
						<p style="font-size: 15px; text-align: right; background-color: #E7E393; padding-right: 7px; border-radius: 7px;">
							<select style="text-align-last:right; font-size: 15px; padding-right: 5px; background-color: #E7E393; border-radius: 7px; color: #854d27;" name="propina" id="propina">
							  <option value="diez">10%</option>
							  <option value="quince">15%</option>
							  <option value="veinte">20%</option>
							  <option value="nada">No dejar propina</option>
							</select>
						</p>
						<p>
						Total por pagar
						</p>
						<p style="font-size: 18px; text-align: right; background-color: #E7E393; padding-right: 10px; border-radius: 7px;">
						<small style="color: #854D27;">$98.89</small></p>
						
						<button type="button" class="btn btn-block disabled" style="background-color: #F4C95D; color: #854D27;"><i class="fas fa-wallet"></i>&nbsp;Efectivo</button>
						<button type="button" class="btn btn-block disabled" style="background-color: #F4C95D; color: #854D27;"><i class="fas fa-credit-card"></i>&nbsp;Tarjeta de crédito / débito</button>
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
</style>

</html>