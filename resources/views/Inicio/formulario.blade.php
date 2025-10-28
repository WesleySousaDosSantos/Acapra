@extends('inicio.layout.index')

@section('section')

<section class="form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-container">
                    <div class="form-header">
                        <h1>Formulário de Adoção</h1>
                        <p>Preencha os dados abaixo para iniciar o processo de adoção</p>
                    </div>

                    <div class="form-body">
                        <div class="pet-info">
                            <div class="d-flex flex-row justify-content-around align-items-center w-100">
                                <div class="col-md-2 text-center mb-3 mb-md-0">
                                    <img src="/Imagem_animal/{{ $animais->imagem }}" alt="Luna" class="pet-image">
                                </div>
                                <div class="col-md-10">
                                    <h3 class="pet-info-title mb-2">Informações do Animal</h3>
                                    <div class="pet-name">{{ $animais->nome }}</div>
                                    <div class="pet-details">{{ $animais->genero }} • {{ $animais->raca }} • {{ $animais->idade }}</div>
                                    <div class="pet-details">Vacinada: {{ $animais->vacinado  }} • Castrada: {{ $animais->castrado }}</div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ Route('formulario.store') }}" method="post" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif

                            <input type="hidden" name="animal_id" value="{{ $animais->id }}">

                            <h3 class="form-section-title">Informações Pessoais</h3>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="fullName" class="form-label required-field">Nome Completo</label>
                                    <input type="text" class="form-control" name="name" id="fullName" required>
                                    @error('name')
                                    <div style="color:brown">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="email" class="form-label required-field">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="phone" class="form-label required-field">Telefone</label>
                                    <input type="tel" class="form-control" name="phone" id="phone" required>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="age" class="form-label required-field">Idade</label>
                                    <input type="number" class="form-control" name="age" id="age" min="18" max="120" required>
                                    <div class="form-text">Se for menor de idade, seus responsáveis devem responder o formulário.</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="income" class="form-label required-field">Qual a sua renda?</label>
                                <select class="form-select" id="income" name="renda" required>
                                    <option value="" selected disabled>Selecione uma opção</option>
                                    <option value="ate-1000">Até R$ 1.000</option>
                                    <option value="1001-3000">R$ 1.001 a R$ 3.000</option>
                                    <option value="3001-5000">R$ 3.001 a R$ 5.000</option>
                                    <option value="acima-5000">Acima de R$ 5.000</option>
                                    <option value="nao-informar">Prefiro não informar</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="rgPhoto" class="form-label required-field">Foto do RG</label>
                                <input type="file" class="form-control file-upload-input" name="rgPhoto" id="rgPhoto" accept="image/*" required>
                                <div class="form-text">Envie uma foto clara do seu documento de identidade (RG ou CNH).</div>
                            </div>

                            <div class="form-group">
                                <label for="incomeProof" class="form-label required-field">Foto do Comprovante de Renda</label>
                                <input type="file" class="form-control file-upload-input" name="incomeProof" id="incomeProof" accept="image/*" required>
                                <div class="form-text">Envie holerite, declaração de imposto de renda ou outro comprovante.</div>
                            </div>

                            <h3 class="form-section-title mt-5">Informações de Residência</h3>

                            <div class="form-group">
                                <label for="address" class="form-label required-field">Qual seu endereço completo?</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Rua, número, CEP, complemento e ponto de referência" required>
                            </div>

                            <div class="form-group">
                                <label for="residenceType" class="form-label required-field">Você mora em casa ou apartamento?</label>
                                <select class="form-select" name="residential" id="residenceType" required>
                                    <option value="" selected disabled>Selecione uma opção</option>
                                    <option value="casa">Casa</option>
                                    <option value="apartamento">Apartamento</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="residenceOwnership" class="form-label required-field">A residência é própria ou alugada?</label>
                                <select class="form-select" name="property" id="residenceOwnership" required>
                                    <option value="" selected disabled>Selecione uma opção</option>
                                    <option value="propria">Própria</option>
                                    <option value="alugada">Alugada</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="petSpace" class="form-label required-field">Qual o local em que o animal irá ficar? A sua casa/apto possui um espaço adequado e cercado?</label>
                                <textarea class="form-control" name="petSpace" id="petSpace" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="locationPhoto" class="form-label required-field">Foto do Local onde o Animal Irá Ficar</label>
                                <input type="file" class="form-control file-upload-input" id="locationPhoto" accept="image/*" multiple required>
                                <div class="form-text">Envie fotos do terreno, casa, quintal, canil ou local onde o animal ficará.</div>
                                <div class="file-preview" id="locationPhotoPreview"></div>
                            </div>

                            @if ($animais->especie == 'gato')
                            <div class="form-group">
                                <label for="fencePhoto" class="form-label required-field">Foto das Telas/Cercas</label>
                                <input type="file" class="form-control file-upload-input" name="fencePhoto[]" id="fencePhoto" accept="image/*" multiple>
                                <div class="form-text">Envie fotos das telas de proteção, cercas ou muros que garantem a segurança do animal.</div>
                            </div>
                            @endif

                            <div class="form-group">
                                <label class="form-label required-field">Todos da sua residência concordam com a adoção?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="familyAgreement" id="familyAgreementYes" value="sim" required>
                                    <label class="form-check-label" for="familyAgreementYes">
                                        Sim
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="familyAgreement" id="familyAgreementNo" value="nao">
                                    <label class="form-check-label" for="familyAgreementNo">
                                        Não
                                    </label>
                                </div>
                            </div>

                            <h3 class="form-section-title mt-5">Informações sobre Animais</h3>

                            <div class="form-group">
                                <label class="form-label required-field">Você tem outros animais?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hasOtherPets" id="hasOtherPetsYes" value="sim" required>
                                    <label class="form-check-label" for="hasOtherPetsYes">
                                        Sim
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hasOtherPets" id="hasOtherPetsNo" value="nao">
                                    <label class="form-check-label" for="hasOtherPetsNo">
                                        Não
                                    </label>
                                </div>
                            </div>

                            <div class="form-group" id="otherPetsGroup" style="display: none;">
                                <label for="otherPets" class="form-label">Se sim, quantos e quais?</label>
                                <textarea class="form-control" id="otherPets" name="otherPets" rows="2"></textarea>
                            </div>


                            <div class="form-group" id="otherPetsVaccinatedGroup" style="display: none;">
                                <label class="form-label">São castrados e vacinados?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="otherPetsVaccinated" id="otherPetsVaccinatedYes" value="sim">
                                    <label class="form-check-label" for="otherPetsVaccinatedYes">
                                        Sim
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="otherPetsVaccinated" id="otherPetsVaccinatedNo" value="nao">
                                    <label class="form-check-label" for="otherPetsVaccinatedNo">
                                        Não
                                    </label>
                                </div>
                            </div>

                            <div id="otherPetsPhotosGroup" style="display: none;">
                                <h4 class="form-section-title mt-4 mb-3">Fotos dos Outros Animais</h4>
                                <div class="form-text mb-3">Adicione fotos de cada um dos seus animais de estimação.</div>

                                <div id="otherAnimalsContainer"></div>

                                <button type="button" class="btn btn-outline-primary mt-3" id="addAnimalBtn">
                                    <i class="fas fa-plus"></i> Adicionar Outro Animal
                                </button>
                            </div>

                            <div class="form-group" id="otherPetsPhotosGroup" style="display: none;">
                                <label for="otherPetsPhotos" class="form-label required-field">Fotos dos Outros Animais</label>
                                <input type="file" class="form-control file-upload-input" name="otherPetsPhotos[]" id="otherPetsPhotos" accept="image/*" multiple>
                                <div class="form-text">Envie fotos dos seus outros animais de estimação.</div>
                            </div>

                            <div class="form-group">
                                <label class="form-label required-field">A castração e vacinação do animal é OBRIGATÓRIA, você concorda com isso?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agreeVaccination" id="agreeVaccinationYes" value="sim" required>
                                    <label class="form-check-label" for="agreeVaccinationYes">
                                        Sim
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="agreeVaccination" id="agreeVaccinationNo" value="nao">
                                    <label class="form-check-label" for="agreeVaccinationNo">
                                        Não
                                    </label>
                                </div>
                            </div>

                            <h3 class="form-section-title mt-5">Termos e Condições</h3>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="termsAgreement" value="sim" required>
                                    <label class="form-check-label" for="termsAgreement">
                                        Declaro que li e concordo com os <a href="#" class="text-decoration-none">termos de adoção</a> da ACAPRA.
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="followUpAgreement" value="sim" required>
                                    <label class="form-check-label" for="followUpAgreement">
                                        Concordo em receber visitas de acompanhamento da ACAPRA após a adoção.
                                    </label>
                                </div>
                            </div>

                            <input type="hidden" name="status" value="Pendente">

                            <div class="d-flex justify-content-end gap-3 mt-5">
                                <button type="button" onclick="window.location.href='{{  Route('adocao') }}'" class="btn btn-cancel">Cancelar</button>
                                <button type="submit" class="btn btn-submit">Enviar Formulário</button>
                            </div>
                        </form>
                    </div>

                    <div class="form-footer">
                        <p>Após o envio do formulário, nossa equipe entrará em contato para agendar uma visita e dar continuidade ao processo de adoção.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hasOtherPetsYes = document.getElementById('hasOtherPetsYes');
        const hasOtherPetsNo = document.getElementById('hasOtherPetsNo');
        const otherPetsGroup = document.getElementById('otherPetsGroup');
        const otherPetsVaccinatedGroup = document.getElementById('otherPetsVaccinatedGroup');
        const otherPetsPhotosGroup = document.getElementById('otherPetsPhotosGroup');
        const vaccinationCardsGroup = document.getElementById('vaccinationCardsGroup');

        let animalCount = 0;
        const otherAnimalsContainer = document.getElementById('otherAnimalsContainer');
        const addAnimalBtn = document.getElementById('addAnimalBtn');

        hasOtherPetsYes.addEventListener('change', function() {
            if (this.checked) {
                otherPetsGroup.style.display = 'block';
                otherPetsVaccinatedGroup.style.display = 'block';
                otherPetsPhotosGroup.style.display = 'block';
                document.getElementById('otherPets').setAttribute('required', '');
                document.querySelectorAll('input[name="otherPetsVaccinated"]').forEach(radio => {
                    radio.setAttribute('required', '');
                });

                if (animalCount === 0) {
                    addAnimalEntry();
                }
            }
        });

        hasOtherPetsNo.addEventListener('change', function() {
            if (this.checked) {
                otherPetsGroup.style.display = 'none';
                otherPetsVaccinatedGroup.style.display = 'none';
                otherPetsPhotosGroup.style.display = 'none';
                document.getElementById('otherPets').removeAttribute('required');
                document.querySelectorAll('input[name="otherPetsVaccinated"]').forEach(radio => {
                    radio.removeAttribute('required');
                });

                otherAnimalsContainer.innerHTML = '';
                animalCount = 0;
            }
        });

        function addAnimalEntry() {
            animalCount++;
            const animalId = `animal-${animalCount}`;

            const animalEntry = document.createElement('div');
            animalEntry.className = 'animal-entry mb-4 p-3 border rounded';
            animalEntry.id = animalId;
            animalEntry.style.backgroundColor = '#f8f9fa';
            animalEntry.innerHTML = `
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0" style="color: var(--purple-primary);">
                            <i class="fas fa-paw"></i> Animal ${animalCount}
                        </h5>
                        <button type="button" class="btn btn-sm btn-outline-danger remove-animal-btn" data-animal-id="${animalId}">
                            <i class="fas fa-trash"></i> Remover
                        </button>
                    </div>
                    
                   <div class="form-group mb-0">
                        <label for="${animalId}-photo" class="form-label required-field">Foto do Animal</label>
                        <input type="file" class="form-control file-upload-input" id="${animalId}-photo" 
                            name="otherPetsPhotos[]" accept="image/*" required>
                        <div class="form-text">Envie uma foto clara do seu animal de estimação.</div>
                  </div>
                `;

            otherAnimalsContainer.appendChild(animalEntry);

            setupFilePreview(`${animalId}-photo`, `${animalId}-photo-preview`);

            const removeBtn = animalEntry.querySelector('.remove-animal-btn');
            removeBtn.addEventListener('click', function() {
                removeAnimalEntry(animalId);
            });
        }

        function removeAnimalEntry(animalId) {
            const animalEntry = document.getElementById(animalId);
            if (animalEntry) {
                animalEntry.remove();

                const remainingAnimals = otherAnimalsContainer.querySelectorAll('.animal-entry');
                remainingAnimals.forEach((entry, index) => {
                    const title = entry.querySelector('h5');
                    title.innerHTML = `<i class="fas fa-paw"></i> Animal ${index + 1}`;
                });

                animalCount = remainingAnimals.length;

                if (animalCount === 0) {
                    addAnimalEntry();
                }
            }
        }

        addAnimalBtn.addEventListener('click', function() {
            addAnimalEntry();
        });

        function setupFilePreview(inputId, previewId) {
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);

            if (!input || !preview) return;

            input.addEventListener('change', function(e) {
                const files = e.target.files;
                preview.innerHTML = '';

                if (files.length > 0) {
                    preview.classList.add('active');
                    Array.from(files).forEach((file, index) => {
                        const item = document.createElement('div');
                        item.className = 'file-preview-item';
                        item.innerHTML = `
                                <span class="file-preview-name">
                                    <i class="fas fa-file-image text-success"></i> ${file.name}
                                </span>
                                <i class="fas fa-times file-preview-remove" data-index="${index}"></i>
                            `;
                        preview.appendChild(item);
                    });
                } else {
                    preview.classList.remove('active');
                }
            });
        }
    });
</script>
@endsection