<?php

$servername = "localhost";
$username = "david";
$password = "12345678";

// ConexiÃ³n a la base de datos:
$link = @new mysqli($servername,$username ,$password, "david");

if ($link->connect_errno) {

    die('Connect Error: ' . $link->connect_error);

}
// Consulta
// $Comunidad =$_REQUEST["medallero"];
$sql = "SELECT * from supermercado";
$resultado = $link->query($sql);
$filas=$resultado->num_rows;


for ($i=0;$i<$filas;$i++){

    $fila = mysqli_fetch_array($resultado);
    $miArray[$i]= array("Seccion"=>utf8_encode($fila["Seccion"]),"Numero"=>$fila["Numero"]);

}
echo  json_encode($miArray);
mysqli_close($link);
?>
