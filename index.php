<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telas Eve</title>
    <link rel="stylesheet" href="estilos.css" />
    <link rel="shortcut icon" href="assets/logo-icono.png" type="image/x-icon" id="favicon">
</head>

<body>
    <header>
        <div class="logo">
            <img src="assets/logo_largo.png" alt="">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">INICIO</a></li>
                <li><a href="#">TOTEBAGS</a></li>
                <!--<li><a href="#">BOLSAS DE JARETA</a></li>
                <li><a href="#">PAPEL CHINA</a></li>
                <li><a href="#">MAS VENDIDOS</a></li>
                <li><a href="#">TODOS LOS PRODUCTOS</a></li>-->
            </ul>
        </nav>
        <div class="icons">
            <!--<a href="#"><img src="assets/search.png" alt="Buscar" /></a>-->
            <a href="#"><img src="assets/cart.png" alt="Carrito" /></a>
        </div>
    </header>

    <section class="hero">
        <img src="assets/prueba_baner.webp" alt="Banner principal" />
        <a href="#" class="hero-button">MÁS VENDIDOS</a>
    </section>

    <div class="container">
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
        <div class="product-card">
            <div class="image-container">
                <img src="assets/bolsa.webp" alt="Totebag" class="main-image" />
                <img src="assets/bolsa2.webp" alt="Totebag Hover" class="hover-image" />
            </div>
            <div class="product-info">
                <h3>TOTEBAG CHICA</h3>
                <p>Desde $ 2,810.00</p>
            </div>
        </div>
    </div>





    <footer>
        <!--<section class="descripcion">
            <p>Soluciones de packaging para empresas</p>
        </section>-->
        <!-- Botón flotante con tooltip -->
        <!-- Contenedor invisible que actúa como botón -->
        <div class="whatsapp-float" onclick="window.open('https://wa.me/2212016363?text=Hola,%20me%20gustaría%20obtener%20más%20información.', '_blank')">
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp">
            <span class="tooltip-text">¡Contáctanos!</span>
        </div>

        <!-- Estilos -->
        <style>
            .whatsapp-float {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 20px;
                right: 20px;
                background-color: #25D366;
                color: #FFF;
                border-radius: 50%;
                text-align: center;
                font-size: 30px;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                z-index: 1000;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }

            .whatsapp-float img {
                width: 30px;
                height: 30px;
            }

            .tooltip-text {
                visibility: hidden;
                background-color: #fff;
                color: #000;
                text-align: center;
                padding: 5px 10px;
                border-radius: 20px;
                position: absolute;
                right: 70px;
                white-space: nowrap;
                font-size: 14px;
                box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
                transition: 0.3s;
            }

            .whatsapp-float:hover .tooltip-text {
                visibility: visible;
                opacity: 1;
            }
        </style>


    </footer>
    <script>
        function toggleMenu() {
            document.getElementById("navMenu").classList.toggle("show");
        }
    </script>

</body>

</html>