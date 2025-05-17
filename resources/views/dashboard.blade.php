<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Administrativo - ACAPRA</title>
    <link rel="stylesheet" href="/dashboard.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

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
                <a>
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
                <h1>Dashboard Administrativo</h1>
                <div>
                    <button>
                        <i class="fas fa-plus"></i> Novo Animal
                    </button>
                </div>
            </div>

             <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <i class="fas fa-dog"></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value">24</div>
                        <div class="stat-label">Animais para Adoção</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value">12</div>
                        <div class="stat-label">Formulários Pendentes</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value">156</div>
                        <div class="stat-label">Adoções Realizadas</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="stat-info">
                        <div class="stat-value">8</div>
                        <div class="stat-label">Novas Mensagens</div>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <div>
                        <h5>Gerenciar Animais</h5>
                        <div>
                            <button>
                                <i class="fas fa-filter"></i> Filtrar
                            </button>
                            <button>
                                <i class="fas fa-plus"></i> Adicionar Animal
                            </button>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>Nome</th>
                                        <th>Espécie</th>
                                        <th>Raça</th>
                                        <th>Idade</th>
                                        <th>Gênero</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="adoteee.png" alt="Luna" /></td>
                                        <td>Luna</td>
                                        <td>Cachorro</td>
                                        <td>Labrador</td>
                                        <td>2 anos</td>
                                        <td>Fêmea</td>
                                        <td>Disponível</td>
                                        <td>
                                            <a href="#" title="Visualizar"><i class="fas fa-eye"></i></a>
                                            <a href="#" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a href="#" title="Excluir"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="adoteee.png" alt="Cooper" /></td>
                                        <td>Cooper</td>
                                        <td>Cachorro</td>
                                        <td>Golden Retriever</td>
                                        <td>3 anos</td>
                                        <td>Macho</td>
                                        <td>Processo de Adoção</td>
                                        <td>
                                            <a href="#" title="Visualizar"><i class="fas fa-eye"></i></a>
                                            <a href="#" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a href="#" title="Excluir"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="adoteee.png" alt="Mia" /></td>
                                        <td>Mia</td>
                                        <td>Gato</td>
                                        <td>Siamês</td>
                                        <td>1 ano</td>
                                        <td>Fêmea</td>
                                        <td>Adotado</td>
                                        <td>
                                            <a href="#" title="Visualizar"><i class="fas fa-eye"></i></a>
                                            <a href="#" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a href="#" title="Excluir"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="adoteee.png" alt="Max" /></td>
                                        <td>Max</td>
                                        <td>Cachorro</td>
                                        <td>Pinscher</td>
                                        <td>4 anos</td>
                                        <td>Macho</td>
                                        <td>Disponível</td>
                                        <td>
                                            <a href="#" title="Visualizar"><i class="fas fa-eye"></i></a>
                                            <a href="#" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a href="#" title="Excluir"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="adoteee.png" alt="Bella" /></td>
                                        <td>Bella</td>
                                        <td>Cachorro</td>
                                        <td>Poodle</td>
                                        <td>2 anos</td>
                                        <td>Fêmea</td>
                                        <td>Disponível</td>
                                        <td>
                                            <a href="#" title="Visualizar"><i class="fas fa-eye"></i></a>
                                            <a href="#" title="Editar"><i class="fas fa-edit"></i></a>
                                            <a href="#" title="Excluir"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <div>Mostrando 5 de 24 animais</div>
                        <nav>
                            <ul>
                                <li><a href="#">Anterior</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Próximo</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script>
    document.getElementById('toggleSidebar').addEventListener('click', function ()) {
    document.getElementById('sidebar').classList.toggle('collapsed');
    document.body.classList.toggle('sidebar-collapsed');
  </script>
