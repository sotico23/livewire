<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Nirvanas')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Disfruta de masajes relajantes, tántricos y desestresantes en un ambiente exclusivo. Encuentra bienestar y placer en cada sesión.')">
    <meta name="keywords" content="@yield('keywords', 'masajes relajantes, masajes tántricos, spa, bienestar, relajación, desestrés, terapias alternativas')">
    <meta name="author" content="Tu Spa">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@yield('title', 'Masajes Relajantes y Tántricos de Lujo')">
    <meta property="og:description" content="@yield('description', 'Descubre el placer de los masajes tántricos y relajantes en un entorno exclusivo.')">
    <meta property="og:image" content="@yield('og_image', asset('/back/images/spa-thumbnail.jpg'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Masajes Relajantes y Tántricos de Lujo')">
    <meta name="twitter:description" content="@yield('description', 'Descubre el placer de los masajes tántricos y relajantes en un entorno exclusivo.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('/back/images/spa-thumbnail.jpg'))">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('back/vendors/images/nirvana/apple-touch-iconnirvana.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('back/vendors/images/nirvana/nirvana32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('back/vendors/images/nirvana/favicon-16x16nirvana.png') }}">
    <link rel="manifest" href="{{ asset('back/vendors/images/nirvana/site.webmanifest') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" as="style">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Rockstars&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/back/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/back/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/back/css/style.css') }}" rel="stylesheet">

</head>

@include('layouts.public.nav')

<body>
    <style>
        body{
            background-color: #000;
            color: #FFD700;
        }
        .logo-img {
            height: 50px; /* Ajusta la altura según tus necesidades */
            width: auto;  /* Mantén la proporción de la imagen */
            display: block;
        }

    <style>
    .text-gold {
        color: #FFD700;
    }

    .text-silver {
        color: #C0C0C0;
    }

    .btn-gold {
        background-color: #FFD700;
        color: #000;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .btn-gold:hover {
        background-color: #E6BE8A;
        color: #fff;
    }

    .btn-silver {
        background-color: #C0C0C0;
        color: #000;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .btn-silver:hover {
        background-color: #A9A9A9;
        color: #fff;
    }

    .text-gold {
        color: #FFD700;
    }

    .text-silver {
        color: #C0C0C0;
    }

    .btn-gold {
        background-color: #FFD700;
        color: #000;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .btn-gold:hover {
        background-color: #E6BE8A;
        color: #fff;
    }

    .btn-silver {
        background-color: #C0C0C0;
        color: #000;
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .btn-silver:hover {
        background-color: #A9A9A9;
        color: #fff;
    }
    <style>
        .carousel-item {
            transition: transform 1.5s ease-in-out;
        }

        /* Contenedor de la imagen del carrusel */
        .carousel-image-container {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        /* Imagen dentro del contenedor */
        .carousel-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

@yield('content')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/back/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/back/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/back/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('/back/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('/back/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
