<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - ACAPRA</title>
</head>

<body>
    <button id="toggleSidebar">
        <i class="fas fa-bars"></i>
    </button>

    <div>
        <div id="sidebar">
            <div>
                <div>
                    <i class="fas fa-paw"></i> <span>ACAPRA</span>
                </div>
            </div>

            <div>
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#">
                    <i class="fa-solid fa-address-book"></i>
                    <span>Contato</span>
                </a>
                <a href="#">
                    <i class="fas fa-file-alt"></i>
                    <span>Formulários</span>
                </a>
                <a href="#">
                    <i class="fas fa-envelope"></i>
                    <span>Mensagens</span>
                </a>

                <div></div>

                <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Usuários</span>
                </a>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Configurações</span>
                </a>
            </div>

            <div>
                <div>
                    <div>
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <div>Admin ACAPRA</div>
                        <div>Administrador</div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div>
                <h1>Editar Informações de Contato</h1>
                <div>
                    <form action="#" method="post">
                        <div>
                            <label for="email">E-mail de Contato:</label>
                            <input type="email" id="email" name="email" value="contato@acapra.org.br">
                        </div>

                        <div>
                            <label for="telefone">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" value="(47) 99999-9999">
                        </div>

                        <div>
                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" value="Rua das Flores, 123 - Centro">
                        </div>

                        <div>
                            <label for="horario">Horário de Atendimento:</label>
                            <input type="text" id="horario" name="horario" value="Seg a Sex das 08h às 17h">
                        </div>

                        <div>
                            <label for="facebook">Facebook:</label>
                            <input type="text" id="facebook" name="facebook" value="https://facebook.com/acapra">
                        </div>

                        <div>
                            <label for="instagram">Instagram:</label>
                            <input type="text" id="instagram" name="instagram" value="https://instagram.com/acapra">
                        </div>

                        <div>
                            <button type="submit">Salvar Alterações</button>
                            <button type="reset">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
