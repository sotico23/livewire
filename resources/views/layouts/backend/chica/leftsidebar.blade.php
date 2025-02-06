<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('chica.dashboard') }}">
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
                        <span class="micon dw dw-user1"></span><span class="mtext">Subir Archivos</span>
                    </a>
                    <ul class="submenu">
                        @if(isset($chica))
                            <li><a href="{{ route('chicas.media.index', $chica) }}">Ver Archivos</a></li>
                            <li><a href="{{ route('chicas.media.create', $chica) }}">Subir Multimedia</a></li>
                        @endif
                    </ul>
                </li>

      {{--           <!-- Crear Historias -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user1"></span><span class="mtext">Subir Historias</span>
                    </a>
                    <ul class="submenu">
                        @if(isset($chica))
                            <li><a href="{{ route('chicas.historias.index', $chica) }}">Ver Historias</a></li>
                            <li><a href="{{ route('chicas.historias.create', $chica) }}">Subir Historias</a></li>
                        @endif
                    </ul>
                </li> --}}
{{--                 <!-- Crear Spas -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user3"></span><span class="mtext">Crear Spas</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.spas.create') }}">Agregar Spa</a></li>
                        <li><a href="{{ route('admin.spas.index') }}">Lista de Spas</a></li>
                    </ul>
                </li> --}}

                </li>
                <!-- Administración -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-settings"></span><span class="mtext">Proximamente</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="javascript:void(0);">Gestion De Eventos</a></li>
                        <li><a href="javascript:void(0);">Gestion De Reservas</a></li>
                        <li><a href="javascript:void(0);">Sistema De Estrellas</a></li>
                        <li><a href="javascript:void(0);">Trabaja Internacional</a></li>
                        <li><a href="javascript:void(0);">Estudio WebCam</a></li>


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
