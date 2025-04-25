<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Encabezado</title>
    <link rel="shortcut icon" href="Imagenes/Captura_de_pantalla_2024-10-25_181304-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="index1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Agregando el CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Reset de márgenes y padding */
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
            background-color: #f9fafb;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que el body ocupe toda la altura de la pantalla */
        }

        /* Estilos del header */
        header {
            background-color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .Logo img {
            height: 80px;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            margin-left: 20px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ff7043;
        }

        /* Sección decorada central */
        .decoracion {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            flex-direction: column;
        }

        .sisas {
            text-align: center;
            padding: 20px;
        }

        .sisas h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }

        .carousel-item img {
            width: 100%; /* La imagen ocupará todo el ancho del contenedor */
            height: 680px; /* Puedes ajustar la altura como desees */
            object-fit: cover;
        }

        .sisas h2 {
            font-size: 24px;
            color: #555;
            margin-bottom: 30px;
        }

        button {
            background-color: #ff7043;
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            margin-top: auto; /* Hace que el footer se mantenga al fondo */
        }

        footer img {
            height: 50px;
        }

        .iconos {
            display: flex;
            gap: 20px;
            font-size: 20px;
        }

        .iconos i {
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .iconos i:hover {
            color: #ff7043;
        }

        footer h2 {
            margin: 10px 0;
            font-size: 18px;
            color: #ff7043;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            font-size: 16px;
        }

        footer ul li {
            margin-bottom: 8px;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .decoracion {
                flex-direction: column;
                gap: 30px;
            }

            .Logo img {
                height: 70px;
            }

            nav a {
                font-size: 16px;
            }

            .sisas h1 {
                font-size: 28px;
            }

            footer {
                flex-direction: column;
                text-align: center;
            }

            footer img {
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="" class="Logo">
        <img src="{{ asset(config('tablar.auth_logo.img.path', 'assets/logo.svg')) }}" height="36" alt="">
        </a>
        <nav>
            <a href="{{ url('/home') }}" class="text-sm text-gray-700">Inicio</a>
            <a href="{{ route('login') }}" class="text-sm text-gray-700">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="ml-[30px] text-sm text-gray-700">Registro</a>
        </nav>
    </header>

    <!-- Carrusel de imágenes -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.freepik.com/fotos-premium/almacen-industrial-filas-estanterias-apiladas-cajas-carton_727543-1503.jpg?semt=ais_country_boost&w=740" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="https://st4.depositphotos.com/10048732/21960/i/450/depositphotos_219609076-stock-photo-wholesale-logistic-business-export-people.jpg" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="https://assets.entrepreneur.com/content/3x2/2000/20150804170559-warehouse-workers-employees-stock-inventory.jpeg" height=300px class="d-block w-100" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="decoracion">
        <div class="sisas">
            <h1>HOLY INVENTORY</h1>
        </div>
    </div>

    <footer>
    <img src="{{ asset(config('tablar.auth_logo.img.path', 'assets/logo.svg')) }}" height="36" alt="">

        <div class="iconos">
            <h2>Redes Sociales</h2>
            <div>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-x-twitter"></i>
            </div>
        </div>

        <div>
            <h2>Contáctanos</h2>
            <ul>
                <li>+57 301 436 0968</li>
            </ul>
        </div>

        <div>
            <h2>Ubicación</h2>
            <ul>
                <li>Calle 11 # 13 - 10</li>
            </ul>
        </div>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>