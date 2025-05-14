<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrativo - ACAPRA</title>
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
                <a href="`{{ Route('contato') }}">
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

            <div>
                <div>
                    <div>
                        <i class="fas fa-dog"></i>
                    </div>
                    <div>
                        <div>24</div>
                        <div>Animais para Adoção</div>
                    </div>
                </div>

                <div>
                    <div>
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div>
                        <div>12</div>
                        <div>Formulários Pendentes</div>
                    </div>
                </div>

                <div>
                    <div>
                        <i class="fas fa-home"></i>
                    </div>
                    <div>
                        <div>156</div>
                        <div>Adoções Realizadas</div>
                    </div>
                </div>

                <div>
                    <div>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <div>8</div>
                        <div>Novas Mensagens</div>
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
                                        <td><img src="adoteee.png" alt="Luna"></td>
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
                                        <td><img src="adoteee.png" alt="Cooper"></td>
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
                                        <td><img src="adoteee.png" alt="Mia"></td>
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
                                        <td><img src="adoteee.png" alt="Max"></td>
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
                                        <td><img src="adoteee.png" alt="Bella"></td>
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
</body>

</html>
