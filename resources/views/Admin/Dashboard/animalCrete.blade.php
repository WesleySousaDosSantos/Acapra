@extends('Admin.Layout.index')

@section('title', 'Animais')

@section('content')
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title"><i class="fas fa-add me-3"></i>Cadastrar Novo Animal</h1>
    </div>

    <form action="{{ Route('dashboard.animal.store') }}" method="POST" id="novoAnimalForm" enctype="multipart/form-data">
        @csrf
        <div class="form-card">
            <div class="form-card-header">
                <h5 class="form-card-title">
                    <i class="fas fa-info-circle"></i>
                    Informações Básicas
                </h5>
            </div>
            <div class="form-card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nomeAnimal" class="form-label">Nome do Animal <span class="required">*</span></label>
                        <input type="text" placeholder="Nome do animal" class="form-control" id="nomeAnimal" name="nome" required>
                        @error('nome')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="especie" class="form-label">Espécie <span class="required">*</span></label>
                        <select class="form-select" id="especie" name="especie" required>
                            <option value="" selected disabled>Selecione a espécie</option>
                            <option value="cao">Cão</option>
                            <option value="gato">Gato</option>
                        </select>
                        @error('especie')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="raca" class="form-label">Raça</label>
                        <input type="text" class="form-control" id="raca" name="raca" placeholder="Ex: Labrador, SRD">
                        @error('raca')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="idade" class="form-label">Idade <span class="required">*</span></label>
                        <input type="text" class="form-control" id="idade" name="idade" placeholder="Ex: 2 anos, 6 meses" required>
                        @error('idade')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="peso" class="form-label">Peso (kg)</label>
                        <input type="number" class="form-control" id="peso" name="peso" step="0.1" min="0" placeholder="Ex: 15.5">
                        @error('peso')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="genero" class="form-label">Gênero <span class="required">*</span></label>
                        <select class="form-select" id="genero" name="genero" required>
                            <option value="" selected disabled>Selecione o gênero</option>
                            <option value="macho">Macho</option>
                            <option value="femea">Fêmea</option>
                        </select>
                        @error('genero')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="porte" class="form-label">Porte</label>
                        <select class="form-select" id="porte" name="porte">
                            <option value="" selected disabled>Selecione o porte</option>
                            <option value="pequeno">Pequeno</option>
                            <option value="medio">Médio</option>
                            <option value="grande">Grande</option>
                        </select>
                        @error('porte')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="cor" class="form-label">Cor/Pelagem</label>
                        <input type="text" class="form-control" id="cor" name="cor" placeholder="Ex: Marrom e branco, Preto, Rajado">
                        @error('cor')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="form-card">
            <div class="form-card-header">
                <h5 class="form-card-title">
                    <i class="fas fa-heartbeat"></i>
                    Informações de Saúde
                </h5>
            </div>
            <div class="form-card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vacinado" class="form-label">Vacinado <span class="required">*</span></label>
                        <select class="form-select" id="vacinado" name="vacinado" required>
                            <option value="" selected disabled>Selecione</option>
                            <option value="sim">Sim - Completo</option>
                            <option value="parcial">Parcialmente</option>
                            <option value="nao">Não</option>
                        </select>
                        @error('vacinado')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="castrado" class="form-label">Castrado <span class="required">*</span></label>
                        <select class="form-select" id="castrado" name="castrado" required>
                            <option value="" selected disabled>Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                        @error('vacinado')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="vermifugado" class="form-label">Vermifugado</label>
                        <select class="form-select" id="vermifugado" name="vermifugado">
                            <option value="" selected disabled>Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                        @error('vermifugado')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="microchip" class="form-label">Microchipado</label>
                        <select class="form-select" id="microchip" name="microchip">
                            <option value="" selected disabled>Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                        @error('microchip')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="observacoesSaude" class="form-label">Observações de Saúde</label>
                    <textarea class="form-control" id="observacoesSaude" name="observacoesSaude" rows="3" placeholder="Descreva qualquer condição especial, medicamentos, tratamentos..."></textarea>
                    @error('observacoesSaude')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-card">
            <div class="form-card-header">
                <h5 class="form-card-title">
                    <i class="fas fa-camera"></i>
                    Fotos do Animal
                </h5>
            </div>
            <div class="form-card-body">
                <div class="photo-upload-area" id="photoUploadArea">
                    <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                    <h5>Clique aqui ou arraste as fotos</h5>
                    <p class="text-muted">Formatos aceitos: JPG, PNG, GIF (máx. 5MB cada)</p>
                    <input type="file" id="fotosAnimal" name="imagem" multiple style="display: none;">
                    <button
                        type="button"
                        class="btn btn-outline-purple mt-2"
                        onclick="document.getElementById('fotosAnimal').click()">
                        <i class="fas fa-plus me-2"></i>Selecionar Fotos
                    </button>
                    @error('imagem')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="photo-preview-container" id="photoPreviewContainer"></div>
            </div>
        </div>

        <div class="form-card">
            <div class="form-card-header">
                <h5 class="form-card-title">
                    <i class="fas fa-book"></i>
                    História e Observações
                </h5>
            </div>
            <div class="form-card-body">
                <div class="mb-3">
                    <label for="historia" class="form-label">História do Animal</label>
                    <textarea class="form-control" id="historia" name="historia" rows="4" placeholder="Conte como o animal chegou até a ACAPRA, sua história de vida..."></textarea>
                    @error('historia')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição Geral</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="4" placeholder="Descreva o animal de forma atrativa para potenciais adotantes..."></textarea>
                    @error('historia')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="observacoes" class="form-label">Observações Internas</label>
                    <textarea class="form-control" id="observacoes" name="observacoes" rows="3" placeholder="Observações para uso interno da equipe..."></textarea>
                    @error('observacoes')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-card">
            <div class="form-card-header" style="display: none;">
                <h5 class="form-card-title">
                    <i class="fas fa-toggle-on"></i>
                    Status e Disponibilidade
                </h5>
            </div>
            <div class="form-card-body" style="display: none;">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label">Status <span class="required">*</span></label>
                        <input type="hidden" placeholder="Nome do animal" class="form-control" id="nomeAnimal" name="status" value="disponivel">
                        @error('status')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <div class="progress-indicator">
                    <i class="fas fa-info-circle me-2"></i>
                    Preencha todos os campos obrigatórios (*)
                </div>
                <div>
                    <a href="{{ Route('dashboard') }}" type="button" class="btn btn-outline-secondary me-3">
                        <i class="fas fa-arrow-left me-2"></i>Voltar
                    </a>

                    <button type="submit" class="btn btn-purple">
                        <i class="fas fa-check me-2"></i>Cadastrar Animal
                    </button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection