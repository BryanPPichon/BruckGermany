<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once("head.php");
        require_once("tracking.php");
    ?>
    <style>
    body {
        margin: 0;
        padding: 0;
        background: url('img/fondo_productos_prefab.png') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        overflow-x: hidden;
    }

    .floating-sphere {
        position: fixed;
        width: 80px;
        height: 80px;
        background: url('img/Esfera.png') no-repeat center center;
        background-size: contain;
        border-radius: 50%;
        z-index: 1;
        animation: float 15s infinite linear;
        opacity: 0.8;
    }

    .sphere1 {
        top: 10%;
        right: 10%;
        animation-delay: 0s;
    }

    .sphere2 {
        bottom: 20%;
        right: 15%;
        animation-delay: -5s;
        width: 60px;
        height: 60px;
    }

    @keyframes float {
        0% {
            transform: translateY(0px) rotate(0deg);
        }

        33% {
            transform: translateY(-30px) rotate(120deg);
        }

        66% {
            transform: translateY(15px) rotate(240deg);
        }

        100% {
            transform: translateY(0px) rotate(360deg);
        }
    }

    .products-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 0 50px;
        position: relative;
        z-index: 2;
    }

    .product-image {
        flex: 1;
        max-width: 600px;
        margin-right: 80px;
    }

    .product-image img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    .product-content {
        flex: 1;
        max-width: 600px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 60px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .brand-section {
        text-align: right;
        margin-bottom: 40px;
    }

    .brand-logo {
        font-size: 24px;
        font-weight: bold;
        color: white;
        margin-bottom: 10px;
    }

    .brand-tagline {
        color: #ff4757;
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .product-title {
        font-size: 48px;
        font-weight: bold;
        color: white;
        margin: 40px 0 30px 0;
        text-transform: uppercase;
        letter-spacing: 2px;
        line-height: 1.2;
    }

    .product-description {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
        margin-bottom: 40px;
    }

    .product-buttons {
        display: flex;
        gap: 20px;
    }

    .btn {
        padding: 15px 30px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        cursor: pointer;
    }

    .btn-outline {
        background: transparent;
        color: white;
        border-color: rgba(255, 255, 255, 0.5);
    }

    .btn-outline:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: white;
    }

    .btn-primary {
        background: #ff4757;
        color: white;
        border-color: #ff4757;
    }

    .btn-primary:hover {
        background: #ff3838;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(255, 71, 87, 0.3);
    }

    .page-header {
        position: fixed;
        top: 120px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px 40px;
        backdrop-filter: blur(10px);
    }

    .page-header .brand-icon {
        width: 0;
        height: 0;
        border-left: 12px solid #ff4757;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
    }

    .page-header .page-title {
        color: white;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 2px;
        margin: 0;
        text-transform: uppercase;
    }

    @media (max-width: 1024px) {
        .products-container {
            flex-direction: column;
            padding: 50px 20px;
        }

        .product-image {
            margin-right: 0;
            margin-bottom: 40px;
            max-width: 500px;
        }

        .product-content {
            max-width: 100%;
            padding: 40px;
        }

        .product-title {
            font-size: 36px;
        }

        .page-header {
            top: 100px;
            padding: 12px 30px;
        }

        .page-header .page-title {
            font-size: 18px;
        }
    }

    @media (max-width: 768px) {
        .product-content {
            padding: 30px;
        }

        .product-title {
            font-size: 28px;
        }

        .product-description {
            font-size: 16px;
        }

        .product-buttons {
            flex-direction: column;
        }

        .floating-sphere {
            width: 60px;
            height: 60px;
        }

        .sphere2 {
            width: 40px;
            height: 40px;
        }

        .page-header {
            top: 80px;
            padding: 10px 25px;
        }

        .page-header .page-title {
            font-size: 16px;
            letter-spacing: 1px;
        }

        .page-header .brand-icon {
            border-left: 10px solid #ff4757;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
        }
    }
    </style>
</head>

<body>
    <?php require_once("header.php"); ?>

    <!-- Esferas flotantes -->
    <div class="floating-sphere sphere1"></div>
    <div class="floating-sphere sphere2"></div>

    <!-- Contenido principal -->
    <div class="products-container">

        <div class="page-header">
            <div class="brand-icon"></div>
            <h1 class="page-title">NUESTRAS AUTOPARTES</h1>
        </div>

        <div class="product-image">
            <img src="img/Colision_interiores.png" alt="Autopartes de Colisión e Interiores">
        </div>

        <div class="product-content">
            <h1 class="product-title">COLISIÓN E INTERIORES</h1>

            <p class="product-description">
                Nuestras autopartes de colisión e interiores están diseñadas con
                los mejores materiales, altos estándares de calidad y están
                homologadas con equipo original para garantizar su ensamblaje.
            </p>

            <div class="product-buttons">
                <a href="#" class="btn btn-outline">Conoce más</a>
                <a href="#" class="btn btn-primary">Descargar</a>
            </div>
        </div>
    </div>

    <?php require_once("footer.php"); ?>
</body>

</html>