@extends('inicio.layout.index')

@section('section')
<section class="adoption-content">
    <div class="container">
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="dogs">
                <i class="fas fa-dog"></i> Cachorros
            </button>
            <button class="filter-btn" data-filter="cats">
                <i class="fas fa-cat"></i> Gatos
            </button>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <div class="adoption-message">
                <i class="fas fa-info"></i>
                <span>Lembre-se você está <a href="#">adotando</a>, adote com <a href="#">amor</a>!</span>
            </div>
        </div>

        <div class="row" id="petsContainer">
            @foreach ($animais as $animal)
            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item"
                data-type="{{ $animal->especie == 'cao' ? 'dog' : 'cat' }}">
                <div class="pet-card">
                    <div class="pet-image">
                        <img src="/Imagem_animal/{{ $animal->imagem }}" alt="adoção">
                    </div>
                    <div class="pet-info">
                        <div>
                            <div class="pet-name">{{ $animal->nome }}</div>
                            <div class="pet-gender">
                                @if ($animal->genero == 'femea')
                                <i class="fas fa-venus"></i> Fêmea
                                @else
                                <i class="fas fa-mars"></i> Macho
                                @endif
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-paw"></i>
                        </div>
                    </div>
                    <div class="pet-actions">
                        <a href="{{ route('formulario', $animal->id) }}" class="btn btn-adopt">
                            <i class="fas fa-heart"></i> ADOTAR
                        </a>

                        <button class="btn btn-info" data-bs-toggle="modal"
                            data-bs-target="#infoModal{{ $animal->id }}">
                            <i class="fas fa-circle-info"></i> INFORMAÇÕES
                        </button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="infoModal{{ $animal->id }}" tabindex="-1"
                aria-labelledby="infoModalLabel{{ $animal->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shadow-lg rounded-3">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="infoModalLabel{{ $animal->id }}">
                                🐾 {{ $animal->nome }}
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="/Imagem_animal/{{ $animal->imagem }}" alt="Imagem do animal"
                                class="img-fluid rounded mb-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Gênero:</strong>
                                    {{ $animal->genero }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Idade:</strong>
                                    {{ $animal->idade ?? 'Não informada' }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Raça:</strong>
                                    {{ $animal->raca ?? 'SRD (sem raça definida)' }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Descrição:</strong>
                                    {{ $animal->descricao ?? 'Esse pet ainda não tem descrição cadastrada.' }}
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('formulario', $animal->id) }}" class="btn btn-adopt">
                                <i class="fas fa-heart"></i> QUERO ADOTAR
                            </a>
                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">FECHAR</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="bottom-dog">
            <img src="dog-adocao.png" alt="Cachorro" class="img-fluid">
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const petItems = document.querySelectorAll('.pet-item');

        function aplicarFiltro(filtro) {
            petItems.forEach(item => {
                if (filtro === 'dogs' && item.getAttribute('data-type') === 'dog') {
                    item.style.display = 'block';
                } else if (filtro === 'cats' && item.getAttribute('data-type') === 'cat') {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                const filterValue = this.getAttribute('data-filter');
                aplicarFiltro(filterValue);
            });
        });

        aplicarFiltro('dogs');
    });
</script>
@endsection
