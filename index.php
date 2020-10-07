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
				      <a href="cart.php" style="color: #E7E393;"><i class="fas fa-shopping-cart"></i></a>
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
	
	<div class="container" style="padding-top: 100px;">
		<div class="row">
			<div class="col-12">
				<center><img src="https://www.lasalitas.com/mt-content/uploads/2019/04/lasalitas-logo2019.png" class="img-fluid" width="50%;"></center>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<center><h3 style="font-family: News Cycle; padding: 5px 20px; font-size: 22px;">¡Bienvenido/a a <br><b>Las Alitas Santa Catarina</b>! <br>¿Qué vas a comer hoy?</h3></center>
				<br>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fas fa-certificate"></i>&nbsp;Categorías | <small>Encuentra lo que buscas</small></p>
		<div class="row" style="padding: 0px 15px;">
			<div class="col-4 categorias">
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src="http://lorempixel.com/300/300/food/1" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Boneless</center>
				  </div>
				</div>
			</div>
			<div class="col-4 categorias">
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src="http://lorempixel.com/300/300/food/8" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Alitas</center>
				  </div>
				</div>
			</div>
			<div class="col-4 categorias">
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src="http://lorempixel.com/300/300/food/9" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Tenders</center>
				  </div>
				</div>
			</div>
		</div>
		<hr>
	</div>
	<div class="container-fluid">
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fas fa-certificate"></i>&nbsp;Destacados | <small>Los favoritos de todos</small></p>
		<div class="row">
			<div class="col-12">
				<div class="card" style="border: none; border-radius: 7px;">
				  <img src="http://lorempixel.com/300/150/food/4" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div class="card-body">
				    <p style="font-family: Epilogue; color: #854D27;">Boneless Personales <small class="text-muted">(8 piezas)</small></p>
				    <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua.
				    </p>
				    <div class="row">
				    	<div class="col-6">
				    	<button type="button" class="btn btn-block" data-toggle="modal" data-target="#exampleModal" style="background-color: #E7E393; color: #854D27"><i class="fas fa-plus" style="color: #854D27"></i> Agregar</a>
					    </div>
					    <div class="col-6">
					    	<button type="button" class="btn btn-block" data-toggle="modal" data-target="#exampleModal2" style="background-color: #854D27; color: #E7E393"><i class="fas fa-vr-cardboard" style="color: #E7E393"></i> AR</a>
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
				  <img src="http://lorempixel.com/300/150/food/8" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div class="card-body">
				    <p style="font-family: Epilogue; color: #854D27;">Alitas Personales <small class="text-muted">(8 piezas)</small></p>
				    <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua.
				    </p>
				    <div class="row">
				    	<div class="col-12">
				    	<button type="button" class="btn btn-block" data-toggle="modal" data-target="#exampleModal" style="background-color: #E7E393; color: #854D27"><i class="fas fa-plus" style="color: #854D27"></i> Agregar</a>
					    </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<br>


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Agregar platillo</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	        	<div class="form-group">
			    <label>Salsa</label>
			    <select class="form-control">
			    	<option selected="true">Buffalo</option>
			    	<option>Mango Habanero</option>
			    	<option>Lemon Pepper</option>
			    </select>
			  	</div>

			  	<div class="form-group">
			  		<label>Comentarios</label>
			    	<input type="numeric" placeholder="Instrucciones para el chef" class="form-control">
			  	</div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn" style="background-color: #E7E393; color: #DD7230;" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn" style="background-color: #2E1F27; color: #DD7230;">Agregar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Vista AR</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <br>
	        <p>Apunta tu cámara hacia la mesa para ver el platillo en Realidad Aumentada.</p>
	        <br>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn" style="background-color: #E7E393; color: #DD7230;" data-dismiss="modal">Cerrar</button>
	        <a href="ar.php"><button type="button" class="btn" style="background-color: #2E1F27; color: #DD7230;">Entendido</button></a>
	      </div>
	    </div>
	  </div>
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
</style>

</html>