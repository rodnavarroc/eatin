<?php


if (!isset($fecha1)){
	$fecha1 = date("Y-m-d");
}
else{
	$fecha1 = $_POST['fechaInicial']." 00:00:00";
}
if(!isset($fecha2)){
	$fecha2 = date("Y-m-d");
}
else{
	$fecha2 = $_POST['fechaFinal']." 23:59:59";
}
$fecha1Format = explode(" ", $fecha1);
$fecha2Format = explode(" ", $fecha2);
$conexion=mysqli_connect("localhost", "root", "", "eatin");
$mysqli = new mysqli("localhost", "root", "", "eatin");

$sql = "SELECT * FROM pedidos WHERE fecha_hora BETWEEN '$fecha1' AND '$fecha2'";
$res = mysqli_query($mysqli,$sql);
###SELECT * FROM pedidos WHERE fecha BETWEEN '2021-05-11 11:21:57' AND '2021-05-11 11:22:43'
$pagoEfectivo = 0;
$pagoTarjeta = 0;
$totalPedidos = 0;
$merged = array();
$ventas = 0;

while ($fila = mysqli_fetch_array($res))
{
    if($fila['tipo_pago'] == "Efectivo") $pagoEfectivo++;
    if($fila['tipo_pago'] == "Tarjeta") $pagoTarjeta++;
    $ventas += $fila['total'];
    $totalPedidos++;

    $pedido=unserialize($fila['pedido']);
    $longitud=count($pedido);
    for ($j=0; $j < $longitud; $j++) 
    {
        array_push($merged,$pedido[$j]['idPlatillo']);
    }
}

$merged = array_count_values($merged);

session_start();
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
	
	<div class="container"  style="padding-top: 100px;">
		<p style="font-family: News Cycle; padding: 5px 10px; font-size: 20px; background-color: #F4C95D; color: #854D27; border-radius: 7px;"><i class="fas fa-chart-pie"></i>&nbsp;Reporte de ventas</p>
		<!-- datepicker -->
		<form  action = "stats.php" method ="POST">
			<table width="100%" >
				<tr>
					<th> <p>Fecha inicial</p> </th>
					<th> <p>Fecha final</p> </th>
				</tr>
				<tr>
					<td><input type="date" name="fechaInicial" min="2020-01-01" max="2030-12-31" value="<?php echo($fecha1Format[0]) ?>"></td>
					<td><input type="date" name="fechaFinal" min="2020-01-01" max="2030-12-31" value="<?php echo($fecha2Format[0]) ?>"></td>
				</tr>
			</table>
			<br>
			<input type = "submit" value = "Filtrar">
		</form>
		<br><br>
		<!-- fin del datepicker-->
        <p><b>Ventas del día</b></p>
        <p class="p-3 bg-light">Se han cobrado <b style="color: darkred;">$<?php echo($ventas)?> MXN</b> en <?php echo($totalPedidos)?> pedidos.</p>
		
		<p><b>Formas de pago</b></p>
        <canvas id="tipoPagoChart" width="600" height="500"></canvas>

        <br>
        <p><b>Pedidos por platillo</b></p>

        <table class="table">
        <thead>
            <tr>
                <td><b>Platillo</b></td>
                <td><b>Cantidad</b></td>
            </tr>
        </thead>
        <tbody>
        <?php
        
        foreach ($merged as $key => $value) {
            ?><tr><?php
            $sql2="SELECT * FROM menu WHERE idplatillo = '$key'";
            $result2=mysqli_query($conexion,$sql2);
            $mostrar2=mysqli_fetch_array($result2);
            echo("<td>".$mostrar2['nombre_platillo']."</td>");
            echo("<td><center>".$value."</center></td>");
            ?></tr><?php
          }

        ?>
        <tbody>
        </table>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
    var oilCanvas = document.getElementById("tipoPagoChart");

    Chart.defaults.global.defaultFontFamily = "Epilogue";
    Chart.defaults.global.defaultFontSize = 16;

    var oilData = {
        labels: [
            "Tarjeta (<?php echo(round($pagoTarjeta/$totalPedidos*100,2))?>%)",
            "Efectivo (<?php echo(round($pagoEfectivo/$totalPedidos*100,2))?>%)"
        ],
        datasets: [
            {
                data: [<?php echo($pagoTarjeta/$totalPedidos)?>, <?php echo($pagoEfectivo/$totalPedidos)?>],
                backgroundColor: [
                    "#C5D93F",
                    "#E9F1B7"
                ]
            }]
    };

    var pieChart = new Chart(oilCanvas, {
    type: 'pie',
    data: oilData
    });
</script>

</html>