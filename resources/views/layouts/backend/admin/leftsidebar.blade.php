<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('admin.dashboard') }}">
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
                        <span class="micon dw dw-user1"></span><span class="mtext">Crear Modelos</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.chicas.create') }}">Agregar Chica</a></li>
                        <li><a href="{{ route('admin.chicas.index') }}">Lista de Chicas</a></li>
                    </ul>
                </li>
                <!-- Crear Spas -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-user3"></span><span class="mtext">Crear Spas</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.spas.create') }}">Agregar Spa</a></li>
                        <li><a href="{{ route('admin.spas.index') }}">Lista de Spas</a></li>
                    </ul>
                </li>

                </li>
                <!-- Administración -->
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-settings"></span><span class="mtext">Administración</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="javascript:void(0);">Usuarios Administrativos</a></li>
                        <li><a href="javascript:void(0);">Configuraciones Generales</a></li>
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
