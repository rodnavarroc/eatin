<?php

session_start();

$conexion=mysqli_connect("localhost", "root", "", "eatin");
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
  }

$mysqli = new mysqli("localhost", "root", "", "eatin");

$idModificar = $_GET['idModificar'];
$statusObjetivo=$_GET['estatus'];
$estatusActual=intval($_GET['estatusActual']);

### son 4 estados de "status" En Cola, En Preparacion, Listo, Entregado.

if($statusObjetivo==0){
    $estatusActual=strval($estatusActual-1);
}
else{
    $estatusActual=strval($estatusActual+1);
}

$sql1="UPDATE pedidos SET estatus = $estatusActual WHERE idpedido='$idModificar'";

mysqli_query($conexion, $sql1);

mysqli_close($conexion);
header("Location: ../admin/index.php");
?>