<!DOCTYPE html>
<html>
<head>
    <title>Ingresar información de cliente</title>
    <link rel="stylesheet" href="ingresar.css">
</head>
<body>
    <header>
            <div class="header-item">
                <img src="../img/logo.svg" alt="logo">
            </div>
            <div class="header-item">
                <nav>
                    <select class="select-list" name="cars" id="cars">
                        <option value="volvo">TODAS LAS CATEGORIAS</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                    <input type="text" placeholder="¿Que estas buscando hoy?">
                </nav>
            </div>
            <div class="header-item">
                <p>Hola,</p>
                <p>Carlos Perez </p>
            </div>
            <div class="header-item">
                <div class="header-services">
                </div>
            </div>
    </header>
    <main>
        <div class="container">
            <h2>Ingresar información</h2>
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
                        <option value="Casco">Casco</option>
                        <option value="Guantes" selected="selected">Guantes</option>
                        <option value="Gafas de protección">Gafas de protección</option>
                        <option value="Escalera de mano">Escalera de mano</option>
                    </select>
                </div>
                <div class="form-item submit">
                    <input type="submit" value="Guardar" class="form-boton">
                </div>
            </form>
        </div>
    </main>
    <footer class="pie">
		<p>Todos los derechos reservados</p>
	</footer>
</body>
</html>

<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "FerreteriaHuana";

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
        $monto_total; // id de venta

        //subtotal - id - cliente


        //Productos
        $prod_dni = $clie_dni;
        $prod_nombre = $_POST["producto"];
        $prod_precio = 1500.2;
        //Consultar a insertar Clientes
        $insertar_clientes = "INSERT INTO clientes(clie_dni, clie_nombre, clie_direccion) VALUES('$clie_dni', '$clie_nombre', '$clie_direccion')";
        //Consultar a ingresar Productos
        $insertar_productos = "INSERT INTO productos(Prod_Id, Prod_Nombre, Prod_Precio) VALUES('$prod_dni', '$prod_nombre', '$prod_precio')";
        //Ejecutar
        $resultado_clie = mysqli_query($conexion, $insertar_clientes);
        $resultado_prod = mysqli_query($conexion, $insertar_productos);
        if(!$resultado_clie){
            echo 'Error al registrarse clientes';
        }
        else{
            echo "Registro clientes exitoso";
        }
        if(!$resultado_prod){
            echo 'Error al registrarse clientes';
        }
        else{
            echo "Registro clientes exitoso";
        }
        //Cerrar conexion
        mysqli_close(($conexion));
    }
?>