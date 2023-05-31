<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ingresar.css">
    <link rel="stylesheet" href="tabla.css">
    <title>Ventas Totales</title>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <?php
        // Realiza la consulta para obtener los datos

        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "Ferreteria";

        $conexion = new mysqli($server, $user, $pass, $db);

        $query = "SELECT Venta.Ven_fecha, Cliente.Cli_nombre, Producto.pro_nombre, DetalleVenta.Dev_cantidad, DetalleVenta.Dev_monto FROM DetalleVenta JOIN Venta ON DetalleVenta.id_Venta = Venta.id_venta JOIN Producto ON DetalleVenta.id_Producto = Producto.id_producto JOIN Cliente ON Venta.id_cliente = Cliente.Cli_dni";

        $resultado = mysqli_query($conexion, $query);

        // Verifica si hay filas devueltas
        if(mysqli_num_rows($resultado) > 0) {
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nombre del Cliente</th>
                        <th>Nombre del Producto</th>
                        <th>Cantidad</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Itera sobre los resultados y muestra cada fila en la tabla
                    while($fila = mysqli_fetch_assoc($resultado)) {
                        ?>
                        <tr>
                            <td><?php echo $fila['Ven_fecha']; ?></td>
                            <td><?php echo $fila['Cli_nombre']; ?></td>
                            <td><?php echo $fila['pro_nombre']; ?></td>
                            <td><?php echo $fila['Dev_cantidad']; ?></td>
                            <td><?php echo $fila['Dev_monto']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "No se encontraron resultados.";
        }

        // Liberar memoria del resultado y cerrar la conexión
        mysqli_free_result($resultado);
        mysqli_close($conexion);
        ?>
    </main>
    <?php include 'footer.php' ?>
</body>
</html>