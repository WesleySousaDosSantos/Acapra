<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - ACAPRA</title>
    <link rel="stylesheet" href="styles.css"> <!-- Arquivo CSS sugerido -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <!-- Botão para alternar visibilidade da sidebar -->
    <button id="toggleSidebar" aria-label="Alternar menu lateral">
        <i class="fas fa-bars"></i>
    </button>

    <div class="container">
        <!-- Barra lateral -->
        <aside id="sidebar" class="sidebar">
            <header class="sidebar-header">
                <i class="fas fa-paw"></i> <span>ACAPRA</span>
            </header>

            <nav class="sidebar-menu" aria-label="Menu lateral">
                <ul>
                    <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa-solid fa-address-book"></i> Contato</a></li>
                    <li><a href="#"><i class="fas fa-file-alt"></i> Formulários</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> Mensagens</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Usuários</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Configurações</a></li>
                </ul>
            </nav>

            <footer class="sidebar-footer">
                <div class="user-info">
                    <i class="fas fa-user"></i>
                    <div>
                        <div>Admin ACAPRA</div>
                        <small>Administrador</small>
                    </div>
                </div>
            </footer>
        </aside>

        <!-- Conteúdo principal -->
        <main class="main-content">
            <section class="contact-form">
                <h1>Editar Informações de Contato</h1>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email">E-mail de Contato:</label>
                        <input type="email" id="email" name="email" value="contato@acapra.org.br" required>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" id="telefone" name="telefone" value="(47) 99999-9999" required>
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" value="Rua das Flores, 123 - Centro" required>
                    </div>

                    <div class="form-group">
                        <label for="horario">Horário de Atendimento:</label>
                        <input type="text" id="horario" name="horario" value="Seg a Sex das 08h às 17h" required>
                    </div>

                    <div class="form-group">
                        <label for="facebook">Facebook:</label>
                        <input type="url" id="facebook" name="facebook" value="https://facebook.com/acapra">
                    </div>

                    <div class="form-group">
                        <label for="instagram">Instagram:</label>
                        <input type="url" id="instagram" name="instagram" value="https://instagram.com/acapra">
                    </div>

                    <div class="form-actions">
                        <button type="submit">Salvar Alterações</button>
                        <button type="reset">Cancelar</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>

</html>
