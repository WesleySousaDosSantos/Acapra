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

                        <form id="adoptionForm" action="{{ Route('formulario.store') }}" method="post" enctype="multipart/form-data">
                            @method('POST')
                            @csrf

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

        function toggleOtherPetsFields() {
            if (hasOtherPetsYes.checked) {
                otherPetsGroup.style.display = 'block';
                otherPetsVaccinatedGroup.style.display = 'block';
            } else {
                otherPetsGroup.style.display = 'none';
                otherPetsVaccinatedGroup.style.display = 'none';
            }
        }

        hasOtherPetsYes.addEventListener('change', toggleOtherPetsFields);
        hasOtherPetsNo.addEventListener('change', toggleOtherPetsFields);

        toggleOtherPetsFields();
    });
</script>
@endsection