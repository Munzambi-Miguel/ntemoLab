<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    @if(Auth::user()->isAdmin())
        <li class="nav-header">ADMINISTRADOR</li>
        <li class="nav-item {{ (request()->is('configuration*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('configuration*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Configurações
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('listUsers')}}"
                       class="nav-link {{(request()->is('configuration/uses')) ? 'disabled active-link' :''}}">
                        <i class="fa fa-minus nav-icon"></i>
                        <p>Utilizadores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('listProfiles')}}"
                       class="nav-link {{(request()->is('configuration/profiles')) ? 'disabled active-link' :''}}">
                        <i class="fa fa-minus nav-icon"></i>
                        <p>Perfiles</p>
                    </a>
                </li>
            </ul>
        </li>
    @endif
</ul>
