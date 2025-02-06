
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('spa.dashboard') }}">
            <img src="{{ asset('back/media/nirvanaplata.png') }}" alt="" class="dark-logo" />
            <img src="{{ asset('back/media/nirvanasrojo.png') }}" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <!-- Crear Modelos -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user1"></span><span class="mtext">Gestión de Personal</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('spas.mujeres.create') }}">Agregar Nuevo</a></li>
                        <li><a href="{{ route('spas.mujeres.index') }}">Lista de Personal</a></li>
                    </ul>
                </li>
                <!-- Crear Spas -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Crear Eventos</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('spas.eventos.create') }}">Agregar Evento</a></li>
                        <li><a href="{{ route('spas.eventos.index') }}">Lista de Eventos</a></li>
                    </ul>
                </li>
                <!-- Administración -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-image"></span><span class="mtext">Multimedia</span>
                    </a>
                    <ul class="submenu">
                        @if(isset($spa))
                        <li><a href="{{ route('spas.media.index', $spa) }}">Ver Archivos</a></li>
                        <li><a href="{{ route('spas.media.create', $spa) }}">Subir Multimedia</a></li>
                        @endif
                    </ul>
                </li>
                <!-- proximanete -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-settings"></span><span class="mtext">Proximamente</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{-- {{ route('spas.mujeres.index') }} --}}">Reservas</a></li>
                        <li><a href="{{-- {{ route('spas.mujeres.index') }} --}}">Sistema de Estrellas</a></li>
                        <li><a href="{{-- {{ route('spas.mujeres.index') }} --}}">Blog</a></li>
                        <li><a href="{{-- {{ route('spas.mujeres.index') }} --}}">Trabaja Internacionamente</a></li>
                    </ul>
                </li>
                <!-- Menú extra -->
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <!-- Continuación de menús -->
            </ul>
        </div>
    </div>
</div>
