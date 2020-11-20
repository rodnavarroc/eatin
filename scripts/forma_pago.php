<?php

session_start();

$conexion=mysqli_connect("localhost", "root", "", "eatin");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
  }

$mysqli = new mysqli("localhost", "root", "", "eatin");

$metodoPago = $_GET['metodoPago'];
$idpedido=$_GET['idpedido'];


$sql1="UPDATE pedidos SET tipo_pago = $metodoPago WHERE idpedido='$idpedido'";

mysqli_query($conexion, $sql1);

mysqli_close($conexion);
header("Location: ../index.php");
?>