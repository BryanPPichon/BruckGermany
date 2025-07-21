<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        require_once("head.php");
        require_once("tracking.php");
    ?>
</head>

<body>
    <?php
        require_once("header.php");
    ?>
    <section id="products" class="products-section">
        <div class="container-fluid d-flex flex-row" style="width:100vw;max-width:100vw;">
            <!-- Contador de slides fijo a la izquierda -->
            <div class="slide-counter-container">
                <span id="slide-counter">01</span>
            </div>
            <!-- Slides container a la derecha -->
            <div class="slides-wrapper">
                <!-- Título centrado - Movido arriba de todos los slides -->
                <div class="row title-row">
                    <div class="col-12">
                        <h1 class="product-title"><img src="img/Bruck_icon.png" alt="Bruck Icon" class="bruck-icon">
                            NUESTRAS AUTOPARTES</h1>
                    </div>
                </div>
                <div class="slides-container">
                    <!-- Slide inicial - Presentación -->
                    <div class="product-slide intro-slide" id="slide-0">
                        <div class="row align-items-center min-vh-100">
                            <!-- Imagen de la izquierda -->
                            <div class="col-auto p-0">
                                <div class="intro-image-container">
                                    <img src="img/0nuestros-productos.png" alt="Nuestros Productos"
                                        class="img-fluid intro-main-image">
                                </div>
                            </div>

                            <!-- Contenido de la derecha -->
                            <div class="col d-flex align-items-center">
                                <div class="intro-content">
                                    <h2 class="intro-title">CONOCE<br>NUESTROS PRODUCTOS</h2>
                                    <p class="intro-subtitle">"Innovations for driver safety"</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Primera sección - Colisión e Interiores -->
                    <div class="product-slide" id="slide-1">
                        <div class="row align-items-center min-vh-100">
                            <!-- Imagen de la izquierda -->
                            <div class="col-auto p-0">
                                <div class="product-image-container">
                                    <img src="img/Colision_Interiores.png" alt="Colisión e Interiores"
                                        class="img-fluid product-main-image">
                                </div>
                            </div>

                            <!-- Contenido de la derecha -->
                            <div class="col d-flex align-items-center">
                                <div class="product-content">
                                    <div class="product-content-card">
                                        <h2 class="product-card-title">COLISIÓN E INTERIORES</h2>

                                        <p class="product-description">
                                            Nuestras autopartes de colisión e interiores están diseñadas con
                                            los mejores materiales, altos estándares de calidad y están
                                            homologadas con equipo original para garantizar su ensamblaje.
                                        </p>

                                        <div class="product-buttons">
                                            <button class="btn btn-outline-light btn-conoce"
                                                onclick="window.open('https://catalogo.bruck.com.mx/Search/Index?q=COLISION&ms=Index', '_blank')">Conoce
                                                más</button>
                                            <button class="btn btn-danger btn-descargar"
                                                onclick="window.open('pdf/CAT_COLISION_2025.pdf', '_blank')">Descargar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Segunda sección - Electrónico -->
                    <div class="product-slide" id="slide-2">
                        <div class="row align-items-center min-vh-100">
                            <!-- Imagen de la izquierda -->
                            <div class="col-auto p-0">
                                <div class="product-image-container">
                                    <img src="img/Electrico.png" alt="Electrónico" class="img-fluid product-main-image">
                                </div>
                            </div>

                            <!-- Contenido de la derecha -->
                            <div class="col d-flex align-items-center">
                                <div class="product-content">
                                    <div class="product-content-card">
                                        <h2 class="product-card-title">ELÉCTRICO</h2>

                                        <p class="product-description">
                                            Nuestras autopartes de colisión e interiores están diseñadas con
                                            los mejores materiales, altos estándares de calidad y están
                                            homologadas con equipo original para garantizar su ensamblaje.
                                        </p>

                                        <div class="product-buttons">
                                            <button class="btn btn-outline-light btn-conoce"
                                                onclick="window.open('https://catalogo.bruck.com.mx/Search/Index?q=ELECTRICO&ms=Index', '_blank')">Conoce
                                                más</button>
                                            <button class="btn btn-danger btn-descargar"
                                                onclick="window.open('pdf/CAT_ELECTRICO_2025.pdf', '_blank')">Descargar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tercera sección - Frenos y Clutch -->
                    <div class="product-slide" id="slide-3">
                        <div class="row align-items-center min-vh-100">
                            <!-- Imagen de la izquierda -->
                            <div class="col-auto p-0">
                                <div class="product-image-container">
                                    <img src="img/Frenos_clutch.png" alt="Frenos y Clutch"
                                        class="img-fluid product-main-image">
                                </div>
                            </div>

                            <!-- Contenido de la derecha -->
                            <div class="col d-flex align-items-center">
                                <div class="product-content">
                                    <div class="product-content-card">
                                        <h2 class="product-card-title">FRENOS Y CLUTCH</h2>

                                        <p class="product-description">
                                            Nuestras autopartes de colisión e interiores están diseñadas con
                                            los mejores materiales, altos estándares de calidad y están
                                            homologadas con equipo original para garantizar su ensamblaje.
                                        </p>

                                        <div class="product-buttons">
                                            <button class="btn btn-outline-light btn-conoce"
                                                onclick="window.open('https://catalogo.bruck.com.mx/Search/Index?q=FRENOS%20Y%20CLUTCH&ms=Index', '_blank')">Conoce
                                                más</button>
                                            <button class="btn btn-danger btn-descargar"
                                                onclick="window.open('pdf/CAT_FRENOS_2025.pdf', '_blank')">Descargar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cuarta sección - Motor -->
                    <div class="product-slide" id="slide-4">
                        <div class="row align-items-center min-vh-100">
                            <!-- Imagen de la izquierda -->
                            <div class="col-auto p-0">
                                <div class="product-image-container">
                                    <img src="img/motor.png" alt="Motor" class="img-fluid product-main-image">
                                </div>
                            </div>

                            <!-- Contenido de la derecha -->
                            <div class="col d-flex align-items-center">
                                <div class="product-content">
                                    <div class="product-content-card">
                                        <h2 class="product-card-title">MOTOR</h2>

                                        <p class="product-description">
                                            Nuestras autopartes de colisión e interiores están diseñadas con
                                            los mejores materiales, altos estándares de calidad y están
                                            homologadas con equipo original para garantizar su ensamblaje.
                                        </p>

                                        <div class="product-buttons">
                                            <button class="btn btn-outline-light btn-conoce"
                                                onclick="window.open('https://catalogo.bruck.com.mx/Search/Index?q=MOTOR&ms=Index', '_blank')">Conoce
                                                más</button>
                                            <button class="btn btn-danger btn-descargar"
                                                onclick="window.open('pdf/CAT_MOTOR_2025.pdf', '_blank')">Descargar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quinta sección - Suspensión y Dirección -->
                    <div class="product-slide" id="slide-5">
                        <div class="row align-items-center min-vh-100">
                            <!-- Imagen de la izquierda -->
                            <div class="col-auto p-0">
                                <div class="product-image-container">
                                    <img src="img/Suspension_direccion.png" alt="Suspensión y Dirección"
                                        class="img-fluid product-main-image">
                                </div>
                            </div>

                            <!-- Contenido de la derecha -->
                            <div class="col d-flex align-items-center">
                                <div class="product-content">
                                    <div class="product-content-card">
                                        <h2 class="product-card-title">SUSPENSIÓN Y DIRECCIÓN</h2>

                                        <p class="product-description">
                                            Nuestras autopartes de colisión e interiores están diseñadas con
                                            los mejores materiales, altos estándares de calidad y están
                                            homologadas con equipo original para garantizar su ensamblaje.
                                        </p>

                                        <div class="product-buttons">
                                            <button class="btn btn-outline-light btn-conoce"
                                                onclick="window.open('https://catalogo.bruck.com.mx/Search/Index?q=SUSPENSION&ms=Index', '_blank')">Conoce
                                                más</button>
                                            <button class="btn btn-danger btn-descargar"
                                                onclick="window.open('pdf/CAT_SUSPENSION_2025.pdf', '_blank')">Descargar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

        <!-- Esferas animadas 
        <div class="floating-sphere sphere-1">
            <img src="img/Esfera.png" alt="Esfera" class="sphere-image">
        </div>
        <div class="floating-sphere sphere-2">
            <img src="img/Esfera.png" alt="Esfera" class="sphere-image">
        </div>
        <div class="floating-sphere sphere-3">
            <img src="img/Esfera.png" alt="Esfera" class="sphere-image">
        </div>-->
    </section>

    <style>
    .products-section {
        background: linear-gradient(135deg, #1a2332 0%, #2d3748 50%, #1a2332 100%);
        position: relative;
        overflow: hidden !important;
        min-height: 100vh;
    }

    .title-row {
        position: relative;
        padding-top: 12vh;
        margin-bottom: -12vh;
    }

    .product-title {
        font-size: 1.3rem;
        font-weight: 500;
        text-transform: uppercase;
        color: white;
        text-align: center;
        margin: 0;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .product-title.show {
        opacity: 1;
    }

    .slides-container {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    .product-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        transform-origin: center center;
    }

    #slide-0 {
        z-index: 10;
        transform: scale(1);
        opacity: 1;
        position: relative; /* Asegura que no se superponga con otros slides */
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: stretch; /* Ocupa todo el alto */
    }

    #slide-0 .row.align-items-center {
        min-height: 100vh;
        height: 100vh;
        align-items: stretch !important;
        display: flex;
        flex-wrap: nowrap;
    }

    #slide-0 .col-auto.p-0,
    #slide-0 .col.d-flex.align-items-center {
        height: 100vh;
        display: flex;
        align-items: center;
    }

    #slide-0 .intro-image-container {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding-left: 0;
    }

    #slide-0 .intro-main-image {
        max-height: 80vh;
        width: auto;
        object-fit: contain;
    }

    #slide-0 .intro-content {
        width: 100%;
        padding: 0 5vw;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }

    #slide-1 {
        z-index: 5;
        transform: scale(0.5);
        opacity: 0;
    }

    #slide-2 {
        z-index: 5;
        transform: scale(0.5);
        opacity: 0;
    }

    #slide-3 {
        z-index: 5;
        transform: scale(0.5);
        opacity: 0;
    }

    #slide-4 {
        z-index: 5;
        transform: scale(0.5);
        opacity: 0;
    }

    #slide-5 {
        z-index: 5;
        transform: scale(0.5);
        opacity: 0;
    }

    #slide-6 {
        z-index: 5;
        transform: scale(0.5);
        opacity: 0;
    }

    .intro-image-container {
        position: relative;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        width: auto;
        padding-left: 5%;
    }

    .intro-main-image {
        height: 60vh;
        width: auto;
        object-fit: contain;
    }

    .intro-content {
        padding: 0 50px 0 50px;
        color: white;
        position: relative;
        z-index: 10;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        width: 100%;
    }

    .intro-title {
        font-size: 4rem;
        font-weight: 700;
        line-height: 1.1;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-family: var(--font-main);
        background: linear-gradient(90deg, #ffffff 0%, #ffffff 30%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        text-align: left;
    }

    .intro-subtitle {
        font-size: 1.8rem;
        color: rgba(255, 255, 255, 0.9);
        margin: 0;
        text-align: left;
        font-weight: 500;
        line-height: 35px;
    }

    .product-image-container {
        position: relative;
        height: 100vh;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        z-index: 10;
        width: auto;
        max-width: 680px;
        overflow: hidden;
    }

    .product-main-image {
        height: 78vh;
        width: auto;
        object-fit: cover;
        align-self: flex-end;
    }

    .rotated-amortiguadores {
        align-self: center;
        object-fit: contain;
    }

    .product-content {
        padding: 0 12% 0 20px;
        color: white;
        position: relative;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    @media (max-width: 1660px) {
        .intro-main-image {
            height: 20vh;
        }
        .intro-title {
            font-size: 3rem;
        }
    }

    @media (max-width: 1330px) {
        .intro-image-container {
            height: 40vh;
        }

        .intro-content {
            padding: 0 20px;
        }

        .product-main-image {
            height: 60vh;
        }

        .product-content {
            padding: 0 10% 0 10px;
        }
    }

    @media (max-width: 1280px) {

        .intro-image-container {
            height: 30vh;
        }

        .intro-content {
            padding: 0 10px;
        }
    }

    @media (max-width: 1050px) {
        .product-image-container {
            display: none;
        }

        .product-main-image {
            height: 50vh;
        }

        .product-content {
            padding: 5%;
        }
    }

    @media (max-width: 760px) {
        #slide-0 .row {
            display: flex;
        }
    }

    @media (max-width: 970px) {
        #slide-0 .row {
            min-height: 60vh;
            align-items: center !important;
            align-content: center;
        }

        .intro-image-container {
            height: auto;
            padding-left: 0;
            justify-content: center;
            width: 100%;
        }

        .intro-main-image {
            height: 28vh;
            margin: 0 auto;
            display: block;
        }

        .intro-content {
            align-items: left;
            width: 100%;
        }

        .intro-title {
            font-size: 2rem;
            text-align: left;
        }

        .intro-subtitle {
            font-size: 1.1rem;
            text-align: left;
        }
    }

    .product-content-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 80px;
        text-align: left;
        width: 100%;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    .product-card-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 30px;
        line-height: 100%;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: var(--font-main);
        background: linear-gradient(90deg, #ffffff 0%, rgb(50, 148, 187) 50%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: left;
    }

    .product-description {
        font-size: 1.5rem;
        line-height: 1.6;
        margin-bottom: 40px;
        color: rgba(255, 255, 255, 0.9);
        text-align: left;
    }

    .product-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: nowrap;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
    }

    .btn-conoce {
        background: rgb(255, 255, 255);
        border: 2px solid rgb(177, 177, 177);
        color: black;
        padding: 12px 20px;
        font-weight: 600;
        border-radius: 15px;
        transition: all 0.3s ease;
        font-size: 0.85rem;
        flex: 1;
        min-width: 120px;
        max-width: 180px;
        text-align: center;
        white-space: nowrap;
    }

    .btn-conoce:hover {
        background: rgba(255, 255, 255, 0.89);
        border-color: rgb(168, 168, 168);
        color: black;
        transform: translateY(-2px);
    }

    .btn-descargar {
        background: rgb(226, 62, 78);
        border: 2px solid rgb(168, 0, 17);
        color: white;
        padding: 12px 20px;
        font-weight: 600;
        border-radius: 15px;
        transition: all 0.3s ease;
        font-size: 0.85rem;
        flex: 1;
        min-width: 120px;
        max-width: 180px;
        text-align: center;
        white-space: nowrap;
    }

    .btn-descargar:hover {
        background: rgb(226, 62, 78);
        border-color: rgb(160, 0, 17);
        color: white;
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .product-content {
            padding: 40px 20px;
        }

        .product-content-card {
            padding: 40px 30px;
            max-width: 100%;
        }

        .product-card-title {
            font-size: 2rem;
        }

        .product-description {
            font-size: 1rem;
        }

        .product-buttons {
            gap: 10px;
        }

        .btn-conoce,
        .btn-descargar {
            padding: 10px 15px;
            font-size: 0.75rem;
            min-width: 100px;
            max-width: 150px;
        }

        .product-title {
            margin-top: 30px;
        }
    }

    @media (max-width: 576px) {
        .product-title {
            font-size: 1.2rem;
            top: 3%;
        }

        .product-buttons {
            gap: 8px;
        }

        .btn-conoce,
        .btn-descargar {
            padding: 8px 12px;
            font-size: 0.7rem;
            min-width: 80px;
            max-width: 120px;
        }
    }

    @media (max-width: 480px) {

        .btn-conoce,
        .btn-descargar {
            padding: 6px 10px;
            font-size: 0.65rem;
            min-width: 70px;
            max-width: 100px;
        }

        .product-buttons {
            gap: 6px;
        }
    }

    /* Responsive para intro slide */
    @media (max-width: 768px) {
        .intro-content {
            padding: 0 5% 0 3%;
        }

        .intro-title {
            font-size: 2.5rem;
        }

        .intro-subtitle {
            font-size: 1.2rem;
        }

        .intro-image-container {
            padding-left: 2%;
        }

        .intro-main-image {
            height: 18vh;
        }
    }

    @media (max-width: 576px) {
        .intro-title {
            font-size: 2rem;
        }

        .intro-subtitle {
            font-size: 1rem;
        }

        .intro-main-image {
            height: 40vh;
            display:none;
        }
    }

    .bruck-icon {
        height: 1em;
        width: auto;
        vertical-align: middle;
        margin-right: 5px;
    }

    .floating-sphere {
        position: absolute;
        z-index: 1;
    }

    .floating-sphere .sphere-image {
        max-width: 100px;
        max-height: 100px;
        width: 100%;
        height: auto;
        opacity: 0.6;
    }

    .sphere-1 {
        top: 20%;
        left: 10%;
    }

    .sphere-2 {
        top: 50%;
        right: 15%;
    }

    .sphere-3 {
        top: 30%;
        left: 50%;
    }

    /* Ajustar el responsive */
    @media (max-width: 1280px) {
        #slide-6 .product-image-container {
            width: 460px;
        }

        #slide-6 .product-main-image {
            width: 100%;
            height: auto;
        }
    }

    .slide-counter-container {
        width: 30vw;
        min-width: 120px;
        max-width: 400px;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 100;
        pointer-events: none;
        user-select: none;
        position: sticky;
        left: 0;
        top: 0;
        background: transparent;
    }

    #slide-counter {
        font-size: 7vw;
        font-weight: 700;
        color: #fff;
        letter-spacing: 2px;
        font-family: var(--font-main, Arial, sans-serif);
        text-shadow: 0 2px 16px rgba(0,0,0,0.25);
        transition: color 0.3s;
        margin-right: 2vw;
    }

    .slides-wrapper {
        width: 70vw;
        min-width: 0;
        height: 100vh;
        position: relative;
        background: transparent;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .slides-container {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    @media (max-width: 900px) {
        .slide-counter-container {
            width: 20vw;
            min-width: 80px;
            height: 100vh;
        }
        #slide-counter {
            font-size: 4vw;
        }
        .slides-wrapper {
            width: 80vw;
        }
    }

    @media (max-width: 600px) {
        .slide-counter-container {
            width: 15vw;
            min-width: 40px;
            height: 100vh;
        }
        #slide-counter {
            font-size: 2.5vw;
        }
        .slides-wrapper {
            width: 85vw;
        }
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Solo ejecuta si estamos en products.php
        if (window.location.pathname.includes('products.php')) {
            function resetSlideStates() {
                document.querySelectorAll('.product-slide').forEach(function(slide) {
                    slide.style.opacity = '0';
                    slide.style.transform = 'scale(0.5)';
                    slide.style.zIndex = '5';
                    // Asegurarse de que los botones sean clickeables
                    slide.style.pointerEvents = 'none';
                });
            }

            function activateSlide(slideId) {
                resetSlideStates();
                var activeSlide = document.getElementById(slideId);
                if (activeSlide) {
                    activeSlide.style.opacity = '1';
                    activeSlide.style.transform = 'scale(1)';
                    activeSlide.style.zIndex = '10';
                    activeSlide.style.pointerEvents = 'auto';
                    document.getElementById('products').scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }

            // Selecciona todos los enlaces del dropdown que apuntan a slides
            document.querySelectorAll('a.dropdown-item[href^="products.php#slide-"]').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var slideId = this.getAttribute('href').split('#')[1];
                    var slideNum = parseInt(slideId.replace('slide-', ''), 10);
                    activateSlide(slideId);
                    // ACTUALIZA currentSlide
                    if (typeof window.setCurrentSlide === 'function') {
                        window.setCurrentSlide(slideNum);
                    }
                    var dropdown = document.querySelector('.dropdown-menu.show');
                    if (dropdown) dropdown.classList.remove('show');
                });
            });

            // NUEVO: Mostrar slide según el hash al cargar la página
            if (window.location.hash && window.location.hash.startsWith('#slide-')) {
                var slideId = window.location.hash.replace('#', '');
                var slideNum = parseInt(slideId.replace('slide-', ''), 10);
                activateSlide(slideId);
                // ACTUALIZA currentSlide
                if (typeof window.setCurrentSlide === 'function') {
                    window.setCurrentSlide(slideNum);
                }
            }
        }
    });
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof gsap !== 'undefined') {
            // Elementos
            const slide0 = document.getElementById('slide-0');
            const slide1 = document.getElementById('slide-1');
            const slide2 = document.getElementById('slide-2');
            const slide3 = document.getElementById('slide-3');
            const slide4 = document.getElementById('slide-4');
            const slide5 = document.getElementById('slide-5');
            const slide6 = document.getElementById('slide-6');
            const section = document.querySelector('.products-section');
            const productTitle = document.querySelector('.product-title');

            let currentSlide = 0;
            let totalSlides = 7;
            let isAnimating = false;
            let canScroll = true;

            // Función para inicializar el slide basado en el hash de la URL
            function initializeFromHash() {
                if (window.location.hash && window.location.hash.startsWith('#slide-')) {
                    const slideNum = parseInt(window.location.hash.replace('#slide-', ''), 10);
                    if (!isNaN(slideNum) && slideNum >= 0 && slideNum < totalSlides) {
                        currentSlide = slideNum;
                        document.querySelectorAll('.product-slide').forEach(function(slide) {
                            slide.style.opacity = '0';
                            slide.style.transform = 'scale(0.5)';
                            slide.style.zIndex = '5';
                        });
                        const activeSlide = getSlideById(currentSlide);
                        if (activeSlide) {
                            activeSlide.style.opacity = '1';
                            activeSlide.style.transform = 'scale(1)';
                            activeSlide.style.zIndex = '10';
                        }
                        updateTitleVisibility();
                    }
                }
            }

            window.setCurrentSlide = function(num) {
                if (typeof num === 'number' && num >= 0 && num <= 6) {
                    currentSlide = num;
                    updateTitleVisibility();
                }
            };

            // Función para actualizar visibilidad del título
            function updateTitleVisibility() {
                if (currentSlide === 0) {
                    productTitle.classList.remove('show');
                } else {
                    productTitle.classList.add('show');
                }
            }

            // Inicializar el título y el slide actual
            initializeFromHash();
            updateTitleVisibility();

            // Función para animar transición
            function animateSlides(fromSlide, toSlide, direction) {
                if (isAnimating) return;
                isAnimating = true;
                canScroll = false;

                // Animar el contador de slides
                const counter = document.getElementById('slide-counter');
                const prev = parseInt(counter.textContent, 10);
                const next = currentSlide + 1;
                gsap.to(counter, {
                    textContent: next < 10 ? `0${next}` : `${next}`,
                    duration: 0.4,
                    snap: { textContent: 1 },
                    ease: "power1.inOut"
                });

                // Asegurar que el slide actual tenga interacción desactivada
                fromSlide.style.pointerEvents = 'none';

                const tl = gsap.timeline({
                    onComplete: () => {
                        isAnimating = false;
                        // Activar interacción en el nuevo slide
                        toSlide.style.pointerEvents = 'auto';
                        fromSlide.style.zIndex = '5';
                        toSlide.style.zIndex = '10';
                        // Permitir scroll nuevamente después de un delay
                        setTimeout(() => {
                            canScroll = true;
                        }, 200); // Reducido de 300 a 200ms
                    }
                });

                if (direction === 'forward') {
                    // Slide actual se reduce y desaparece
                    tl.to(fromSlide, {
                            scale: 0.5,
                            opacity: 0,
                            duration: 0.5, // Reducido de 0.8 a 0.5 segundos
                            ease: "power2.inOut"
                        })
                        // Slide siguiente aparece desde el centro
                        .fromTo(toSlide, {
                            scale: 0.5,
                            opacity: 0,
                            zIndex: 10
                        }, {
                            scale: 1,
                            opacity: 1,
                            duration: 0.5, // Reducido de 0.8 a 0.5 segundos
                            ease: "power2.out"
                        }, "-=0.3"); // Reducido de -=0.4 a -=0.3 para mantener la fluidez
                } else {
                    // Slide actual se reduce y desaparece
                    tl.to(fromSlide, {
                            scale: 1.5,
                            opacity: 0,
                            duration: 0.5, // Reducido de 0.8 a 0.5 segundos
                            ease: "power2.inOut"
                        })
                        // Slide anterior aparece creciendo
                        .fromTo(toSlide, {
                            scale: 1.5,
                            opacity: 0,
                            zIndex: 10
                        }, {
                            scale: 1,
                            opacity: 1,
                            duration: 0.5, // Reducido de 0.8 a 0.5 segundos
                            ease: "power2.out"
                        }, "-=0.3"); // Reducido de -=0.4 a -=0.3 para mantener la fluidez
                }

                // Actualizar visibilidad del título después de la animación
                tl.call(updateTitleVisibility);

                // Actualizar el hash de la URL sin causar scroll
                const newHash = `#slide-${currentSlide}`;
                if (window.location.hash !== newHash) {
                    history.replaceState(null, null, newHash);
                }
            }

            // Función para obtener el slide por número
            function getSlideById(slideNumber) {
                switch (slideNumber) {
                    case 0:
                        return slide0;
                    case 1:
                        return slide1;
                    case 2:
                        return slide2;
                    case 3:
                        return slide3;
                    case 4:
                        return slide4;
                    case 5:
                        return slide5;
                    default:
                        return slide0;
                }
            }

            // Función para verificar si estamos en la sección
            function isInProductsSection() {
                const sectionRect = section.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                // Verificar si la sección está visible (al menos 50% de la pantalla)
                return sectionRect.top <= windowHeight * 0.5 && sectionRect.bottom >= windowHeight * 0.5;
            }

            // Wheel event handler
            function handleWheel(event) {
                if (!canScroll) {
                    event.preventDefault();
                    return;
                }

                if (isInProductsSection()) {
                    const deltaY = event.deltaY;

                    if (deltaY > 0) {
                        // Scroll hacia abajo
                        if (currentSlide < totalSlides - 1) {
                            event.preventDefault();
                            const fromSlide = getSlideById(currentSlide);
                            currentSlide++;
                            const toSlide = getSlideById(currentSlide);
                            animateSlides(fromSlide, toSlide, 'forward');
                        }
                        // Si ya está en el último slide, permitir scroll normal
                    } else if (deltaY < 0) {
                        // Scroll hacia arriba
                        if (currentSlide > 0) {
                            event.preventDefault();
                            const fromSlide = getSlideById(currentSlide);
                            currentSlide--;
                            const toSlide = getSlideById(currentSlide);
                            animateSlides(fromSlide, toSlide, 'backward');
                        }
                        // Si ya está en el primer slide, permitir scroll normal
                    }
                }
            }

            // Touch events para dispositivos móviles
            let touchStartY = 0;
            let touchEndY = 0;

            function handleTouchStart(event) {
                touchStartY = event.touches[0].clientY;
            }

            function handleTouchEnd(event) {
                if (!canScroll) {
                    event.preventDefault();
                    return;
                }

                touchEndY = event.changedTouches[0].clientY;

                if (isInProductsSection()) {
                    const deltaY = touchStartY - touchEndY;

                    if (Math.abs(deltaY) > 50) { // Mínimo movimiento requerido
                        if (deltaY > 0) {
                            // Swipe hacia arriba (scroll hacia abajo)
                            if (currentSlide < totalSlides - 1) {
                                event.preventDefault();
                                const fromSlide = getSlideById(currentSlide);
                                currentSlide++;
                                const toSlide = getSlideById(currentSlide);
                                animateSlides(fromSlide, toSlide, 'forward');
                            }
                        } else {
                            // Swipe hacia abajo (scroll hacia arriba)
                            if (currentSlide > 0) {
                                event.preventDefault();
                                const fromSlide = getSlideById(currentSlide);
                                currentSlide--;
                                const toSlide = getSlideById(currentSlide);
                                animateSlides(fromSlide, toSlide, 'backward');
                            }
                        }
                    }
                }
            }

            // Keyboard events para navegación con teclado
            function handleKeyDown(event) {
                if (!canScroll) return;

                if (isInProductsSection()) {
                    if (event.key === 'ArrowDown' || event.key === 'PageDown') {
                        if (currentSlide < totalSlides - 1) {
                            event.preventDefault();
                            const fromSlide = getSlideById(currentSlide);
                            currentSlide++;
                            const toSlide = getSlideById(currentSlide);
                            animateSlides(fromSlide, toSlide, 'forward');
                        }
                    } else if (event.key === 'ArrowUp' || event.key === 'PageUp') {
                        if (currentSlide > 0) {
                            event.preventDefault();
                            const fromSlide = getSlideById(currentSlide);
                            currentSlide--;
                            const toSlide = getSlideById(currentSlide);
                            animateSlides(fromSlide, toSlide, 'backward');
                        }
                    }
                }
            }

            // Agregar event listeners
            window.addEventListener('wheel', handleWheel, {
                passive: false
            });
            window.addEventListener('touchstart', handleTouchStart, {
                passive: false
            });
            window.addEventListener('touchend', handleTouchEnd, {
                passive: false
            });
            window.addEventListener('keydown', handleKeyDown);

            // Manejar cambios en el hash de la URL
            window.addEventListener('hashchange', initializeFromHash);

            // Función para generar un número aleatorio entre min y max
            function randomBetween(min, max) {
                return Math.random() * (max - min) + min;
            }

            // Función para crear animación aleatoria para una esfera
            function createRandomSphereAnimation(sphere) {
                const viewportWidth = window.innerWidth;
                const viewportHeight = window.innerHeight;

                // Crear timeline para movimiento
                const tl = gsap.timeline({
                    repeat: -1,
                    yoyo: true
                });

                // Generar 8 posiciones aleatorias
                for (let i = 0; i < 8; i++) {
                    tl.to(sphere, {
                        x: randomBetween(-viewportWidth / 3, viewportWidth / 3),
                        y: randomBetween(-viewportHeight / 3, viewportHeight / 3),
                        duration: randomBetween(2, 4),
                        ease: "power1.inOut"
                    });
                }

                // Rotación continua
                gsap.to(sphere, {
                    rotation: 360,
                    duration: randomBetween(8, 12),
                    repeat: -1,
                    ease: "none"
                });

                // Escala pulsante
                gsap.to(sphere, {
                    scale: randomBetween(0.8, 1.2),
                    duration: randomBetween(1, 2),
                    repeat: -1,
                    yoyo: true,
                    ease: "power2.inOut"
                });
            }

            // Animar las tres esferas
            const sphere1 = document.querySelector('.sphere-1 .sphere-image');
            const sphere2 = document.querySelector('.sphere-2 .sphere-image');
            const sphere3 = document.querySelector('.sphere-3 .sphere-image');

            if (sphere1 && sphere2 && sphere3) {
                // Iniciar cada esfera con un pequeño delay
                setTimeout(() => createRandomSphereAnimation(sphere1), 0);
                setTimeout(() => createRandomSphereAnimation(sphere2), 200);
                setTimeout(() => createRandomSphereAnimation(sphere3), 400);

                // Actualizar animaciones cuando cambie el tamaño de la ventana
                window.addEventListener('resize', () => {
                    gsap.killTweensOf([sphere1, sphere2, sphere3]);
                    createRandomSphereAnimation(sphere1);
                    createRandomSphereAnimation(sphere2);
                    createRandomSphereAnimation(sphere3);
                });
            }
        }
    });
    </script>

    <?php
        require_once("footer.php");
    ?>
    <?php
        require_once("script.php");
    ?>
</body>

</html>