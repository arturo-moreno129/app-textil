<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telas Eve</title>
    <link rel="stylesheet" href="estilos.css" />
</head>

<body>
    <header>
        <div class="logo">TELAS EVE <span>La mejor solucion textil</span></div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">INICIO</a></li>
                <li><a href="#">TOTEBAGS</a></li>
                <li><a href="#">BOLSAS DE JARETA</a></li>
                <li><a href="#">PAPEL CHINA</a></li>
                <li><a href="#">MAS VENDIDOS</a></li>
                <li><a href="#">TODOS LOS PRODUCTOS</a></li>
            </ul>
        </nav>
        <div class="icons">
            <!--<a href="#"><img src="assets/search.png" alt="Buscar" /></a>-->
            <a href="#"><img src="assets/cart.png" alt="Carrito" /></a>
        </div>
    </header>

    <section class="hero">
        <img src="assets/banner.jpeg" alt="Banner principal" />
        <a href="#" class="hero-button">MÁS VENDIDOS</a>
    </section>

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




    <footer>
        <!--<section class="descripcion">
            <p>Soluciones de packaging para empresas</p>
        </section>-->
        <a href="https://wa.me/2462085244?text=Hola,%20me%20gustaría%20obtener%20más%20información."
            target="_blank" class="whatsapp-float">
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp">
        </a>

        <!-- Estilos del botón flotante -->
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
            }

            .whatsapp-float img {
                margin-top: 15px;
                width: 30px;
                height: 30px;
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