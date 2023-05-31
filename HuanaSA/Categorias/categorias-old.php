

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATEGORIAS</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="img/logo2.svg" type="image/x-icon">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous" ></script>
</head>
<body>
    <header>
        <div class="header-item">
            <img src="img/logo.svg" alt="logo">
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
                <a class="go-venta" href="../Ventas/venta.php">Venta</a>
            </div>
        </div>
    </header>
    <div class="header">
        <div class="contenedor nav-header">
            <div class="barra">
                <div class="icon">
                    <button class="nav-toggle" aria-label="Abrir menú">
                        <i class="fas fa-bars"></i>
                      </button>
                    <a href="index.html" class="logo"> <!--redirecciona a la pagina principal-->
                        <h2 class="logo__nombre no-margin centrar-texto">CATEGORIAS</h2>
                    </a>
                </div>
                <nav class="navegacion">
                    <a href="index.html" class="navegacion__enlace">INICIO</a>
                    <a href="index.html" class="navegacion__enlace">SEGURIDAD INDUSTRIAL</a>
                    <a href="index.html" class="navegacion__enlace">FIJACIONES MECÁNICAS</a>
                    <a href="index.html" class="navegacion__enlace">HERRAMIENTAS</a>
                    <a href="index.html" class="navegacion__enlace">ABRASIVOS</a>
                    <a href="index.html" class="navegacion__enlace">QUÍMICOS</a>
                    <a href="index.html" class="navegacion__enlace">SOLDADURA</a>
                    <a href="index.html" class="navegacion__enlace">MANGUERAS</a>
                </nav>
                
            </div>
        </div>
    </div>



    <main class="contenedor">
        

        <div class="grid">
            <!--GG CAUSA OJALA ENTIEDAS MI MRD-->
            
                <div class="grafico--guantes no-padding graficos">
                    <p class="producto_nombre__one">LOS MEJORES<span class="producto_nombre-bold"> GUANTES</span></p>
                    <div>
                        <img src="img/Images-tranajo/guantes.png" alt="guantes">
                    </div>
                </div>
                 
                <div class="grafico--cascos no-padding graficos">
                    <p class="producto_nombre__two">CASCOS</p>
                    <div>
                        <img src="img/Images-tranajo/casco.png" alt="casco">
                    </div>
                </div>
             
                <div class="grafico--calzado no-padding graficos_down">
                     <p class="producto_nombre">GAFAS</p>
                     <div>
                        <img src="img/Images-tranajo/visor.png" alt="visor">
                    </div>
                </div>
            
             
                <div class="grafico--gafas no-padding graficos_down">
                    <p class="producto_nombre">FACIAL</p>
                    <div>
                        <img src="img/Images-tranajo/facial.png" alt="facial">
                    </div>
                </div>
             
                <div class="grafico--facial no-padding graficos_down" >
                    <p class="producto_nombre">CALZADO</p>
                    <div>
                        <img src="img/Images-tranajo/bota.png" alt="bota">
                    </div>
                </div>
                 
       
        </div>    
    </main>

    <div class="contenedor contenedor-article">
        <div>
            <p>SEGURIDAD INDUSTRIAL</p>
        </div>
        <!--Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
        <div>
            <P>QUE ES LO QUE ESTAS BUSCANDO</P>
        </div>
         <!--Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
        <div class="barra-contenido">
           <ul class="barra">
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Precio">Precio</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </li>
           
           
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Categoria del producto">Categoria del producto</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                </li>
           
           
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Favoritos">Favoritos</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                </li>
         
          
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Ordenar por">Ordenar por</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                </li>
        
          
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Descuentos">Descuentos</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                </li>
         
           
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Marca">Marca</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                </li>
         
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Color">Color</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                </li>
          
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Talla">Talla</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                </li>
           
                <li class="barra-list">
                    <select class="select-list" name="cars" id="cars">
                        <option value="Precio">Precio</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
              </li>
           </ul>
        </div>

        <!--Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
        <div class="grid-two">
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/grey-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Care Construction</h3>
                    <img class="producto_image" src="./img/yellow-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Industry Tools</h3>
                    <img class="producto_image" src="./img/black-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/red-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/grey-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Care Construction</h3>
                    <img class="producto_image" src="./img/yellow-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Industry Tools</h3>
                    <img class="producto_image" src="./img/black-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/red-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/grey-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Care Construction</h3>
                    <img class="producto_image" src="./img/yellow-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Industry Tools</h3>
                    <img class="producto_image" src="./img/black-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/red-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/grey-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Care Construction</h3>
                    <img class="producto_image" src="./img/yellow-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Industry Tools</h3>
                    <img class="producto_image" src="./img/black-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/red-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/grey-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Care Construction</h3>
                    <img class="producto_image" src="./img/yellow-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Industry Tools</h3>
                    <img class="producto_image" src="./img/black-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
            <div class="producto">
                <a href="producto.html" class="article-item">
                    <h3>Home elements</h3>
                    <img class="producto_image" src="./img/red-guante.png" alt="imagen camisa">
                    <div class="producto_informacion">
                        <p class="producto_name">Guantes</p>
                        <strong class="producto_description">Total Protection</strong>
                        <p class="producto_descuento">$25.9999</p> <p class="producto_price">$25.0000</p>
                        <div class="ranking">
                            <input type="radio" name="clr1" style="--cc:#ff9933">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        
     
        
    </div>

    <div class="contenedor contenedor_capitan">
        <div id="contenedor-descuento">

            <div class="contenedor-descuento__imagen">
                <img class="img-descuento" src="./img/guante-bottom.png" alt="imagen del guante xd">
            </div>
    
            <div class="contenedor-descuento__texto">
                <p class="descuento-orange">SOLO HOY 50%</p>
                <p>GUANTES DE SEGURIDAD</p>
                <p>INDUSTRIAL</p>
                <div class="price">
                    <p class="c-price">$200.000</p>
                    <p class="c2-price">$100.000</p>
                </div>
            </div>
        </div>
        
        
    </div>


    <!---SECCION DE SEGURIDAD INDUSTRIAL-->
    <div class="contenedor content_starck">
        <div  id="industrialPricipal">
            <h2>SEGURIDAD INDUSTRIAL</h2>
            <div class="contenedor-industrial">
                <div class="contenedor-seguridad-industral">
                    <div>
                        <h3>Proteccion Para Trabajo Seguro En Alturas</h3>
                        <ul class="list-seguridad-industrial">
                            <li><a href="#">adaptores y anclajes</a></li>
                            <li><a href="#">Arneses</a></li>
                            <li><a href="#">Ascendedores y Frenos</a></li>
                            <li><a href="#">Escalera</a></li>
                            <li><a href="#">Kitas para Altura</a></li>
                            <li><a href="#">Lineas de vidas portatiles</a></li>
                            <li><a href="#">adaptores y anclajes</a></li>
                        </ul>
    
                    </div>
                    <div>
                        <h3>Proteccion Para Trabajo Seguro En Alturas</h3>
                        <ul class="list-seguridad-industrial">
                            <li><a href="#">adaptores y anclajes</a></li>
                            <li><a href="#">Arneses</a></li>
                            <li><a href="#">Ascendedores y Frenos</a></li>
                            <li><a href="#">Escalera</a></li>
                            <li><a href="#">Kitas para Altura</a></li>
                            <li><a href="#">Lineas de vidas portatiles</a></li>
                            <li><a href="#">adaptores y anclajes</a></li>
                        </ul>
    
                    </div>
                   
                </div>
                <div class="contenedor-seguridad-industral">
                    <div>
                        <h3>Proteccion Para Trabajo Seguro En Alturas</h3>
                        <ul class="list-seguridad-industrial">
                            <li><a href="#">adaptores y anclajes</a></li>
                            <li><a href="#">Arneses</a></li>
                            <li><a href="#">Ascendedores y Frenos</a></li>
                            <li><a href="#">Escalera</a></li>
                            <li><a href="#">Kitas para Altura</a></li>
                            <li><a href="#">Lineas de vidas portatiles</a></li>
                            <li><a href="#">adaptores y anclajes</a></li>
                        </ul>
    
                    </div>
                    <div>
                        <h3>Proteccion Para Trabajo Seguro En Alturas</h3>
                        <ul class="list-seguridad-industrial">
                            <li><a href="#">adaptores y anclajes</a></li>
                            <li><a href="#">Arneses</a></li>
                            <li><a href="#">Ascendedores y Frenos</a></li>
                            <li><a href="#">Escalera</a></li>
                            <li><a href="#">Kitas para Altura</a></li>
                            <li><a href="#">Lineas de vidas portatiles</a></li>
                            <li><a href="#">adaptores y anclajes</a></li>
                        </ul>
    
                    </div>
                   
                </div>
            </div>
            
        </div>
        
    </div>
    <footer class="pie">
        <p>Todos los derechos reservados</p>
    </footer>
</body>
</html>