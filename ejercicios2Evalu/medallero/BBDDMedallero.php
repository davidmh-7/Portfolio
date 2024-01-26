<?php

$servername = "localhost";
$username = "david";
$password = "12345678";

// Conexión a la base de datos:
$link = @new mysqli($servername, "david", "12345678", "david");

if ($link->connect_errno) {

    die('Connect Error: ' . $link->connect_error);

}
// Consulta
// $Comunidad =$_REQUEST["medallero"];
$sql = "SELECT * from medallero";
$resultado = $link->query($sql); 
$filas=$resultado->num_rows;


for ($i=0;$i<$filas;$i++){

    $fila = mysqli_fetch_array($resultado);
    $miArray[$i]= array("Pais"=>utf8_encode($fila["Pais"]),"Oro"=>$fila["Oro"],"Plata"=>$fila["Plata"],"Bronce"=>$fila["Bronce"]);

}
echo  json_encode($miArray);
mysqli_close($link);
?>

