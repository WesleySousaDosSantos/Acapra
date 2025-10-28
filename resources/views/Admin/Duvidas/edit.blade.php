@extends('Admin.Layout.index')

@section('title', 'Dúvidas')

@section('css')
<style>
    .section-title {
        color: var(--primary-color);
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--accent-color);
    }

    .required {
        color: #dc3545;
    }
</style>
@endsection

@section('content')
<div class="main-content">
    <div class="dashboard-header">
        <h1 class="dashboard-title"><i class="fas fa-edit me-3"></i>Editar Dúvida</h1>
    </div>

    <form class="tab-pane fade show" action="{{ Route('duvidas.update', $duvidas->id ) }}" method="POST" id="animals">
        @csrf
        <input type="hidden" name="id" value="{{ $duvidas->id }}">

        <div class="content-card">
            <div class="content-card-body p-4">
                <div class="form-section">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título <span class="required">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            <input type="text" placeholder="Titulo" class="form-control" id="titulo" name="titulo" value="{{ $duvidas->titulo }}" required maxlength="100">
                            @error('titulo')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="table-responsive">
                    <div class="form-section">
                        <label for="titulo" class="form-label">Dúvida <span class="required">*</span></label>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Dúvida" id="pergunta" name="descricao" rows="4" required maxlength="1000">{{ $duvidas->descricao }}</textarea>
                            @error('descricao')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ Route('duvidas') }}" class="btn btn-secondary me-3">
                            <i class="fas fa-arrow-left me-2"></i>Voltar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check me-2"></i>Salvar Alterações
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection