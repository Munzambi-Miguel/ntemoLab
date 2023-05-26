<div>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('home')}}" class="brand-link">
            <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">RH Assembleia Minfin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{Auth::user()->getAvatarUrlAttribute()}}" style="width:45px;height:45px;"
                         class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    <a href="{{route('logout')}}"><span class="right badge badge-danger">Sair</span></a>
                    @impersonating
                    <a href="{{route('leaveimpersonate')}}"><span class="right badge badge-primary">Leave</span></a>
                    @endImpersonating
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                @livewire('layouts.side-ul-list')
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

</div>
