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
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src="https://scontent.fmty1-1.fna.fbcdn.net/v/t1.0-9/78955031_2401514466731929_55783808334561280_o.jpg?_nc_cat=111&ccb=2&_nc_sid=a26aad&_nc_eui2=AeF1LnSuk3V3ZPvHKRZR7aZcjSDPgmSbTEeNIM-CZJtMR-ij_iOFO9W_X2qub4FvFi0&_nc_ohc=Xc_HcVc289YAX_f5Hbp&_nc_ht=scontent.fmty1-1.fna&oh=22b15c61aa53e16a84a965c26f5f763f&oe=5FC53D85" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Boneless</center>
				  </div>
				</div>
			</div>
			<div class="col-4 categorias">
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src="https://scontent.fmty1-1.fna.fbcdn.net/v/t1.0-9/76710726_2391285641088145_5473722015280005120_o.jpg?_nc_cat=111&ccb=2&_nc_sid=8bfeb9&_nc_eui2=AeGee5twsDA6WY9qDJuuky0JlVlBCeFjnIWVWUEJ4WOchRhIXW8MGHa-Uj7qLQJdbOU&_nc_ohc=DWXVQbNhpUsAX8wh5JQ&_nc_ht=scontent.fmty1-1.fna&oh=dfe112b6285c490e964661f081c5f806&oe=5FC3E441" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Alitas</center>
				  </div>
				</div>
			</div>
			<div class="col-4 categorias">
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src="https://scontent.fmty1-1.fna.fbcdn.net/v/t1.0-9/81373227_2429187320631310_3413772644040835072_o.jpg?_nc_cat=110&ccb=2&_nc_sid=a26aad&_nc_eui2=AeHIIb-Rx4Wm9XUgjd36PI5i9zcn5mP5J373NyfmY_knfqxDP5f1tBScx7HJsFMAVC8&_nc_ohc=qwTPyc9QcvcAX8QeBjB&_nc_ht=scontent.fmty1-1.fna&oh=eae08044828553596a118057b433aa35&oe=5FC42162" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Tenders</center>
				  </div>
				</div>
			</div>
			<div class="col-4 categorias">
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src="https://scontent.fmty1-1.fna.fbcdn.net/v/t1.0-9/78151890_2397782743771768_2052173354424598528_n.jpg?_nc_cat=111&ccb=2&_nc_sid=a26aad&_nc_eui2=AeGaXl0_UzpPIifIZSYJSfpsxUya2Ti01zPFTJrZOLTXM_9tqrdcbSZpIlBff2MaaUQ&_nc_ohc=foVqC8ppL_QAX9QuoEi&_nc_ht=scontent.fmty1-1.fna&oh=495f801807f7dbfc9072fcce3d4db88a&oe=5FC1E47F" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Complementos</center>
				  </div>
				</div>
			</div>
			<div class="col-4 categorias">
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393">
				  <img src="https://scontent.fmty1-1.fna.fbcdn.net/v/t1.0-9/76710860_2395000514049991_1476014628516397056_o.jpg?_nc_cat=110&ccb=2&_nc_sid=a26aad&_nc_eui2=AeHbJeyHY1wJBvY7ZuJQTx7jq24soKn-8JOrbiygqf7wk77_7f7i9VUodeak76jA2JE&_nc_ohc=QDCz-7xWHxwAX_9Nzlq&_nc_ht=scontent.fmty1-1.fna&oh=4e018eb9efbc4441b1c692618488763f&oe=5FC38EE7" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Otros Platillos</center>
				  </div>
				</div>
			</div>
			<div class="col-4 categorias">
				<div class="card" style="border: none; border-radius: 7px; background-color: #E7E393;">
				  <img src="https://scontent.fmty1-1.fna.fbcdn.net/v/t1.0-9/64220199_2274087352807975_885873086820253696_n.jpg?_nc_cat=104&ccb=2&_nc_sid=8bfeb9&_nc_eui2=AeEAbcZjwOdHHVxbSfQ3WOoXBKGXBGE4qcwEoZcEYTipzHac1LLKNRzfKFOTgE1Qzww&_nc_ohc=pm_QmC10HMoAX9Lu5En&_nc_ht=scontent.fmty1-1.fna&oh=e5a97610a661d6778c1384361500163d&oe=5FC4C033" class="rounded" style="height: 100%; width: 100%; object-fit: contain">
				  <div style="font-size: 12px; padding: 10px 12px;">
				    <center>Bebidas</center>
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