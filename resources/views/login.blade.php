<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ACAPRA</title>
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
                            
                            <div class="col-md-7">
                                <div class="login-form">
                                    <h2 class="text-center mb-4 fw-bold">Bem-vindo de volta!</h2>
                                    
                                    <form>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light">
                                                    <i class="fas fa-envelope text-muted"></i>
                                                </span>
                                                <input type="email" class="form-control" id="email" placeholder="seu@email.com" required>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label for="password" class="form-label">Senha</label>
                                                <a href="#" class="text-decoration-none text-purple small">Esqueceu a senha?</a>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light">
                                                    <i class="fas fa-lock text-muted"></i>
                                                </span>
                                                <input type="password" class="form-control" id="password" placeholder="Sua senha" required>
                                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-purple py-2">Entrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="index.html" class="text-decoration-none text-white">
                            <i class="fas fa-arrow-left me-2"></i>Voltar para a página inicial
                        </a>
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