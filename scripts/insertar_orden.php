<?php

session_start();

$conexion=mysqli_connect("localhost", "root", "", "eatin");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
  }

$mysqli = new mysqli("localhost", "root", "", "eatin");
#################### fecha y hora MEXICO
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_hora = date("Y-m-d H:i:s");
###################

################ manda en codigo alien a la db, luego usa "unserialize" para mandarlo otra vez como el valor de SESSION
$datos_sql = (serialize($_SESSION['carrito']));
$mesa = $_SESSION['mesa'];
$total = $_GET['costo'];
################

$sql1 = "INSERT INTO pedidos (numero_mesa, pedido, total, pagado, estatus, fecha_hora) VALUES ('$mesa', '$datos_sql', '$total', '0', '0', '$fecha_hora')";

### son 4 estados de "status" En Cola, En Preparacion, Listo, Entregado.

if (mysqli_query($conexion, $sql1)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conexion);
  }

mysqli_close($conexion);
header("Location: ../pago.php");
?>