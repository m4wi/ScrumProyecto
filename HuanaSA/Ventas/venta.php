<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ingresar.css">
    <title>Ventas</title>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <div class="container">
            <h2>Datos de Venta</h2>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="form-item">
                    <label for="dni">DNI: </label>
                    <input type="text" name="dni">
                </div>
                <div class="form-item">
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre">
                </div>
                <div class="form-item">
                    <label for="direccion">Dirección: </label>
                    <input type="text" name="direccion">
                </div>
                <div class="form-item">
                <label for="producto">Producto</label>
                    <select name="producto">
                        <option value="1">Cemento Yura</option>
                        <option value="2">Ladrillo King Kong</option>
                        <option value="3">Calamina de Metal</option>
                        <option value="4">Calamina de Plástico</option>
                        <option value="5">Hoja Sierra Bimetalica</option>
                        <option value="6">Barra Corrugada</option>
                        <option value="7">Tubería PVC Agua</option>
                        <option value="8">Clavo para Cemento</option>
                        <option value="9">Pegamento Terokal</option>
                        <option value="10">Lija de Agua</option>
                        <option value="11">Escalera Doméstica</option>
                        <option value="12">Perno Hexagonal</option>
                        <option value="13">Tubería PVC Desagüe</option>
                        <option value="14">Cinta Métrica</option>
                        <option value="15">Sierra Metálica</option>
                        <option value="16">Alicate Universal</option>
                        <option value="17">Llave Inglesa</option>
                        <option value="18">Martillo Carpintero</option>
                        <option value="19">Destornillador Estrella</option>
                        <option value="20">Broca Zanco</option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="cantidad">Cantidad: </label>
                    <input type="text" name="cantidad">
                </div>
                <div class="form-item submit">
                    <input type="submit" value="Guardar" class="form-boton">
                </div>
            </form>
        </div>
    </main>
    <?php include 'footer.php' ?>
</body>
</html>

<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "Ferreteria";

    $conexion = new mysqli($server, $user, $pass, $db);

    if($conexion->connect_errno){
        die("Conexion fallida" . $conexion->connect_errno);
    }
    else{
        //Recibir
        $client_dni = $_POST["dni"];
        $client_nombre = $_POST["nombre"];
        $client_direccion = $_POST["direccion"];
        $venta_producto = $_POST["producto"];
        $venta_cantidad = $_POST["cantidad"];

        $query_price_product = "SELECT pro_precio FROM Producto WHERE id_producto = ". $venta_producto;
        $rsp_price = mysqli_query($conexion, $query_price_product)->fetch_assoc();

        if ($rsp_price) {
            $subtotal = $rsp_price['pro_precio'] * $venta_cantidad;
            $monto_total = $subtotal * 0.18;


            $insertar_clientes = "INSERT INTO Cliente (Cli_dni, Cli_nombre, Cli_direccion) VALUES('$client_dni', '$client_nombre', '$client_direccion')";
            $rsp_client = mysqli_query($conexion, $insertar_clientes);

            $query_sale = "INSERT INTO Venta (Ven_subtotal, id_cliente) VALUES ('$subtotal','$client_dni')";
            $rsp_product = mysqli_query($conexion, $query_sale);

            $id_venta = mysqli_insert_id($conexion);

            $query_detail_sale = "INSERT INTO DetalleVenta (Dev_monto, Dev_cantidad, id_Venta, id_Producto) VALUES('$monto_total','$venta_cantidad','$id_venta','$venta_producto')";
            $rsp_detail_sale = mysqli_query($conexion, $query_detail_sale);

            //Cerrar conexion
        } else {
            echo "no se encontro producto";
        }
    }
    mysqli_close(($conexion));
?>
