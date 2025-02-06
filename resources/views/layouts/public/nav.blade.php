<!-- Navbar Start -->

{{-- <style>
    <style>
/* Estilos para la barra de navegación */
.navbar {
    background-color: #B0B0B0 !important; /* Gris plateado */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
}

/* Estilos para los enlaces del navbar */
.navbar .nav-link {
    color: #FFFFFF !important; /* Letras blancas */
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

/* Hover en los enlaces */
.navbar .nav-link:hover,
.navbar .nav-link:focus {
    color: #FFD700 !important; /* Dorado al pasar el mouse */
}

/* Estilos para el dropdown */
.navbar .dropdown-menu {
    background-color: #B0B0B0;
    border: none;
}

/* Estilos para los elementos del dropdown */
.navbar .dropdown-item {
    color: #FFFFFF !important;
    transition: background 0.3s ease-in-out;
}

/* Hover en los elementos del dropdown */
.navbar .dropdown-item:hover {
    background-color: #A0A0A0; /* Un tono más oscuro de gris */
    color: #FFD700 !important; /* Dorado */
}

/* Estilos para el botón del navbar en versión móvil */
.navbar-toggler {
    border: none;
    outline: none;
}

.navbar-toggler-icon {
    filter: brightness(0) invert(1); /* Cambia el icono a blanco */
}

/* Estilos para el logo */
.logo-img {
    max-height: 50px; /* Ajusta el tamaño del logo */
}
</style> --}}

</style>
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ route('public.index') }}" class="navbar-brand">
                <img src="{{ asset('back/media/nirvanasrojo.png') }}" alt="Traveler Logo" class="logo-img" /> <!-- Logo desde la carpeta public -->
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    {{-- <a href="index.html" class="nav-item nav-link active">Modelos</a>
                    <a href="about.html" class="nav-item nav-link">Cafes</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="package.html" class="nav-item nav-link">Tour Packages</a> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Catalogo</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{ route('chicas.all.index') }}" class="dropdown-item">Modelos</a>
                            <a href="{{ route('spas.all.index') }}" class="dropdown-item">Spas</a>
                            <a href="{{ route('eventos.all.index') }}" class="dropdown-item">Eventos</a>
                            <a href="{{ route('proximamente') }}" class="dropdown-item">Proximamente</a>
                            <a href="testimonial.html" class="dropdown-item">Terminos y Condiciones</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Usuarios</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
{{--                             <a href="{{ route('register') }}" class="dropdown-item">Register</a>
 --}}                           {{--  <a href="{{ route('login') }}" class="dropdown-item">Login</a> --}}
                                <a href="{{ route('auth.multiguard.login.form') }}" class="dropdown-item">Staff</a>
                        </div>
                    </div>

                    <a href="{{ route('contacto') }}" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
