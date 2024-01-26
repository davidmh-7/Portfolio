<?php
$servername = "localhost";
$username = "david";
$password = "12345678";


$link = @new mysqli($servername, $username, $password, "david");

if ($link->connect_errno) {
    die('Connect Error: ' . $link->connect_error);
}

if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
    $sql = "UPDATE supermercado SET Numero = Numero + 1 WHERE Seccion = '$seccion'";
    $link->query($sql);

    $sql = "SELECT Numero FROM supermercado WHERE Seccion = '$seccion'";
    $resultado = $link->query($sql);
    $fila = $resultado->fetch_assoc();
    echo $fila['Numero'];
} elseif (isset($_GET['cerrar'])) {

    $sql = "UPDATE supermercado SET Numero = 0";
    $link->query($sql);
    echo "Colas cerradas";
}

$link->close();
?>
