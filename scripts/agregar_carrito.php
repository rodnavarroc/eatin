<?php 

session_start();

$idplatillo = $_GET['id'];

if(isset($_POST['salsa'])) { $extra_salsa = $_POST['salsa']; } else { $extra_salsa = 0; }
if(isset($_POST['papas'])) { $extra_papas = $_POST['papas']; } else { $extra_papas = 0; }
if(isset($_POST['comentarios_extra'])) { $comentarios = $_POST['comentarios_extra']; } else { $comentarios = ""; }
## [sesion][posición][columna a recuperar]
$_SESSION['carrito'][] = array(
	
	"idPlatillo" => $idplatillo,
	"extra_salsa" => $extra_salsa,
	"extra_papas" => $extra_papas,
	"comentarios" => $comentarios

);

header("Location: ../index.php");

?>