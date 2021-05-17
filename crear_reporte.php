<?php

$fecha1 = $_GET['fInicio'];
$fecha2 = $_GET['fFin'];

$conexion=mysqli_connect("localhost", "root", "", "eatin");
$mysqli = new mysqli("localhost", "root", "", "eatin");
$sql = "SELECT * FROM pedidos WHERE fecha_hora BETWEEN '$fecha1' AND '$fecha2'";
$res = mysqli_query($mysqli,$sql);

$titles = array("num_pedido","platillo","salsa","papas","comentarios","total","tipo_pago","fecha_hora");
$merged = array();
$fp = fopen('reporte.csv', 'w');

while ($fila = mysqli_fetch_array($res))
{   
    $pedido=unserialize($fila['pedido']);
    $longitud=count($pedido);
    for ($j=0; $j < $longitud; $j++) 
    {
        $consulta="SELECT * FROM menu WHERE idplatillo = ".$pedido[$j]['idPlatillo'];
        $result=mysqli_query($conexion,$consulta); $mostrar=mysqli_fetch_array($result);

        $consulta2="SELECT * FROM extras WHERE idextra = ".$pedido[$j]['extra_salsa'];
        $result2=mysqli_query($conexion,$consulta2); $mostrar2=mysqli_fetch_array($result2);
        
        $consulta3="SELECT * FROM extras WHERE idextra = ".$pedido[$j]['extra_papas'];
        $result3=mysqli_query($conexion,$consulta3); $mostrar3=mysqli_fetch_array($result3);

        $array_pedido = array(
            $fila['idpedido'],
            $mostrar['nombre_platillo'],
            $mostrar2['nombre_extra'],
            $mostrar3['nombre_extra'],
            $pedido[$j]['comentarios'],
            $fila['total'],
            $fila['tipo_pago'],
            $fila['fecha_hora']
        ); 

        array_push($merged,$array_pedido);
    }

    echo("<br>");
}

fputcsv($fp,$titles);

foreach ($merged as $campos) {
    fputcsv($fp, $campos);
}

fclose($fp);

header("Location: reporte.csv");

?>