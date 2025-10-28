@extends('Admin.Layout.index')

@section('title', 'Animais - Editar')

@section('content')
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title"><i class="fas fa-edit me-3"></i>Ediar Animal</h1>
    </div>

    <form method="POST" action="{{ Route('animais.update', $animal->id) }}" id="novoAnimalForm" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $animal->id }}">

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
                        <input type="text" placeholder="Nome do animal" class="form-control" id="nomeAnimal" name="nome" value="{{ $animal->nome }}" required>
                        @error('nome')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="especie" class="form-label">Espécie <span class="required">*</span></label>
                        <select class="form-select" id="especie" name="especie" required>
                            <option value="" disabled {{ $animal->especie ? '' : 'selected' }}>Selecione a espécie</option>
                            <option value="cao" {{ $animal->especie == 'cao' ? 'selected' : '' }}>Cão</option>
                            <option value="gato" {{ $animal->especie == 'gato' ? 'selected' : '' }}>Gato</option>
                        </select>
                        @error('especie')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="raca" class="form-label">Raça</label>
                        <input type="text" class="form-control" id="raca" name="raca" value="{{ $animal->raca }}" placeholder="Ex: Labrador, SRD">
                        @error('raca')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="idade" class="form-label">Idade <span class="required">*</span></label>
                        <input type="text" class="form-control" id="idade" name="idade" value="{{ $animal->idade }}" placeholder="Ex: 2 anos, 6 meses" required>
                        @error('idade')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="peso" class="form-label">Peso (kg)</label>
                        <input type="number" class="form-control" id="peso" name="peso" value="{{ $animal->peso }}" step="0.1" min="0" placeholder="Ex: 15.5">
                        @error('peso')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="genero" class="form-label">Gênero <span class="required">*</span></label>
                        <select class="form-select" id="genero" name="genero" required>
                            <option value="" disabled {{ $animal->genero ? '' : 'selected'}}>Selecione o gênero</option>
                            <option value="macho" {{ $animal->genero == 'macho' ? 'selected' : '' }}>Macho</option>
                            <option value="femea" {{ $animal->genero == 'femea' ? 'selected' : '' }}>Fêmea</option>
                        </select>
                        @error('genero')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="porte" class="form-label">Porte</label>
                        <select class="form-select" id="porte" name="porte">
                            <option value="" disabled {{ $animal->porte ? '' : 'selected' }}>Selecione o porte</option>
                            <option value="pequeno" {{ $animal->porte == 'pequeno' ? 'selected' : '' }}>Pequeno</option>
                            <option value="medio" {{ $animal->porte == 'medio' ? 'selected' : '' }}>Médio</option>
                            <option value="grande" {{ $animal->porte == 'grande' ? 'selected' : '' }}>Grande</option>
                        </select>
                        @error('porte')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="cor" class="form-label">Cor/Pelagem</label>
                        <input type="text" class="form-control" id="cor" name="cor" value="{{ $animal->cor }}" placeholder="Ex: Marrom e branco, Preto, Rajado">
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
                            <option value="" disabled {{ $animal->vacinado ? '' : 'selected'}}>Selecione</option>
                            <option value="sim" {{ $animal->vacinado == 'sim' ? 'selected' : ''}}>Sim - Completo</option>
                            <option value="parcial" {{ $animal->vacinado == 'parcial' ? 'selected' : ''}}>Parcialmente</option>
                            <option value="nao" {{ $animal->vacinado == 'nao' ? 'selected' : ''}}>Não</option>
                        </select>
                        @error('vacinado')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="castrado" class="form-label">Castrado <span class="required">*</span></label>
                        <select class="form-select" id="castrado" name="castrado" required>
                            <option value="" disabled {{ $animal->castrado ? '' : 'selected'}}>Selecione</option>
                            <option value="sim" {{ $animal->castrado == 'sim' ? 'selected' : ''}}>Sim</option>
                            <option value="nao" {{ $animal->castrado == 'nao' ? 'selected' : ''}}>Não</option>
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
                            <option value="" disabled {{ $animal->vermifugado ? '' : 'selected'}}>Selecione</option>
                            <option value="sim" {{ $animal->vermifugado == 'sim' ? 'selected' : ''}}>Sim</option>
                            <option value="nao" {{ $animal->vermifugado == 'nao' ? 'selected' : ''}}>Não</option>
                        </select>
                        @error('vermifugado')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="microchip" class="form-label">Microchipado</label>
                        <select class="form-select" id="microchip" name="microchip">
                            <option value="" disabled {{ $animal->microchip ? '' : 'selected'}}>Selecione</option>
                            <option value="sim" {{ $animal->microchip == 'sim' ? 'selected' : ''}}>Sim</option>
                            <option value="nao" {{ $animal->microchip == 'nao' ? 'selected' : ''}}>Não</option>
                        </select>
                        @error('microchip')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="observacoesSaude" class="form-label">Observações de Saúde</label>
                    <textarea class="form-control" id="observacoesSaude" name="observacoes_saude" rows="3" placeholder="Descreva qualquer condição especial, medicamentos, tratamentos...">
                    {{ $animal->observacoes_saude }}
                    </textarea>
                    @error('observacoes_saude')
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
                @if ($animal->imagem)
                <div class="mt-3">
                    <img src="{{ asset('Imagem_animal/' . $animal->imagem) }}" alt="Imagem atual" class="img-thumbnail" style="max-width: 200px;">
                </div>
                @endif
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
                    <textarea class="form-control" id="historia" name="historia" rows="4" placeholder="Conte como o animal chegou até a ACAPRA, sua história de vida...">
                    {{ $animal->historia }}
                    </textarea>
                    @error('historia')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição Geral</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="4" placeholder="Descreva o animal de forma atrativa para potenciais adotantes...">
                    {{ $animal->descricao }}
                    </textarea>
                    @error('historia')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="observacoes" class="form-label">Observações Internas</label>
                    <textarea class="form-control" id="observacoes" name="observacoes" rows="3" placeholder="Observações para uso interno da equipe...">
                    {{ $animal->observacoes }}
                    </textarea>
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
            <div class="form-card-body" style="display: none">
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
                    <a href="{{ Route('animais') }}" type="button" class="btn btn-outline-secondary me-3">
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