<!DOCTYPE html>
<html lang='pt-BR'>
    @include('layouts.backend._head')

   

    <body class='icon-menu menu-alt'>
        <div class='wrapper'>
            <nav class='navbar'>
                <div class='navbar-header container'>
                    <a href='#' class='menu-toggle'><i class='zmdi zmdi-menu'></i></a>
                    <a href='{{url('/')}}' class='logo'><img src='{{url('backend/img/logo.png')}}' alt='Gestão Bytes'></a>
                    <a href='{{url('/')}}' class='icon-logo'></a>
                </div>
                <div class='navbar-container clearfix'>
                    <div class='pull-left'>
                        <a href='{{url('/')}}' class='page-title text-uppercase'>Gestão Bytes | {{Auth::user()->name}}</a>
                    </div>

                    <div class='pull-right'>
                        <ul class='nav pull-right right-menu'>
                            @can('COMPANY')
                            <li class='notification dropdown'>
                                <a class='dropdown-toggle'>
                                    <i class='zmdi zmdi-settings'></i>
                                </a>
                                <div class='dropdown-menu'>
                                    <h4 class='text-center info-color m-0'>Configurações</h4>
                                    <div class='notification-container'>
                                        <a href='{{url('/restrito/configuracoes-sistema')}}'>
                                            <i class='zmdi zmdi-settings info-color m-r-10'></i>Sistema
                                        </a>
                                        <a href='{{url('/restrito/configuracoes-boleto')}}'>
                                            <i class='zmdi zmdi-money info-color m-r-10'></i>Boleto
                                        </a>
                                        <a href='{{url('/restrito/configuracoes-midias')}}'>
                                            <i class='zmdi zmdi-share info-color m-r-10'></i>Mídias Sociais
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endcan
                            <li class='more-options dropdown'>
                                <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                                    <i class='zmdi zmdi-account-circle'></i>
                                </a>
                            </li>
                            @if (Auth::guest())
                            <li></li>
                            @else
                            <li class='more-options dropdown'>
                                <a 
                                    data-toggle='tooltip' data-placement='left' title='Logout' data-original-title='Logout'
                                    href='{{url('/logout')}}'
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class='zmdi zmdi-sign-in'></i>
                                </a>
                            </li>
                            <input type="hidden" id="token" value="{{csrf_token()}}"/>
                            <form id='logout-form' action='{{ url('/logout')}}' method='POST' style='display: none;'>
                                {{ csrf_field() }}
                            </form>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            @include('layouts.backend._menu')

            <div class="container-fluid">
                <!-- containner content -->
                @yield('content')
                <!-- containner content -->
            </div>
        </div>

        @include('layouts.backend._scripts')
    
        @stack('js-footer')
        @include('sweet::alert')
        @include('restrito._includes.scripts_home')

    </body>
</html>