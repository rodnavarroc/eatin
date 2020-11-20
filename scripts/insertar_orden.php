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

mysqli_query($conexion, $sql1);
######################################################################################################
$sql2 = "SELECT idpedido FROM pedidos WHERE pedido = '$datos_sql' AND numero_mesa= '$mesa' AND fecha_hora= '$fecha_hora'";
$resultado = mysqli_query($conexion, $sql2);
if (!mysqli_query($conexion, "SET a=1")) {
  printf("Errormessage: %s\n", mysqli_error($conexion));
}
$mostrar=mysqli_fetch_array($resultado);
print_r($mostrar);
$idpedido=$mostrar['idpedido'];
$_SESSION['idpedido'] = $idpedido;
unset($_SESSION['carrito']);
echo($idpedido);

###&idPedido=<?php echo($_GET['idpedido']);? >
mysqli_close($conexion);
header("Location: ../pago.php");
?>