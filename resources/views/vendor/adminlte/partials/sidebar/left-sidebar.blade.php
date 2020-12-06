<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">

        <nav class="mt-2">
            <br>
            <div class="margin">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                      </button>
                    </div>
                  </div>
                <br>
                <div class="btn-group" style="background-color: #fd6e4e">
                    <button type="button" class="btn btn-danger" style="width: 200px ;background-color: #fd6e4e;" >Novo Chamado</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-hover dropdown-icon" style="background-color:#fd6e4e " data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" style="color:black" href="#">Chamado Interno</a>
                      <a class="dropdown-item" style="color:black" href="#">Chamado Externo</a>

                    </div>
                  </div>


            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
            </ul>
        </nav>
    </div>

</aside>
