<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACAPRA - Adoção de Animais</title>
    <link rel="shortcut icon" type="imagex/png" href="./images/icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/styles.css">
    <link rel="icon" type="image/png" href="{{ asset('logo-acapra-reto.png') }}">

    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <header style="background-color: rebeccapurple;">
        <div class="container py-3">
            <div class="d-flex justify-content-around align-items-center">
                <a class="logo-placeholder" href="{{ Route('index') }}" style="color: white; text-decoration: none;">
                    <img src="{{ asset('logos/' . $configuracaoGlobal->logo) }}" alt="Logo da ACAPRA" style="width: 12vw;">
                </a>
                <nav>
                    <ul class="d-flex list-unstyled mb-0 gap-4 align-items-center">
                        <li><a href={{ Route('index') }} class="text-decoration-none">Home</a></li>
                        <li><a href="{{ url('/#sobre') }}" class="text-decoration-none">Sobre</a></li>
                        <li><a href="{{ url('/#contato') }}" class="text-decoration-none">Contato</a></li>
                        <li><a href="{{ Route('adocao') }}" class="btn btn-purple">Adotar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @yield('section')

    <footer class="py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
                <div class="logo-placeholder text-white mb-3 mb-md-0">
                    <img src="{{ asset('logos/' . $configuracaoGlobal->logo) }}" alt="Logo da ACAPRA" style="width: 12vw;">
                </div>
                <nav class="mb-3 mb-md-0">
                    <ul class="d-flex flex-wrap justify-content-center list-unstyled mb-0 gap-3">
                        <li><a href="{{ Route('index') }}" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="{{ url('/#sobre') }}" class="text-white text-decoration-none">Sobre</a></li>
                        <li><a href="{{ url('/#contato') }}" class="text-white text-decoration-none">Contato</a></li>
                        <li><a href="{{ Route('adocao') }}" class="text-white text-decoration-none">Adotar</a></li>
                    </ul>
                </nav>
            </div>
            <hr>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pt-3">
                <p class="text-white mb-3 mb-md-0">© Acapra - Acapra 2025. Todos os direitos reservados.</p>
                <div class="social-icons d-flex gap-3">
                    @if($configuracaoGlobal?->socialFacebook)
                    <a href="{{ $configuracaoGlobal->socialFacebook }}" class="social-icon" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    @endif
                    @if($configuracaoGlobal?->socialTwitter)
                    <a href="{{ $configuracaoGlobal->socialTwitter }}" class="social-icon" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    @endif
                    @if($configuracaoGlobal?->socialInstagram)
                    <a href="{{ $configuracaoGlobal->socialInstagram }}" class="social-icon" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif
                    @if ($configuracaoGlobal?->socialWhatsapp != '')
                    <a href="{{ $configuracaoGlobal->socialWhatsapp }}" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </footer>

    <!-- <script src="jquery-3.7.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="script.js"></script> -->
    @yield('js')

</body>

</html>