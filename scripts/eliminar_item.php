<?php 

session_start();
$i = $_GET['id'];

unset($_SESSION['carrito'][$i]);

header("Location: ../cart.php");

?>