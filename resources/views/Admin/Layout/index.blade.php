<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/dashboard.css">
    <link rel="shortcut icon" href="{{asset('./imagem/logo-acapra.jpg')}}">

    <style>
        @yield('css')
    </style>
</head>

<body>
    <button class="toggle-sidebar" id="toggleSidebar">
        <i class="fas fa-bars"></i>
    </button>

    <div class="dashboard-container">
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo-placeholder">
                    <i class="fas fa-paw"></i> <span class="logo-text">ACAPRA</span>
                </div>
            </div>

            <div class="sidebar-menu">

                <a href="{{ Route('dashboard') }}" class="sidebar-menu-item {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
                <a href="{{ Route('animais') }}" class="sidebar-menu-item {{ Route::currentRouteName() === 'animais' ? 'active' : '' }}">
                    <i class="fas fa-dog"></i>
                    <span class="menu-text">Animais</span>
                </a>
                @php
                     $formularioativo = in_array(Route::currentRouteName(), ['formularios', 'formularios.show'])
                @endphp
                <a href="{{ Route('formularios') }}" class="sidebar-menu-item {{ $formularioativo ? 'active' : '' }}">
                    <i class="fas fa-file-alt"></i>
                    <span class="menu-text">Formulários</span>
                </a>
                <a href="{{ Route('duvidas') }}" class="sidebar-menu-item {{ Route::currentRouteName() === 'duvidas' ? 'active' : '' }}">
                    <i class="fas fa-question"></i>
                    <span class="menu-text">Dúvidas</span>
                </a>
                @php
                $mensagemativa = in_array(Route::currentRouteName(), ['mensagens', 'mensagens.show'])
                @endphp
                <a href="{{ Route('mensagens') }}" class="sidebar-menu-item {{ $mensagemativa ? 'active' : '' }}">
                    <i class="fas fa-envelope"></i>
                    <span class="menu-text">Mensagens</span>
                </a>

                <div class="sidebar-divider"></div>

                <a href="{{ Route('usuario') }}" class="sidebar-menu-item {{ Route::currentRouteName() === 'usuario' ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <span class="menu-text">Usuários</span>
                </a>
                <a href="{{ Route('configuracao') }}" class="sidebar-menu-item {{ Route::currentRouteName() === 'configuracao' ? 'active' : '' }}">
                    <i class="fas fa-cog"></i>
                    <span class="menu-text">Configurações</span>
                </a>
            </div>
            <div class="sidebar-footer">
                <div class="user-info">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="user-info-text">
                        <div class="user-name">ACAPRA</div>
                        <div class="user-role">Sair</div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @yield('js')
</body>

</html>