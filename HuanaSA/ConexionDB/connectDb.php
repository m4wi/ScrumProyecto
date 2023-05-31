<?php
function conectarBD() {
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "Ferreteria";

    $conexion = new mysqli($server, $user, $pass, $db);

    if ($conexion->connect_errno) {
        die("Conexion fallida: " . $conexion->connect_errno);
    }

    return $conexion;
}
$query = "SELECT id_producto, pro_nombre, pro_precio FROM Producto";
$cn = conectarBD();
$rsp = $cn->query($query);
if ($rsp->num_rows > 0) {
    echo '<p> Hola </p>';
}
?>