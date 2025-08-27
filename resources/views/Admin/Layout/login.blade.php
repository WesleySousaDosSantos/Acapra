<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Login - ACAPRA')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="login-container position-relative">
        <div class="paw-decoration paw-1">
            <i class="fas fa-paw fa-5x"></i>
        </div>
        <div class="paw-decoration paw-2">
            <i class="fas fa-paw fa-5x"></i>
        </div>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="text-center mb-4">
                        <div class="logo-placeholder text-purple d-inline-flex align-items-center text-white">
                            <i class="fas fa-paw fs-1 me-2"></i>
                            <span class="fs-1 fw-bold">ACAPRA</span>
                        </div>
                    </div>
                    <div class="login-card bg-white">
                        <div class="row g-0">
                            <div class="col-md-5 d-none d-md-block">
                                <div class="login-image h-100"></div>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');

            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>

</html>