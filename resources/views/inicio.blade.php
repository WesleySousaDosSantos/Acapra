<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACAPRA - Adoção de Animais</title>
    <link rel="shortcut icon" type="imagex/png" href="./images/icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section class="hero">
        <header>
            <div class="container py-3">
                <div class="d-flex justify-content-around align-items-center">
                    <div class="logo-placeholder">
                        <i class="fas fa-paw"></i> ACAPRA
                    </div>
                    <nav>
                        <ul class="d-flex list-unstyled mb-0 gap-4 align-items-center">
                            <li><a href={{ Route('index') }} class="text-decoration-none">Home</a></li>
                            <li><a href="#" class="text-decoration-none">Sobre</a></li>
                            <li><a href="#" class="text-decoration-none">Contato</a></li>
                            <li><a href={{ Route('adocao') }} class="btn btn-purple">Adotar</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="container-geral-header">
            <div class="header">
                <div class="imagens">
                    <img src="dog.png" alt="Acapra" class="dog-header">
                    <!-- <img src="pattern-2.png" alt="Acapra" class="pattern"> -->
                </div>

                <div class="container-info">
                    <p class="subtitle">Com a sua ajuda</p>
                    <h1 class="fw-bold mb-4">Nós podemos Salvar os animais que vivem na rua</h1>
                    <p class="description mb-4">
                        Milhares de cães têm hoje o lar provisório na Acapra. Adotar é dar a esses animais uma segunda
                        chance. Faça a diferença, visite-nos.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                        <a href="#" class="btn btn-save">
                            <p>Salvar uma pequena vida</p>
                        </a>
                        <a href="#" class="btn btn-outline-light">Adote um Animal</a>
                    </div>
                    <div class="d-flex flex-column align-items-startcenter gap-3">
                        <p class="mb-0">Nossas outras redes:</p>
                        <span>
                            <a href="#" class="text-white text-decoration-none"><i class="fab fa-instagram"></i>
                                Instagram</a>
                            <a href="#" class="text-white text-decoration-none"><i class="fab fa-facebook"></i>
                                Facebook</a>
                        </span>
                    </div>
                    <img src="pattern.png" alt="Acapra">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon heart-icon mx-auto mb-3">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="fs-4 mb-3">Conheça Seu Novo Amigo</h3>
                        <p class="text-muted">Conheça pessoalmente o animal e veja se há uma conexão especial, sinta a
                            magia da adoção.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon home-icon mx-auto mb-3">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3 class="fs-4 mb-3">Cuide e Ame</h3>
                        <p class="text-muted">Leve seu novo amigo para casa, cuide com carinho e dê o amor que ele
                            merece.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon dog-icon mx-auto mb-3">
                            <i class="fas fa-dog"></i>
                        </div>
                        <h3 class="fs-4 mb-3">Escolha um novo amigo</h3>
                        <p class="text-muted">Explore a lista de animais em busca de um lar, e escolha o amigo perfeito
                            para você.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon heart-icon mx-auto mb-3">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="fs-4 mb-3">Ajude outros</h3>
                        <p class="text-muted">Diga sua experiência e inspire outros a adotar também, mostre amor por
                            todos os lados.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon support-icon mx-auto mb-3">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="fs-4 mb-3">Suporte</h3>
                        <p class="text-muted">Oferecemos suporte online 24/7 para garantir que todas as suas perguntas
                            sejam atendidas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon world-icon mx-auto mb-3">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="fs-4 mb-3">Mude o mundo</h3>
                        <p class="text-muted">Cada adoção muda vidas, tirando animais das ruas e garantindo um lar,
                            comida e cuidados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about py-5">
        <div class="container">
            <div class="row align-items-center quem-somos">
                <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                    <div class="about-image mx-auto"></div>
                </div>
                <div class="col-lg-7">
                    <h2 class="display-5 fw-bold mb-4">Quem somos?</h2>
                    <p class="mb-3">
                        Fundada em 2005, a Acapra é um farol de esperança para animais de rua. Com a ajuda de
                        voluntários dedicados, já ajudamos milhares de animais a encontrar lares afetuosos,
                        proporcionando uma nova história para eles nas casas de suas famílias adotivas. Nosso
                        compromisso é com o bem-estar de companhia.
                    </p>
                    <p class="tagline fst-italic">
                        Acapra - Transformando vidas por décadas.
                    </p>
                </div>
                <img src="pattern.png" alt="Acapra">
            </div>
        </div>
    </section>

    <section class="bg-light pt-5 text-center container-agora">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">O que está esperando?</h2>
            <a href="#" class="btn btn-purple btn-lg mb-5">Adotar agora</a>
            <div class="dogs-image">
                <img src="animaiss.png" alt="Acapra" class="animal">
            </div>
        </div>
    </section>

    <section class="donation py-5 text-center">
        <div class="container">
            <h2 class="display-5 fw-bold mb-4">Quer fazer uma doação?</h2>
            <a href="#" class="btn btn-outline-light btn-lg">Quero doar</a>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="display-6 fw-bold text-center mb-5">Veja nossas experiências compartilhadas aqui na Acapra</h2>

            <div class="position-relative">
                <div class="d-flex align-items-center">
                    <button class="slider-arrow prev me-3">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <div class="testimonial-slider d-flex overflow-auto">
                        <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                            <img src="adoteee.png" class="adoteAnimal mx-auto d-block mb-3"
                                alt="Cachorro adotado" width="80" height="80">
                            <h3 class="fs-5 fw-bold mb-2">Felipe Adams</h3>
                            <p class="text-muted mb-3">Meu cachorro é adorável e alegre para onde quer que eu o leve.
                            </p>
                        </div>

                        <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                            <img src="adoteee.png" class="adoteAnimal mx-auto d-block mb-3"
                                alt="Cachorro adotado" width="80" height="80">
                            <h3 class="fs-5 fw-bold mb-2">João Santos</h3>
                            <p class="text-muted mb-3">Adotar meu companheiro de quatro patas foi a melhor decisão para
                                mim.</p>
                        </div>

                        <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                            <img src="adoteee.png" class="adoteAnimal mx-auto d-block mb-3"
                                alt="Cachorro adotado" width="80" height="80">
                            <h3 class="fs-5 fw-bold mb-2">Ana Pereira</h3>
                            <p class="text-muted mb-3">Meu cachorro me acompanha a um verdadeiro membro da família
                                agora.</p>
                        </div>

                        <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                            <img src="adoteee.png" class="adoteAnimal mx-auto d-block mb-3"
                                alt="Cachorro adotado" width="80" height="80">
                            <h3 class="fs-5 fw-bold mb-2">Ana Pereira</h3>
                            <p class="text-muted mb-3">Meu cachorro me acompanha a um verdadeiro membro da família
                                agora.</p>
                        </div>

                        <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                            <img src="adoteee.png" class="adoteAnimal mx-auto d-block mb-3"
                                alt="Cachorro adotado" width="80" height="80">
                            <h3 class="fs-5 fw-bold mb-2">Ana Pereira</h3>
                            <p class="text-muted mb-3">Meu cachorro me acompanha a um verdadeiro membro da família
                                agora.</p>
                        </div>

                        <div class="testimonial-card bg-white p-4 rounded shadow-sm mx-2">
                            <img src="adoteee.png" class="adoteAnimal mx-auto d-block mb-3"
                                alt="Cachorro adotado" width="80" height="80">
                            <h3 class="fs-5 fw-bold mb-2">Pedro Costa</h3>
                            <p class="text-muted mb-3">Adotar me mostrou o que é experiência incrível. Ele me ama, eu o
                                amo.</p>
                        </div>
                    </div>

                    <button class="slider-arrow next ms-3">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-header">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Entre em Contato</h1>
            <p class="lead mb-0">Estamos aqui para ajudar você e nossos amigos de quatro patas</p>
        </div>
    </section>

    <div class="contact-container">
        <div class="paw-decoration paw-1">
            <i class="fas fa-paw fa-5x"></i>
        </div>
        <div class="paw-decoration paw-2">
            <i class="fas fa-paw fa-5x"></i>
        </div>

        <div class="container">
            <div class="contact-form-container">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <h3>Informações de Contato</h3>

                            <div class="contact-info-item">
                                <i class="fas fa-phone-alt"></i>
                                <div class="content">
                                    <h4>Telefone</h4>
                                    <p>(11) 9876-5432<br>(11) 1234-5678</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <i class="fas fa-envelope"></i>
                                <div class="content">
                                    <h4>Email</h4>
                                    <p>contato@acapra.org<br>adocao@acapra.org</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <i class="fas fa-clock"></i>
                                <div class="content">
                                    <h4>Horário de Funcionamento</h4>
                                    <p>Segunda a Sexta: 9h às 18h<br>Sábado: 9h às 14h</p>
                                </div>
                            </div>

                            <div class="social-contact">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3>Envie sua Mensagem</h3>

                            <form class="formulario" id="contactForm" action="{{ route('mensagens.create')}}" method="POST">
                                @csrf

                                @if(session('success'))
                                  <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" maxlength="16" placeholder="(00) 00000-0000">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="subject" class="form-label">Assunto</label>
                                        <select class="form-select" id="subject" name="subject" required>
                                            <option value="" selected disabled>Selecione um assunto</option>
                                            <option value="adocao_animal">Adoção de Animal</option>
                                            <option value="doacao">Doação</option>
                                            <option value="voluntario">Voluntariado</option>
                                            <option value="resgate">Resgate de Animal</option>
                                            <option value="outro">Outro Assunto</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="form-label">Mensagem</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Digite sua mensagem aqui..." required></textarea>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-submit">
                                        Enviar Mensagem <i class="fas fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold text-white">Perguntas Frequentes</h2>

            <div class="row justify-content-center container-pergunta-fq">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border rounded">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Como funciona o processo de adoção?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    O processo de adoção começa com uma visita ao nosso abrigo, onde você pode conhecer os animais disponíveis. Após escolher seu novo amigo, realizamos uma entrevista e visita à sua residência para garantir um ambiente adequado. Aprovado, você assina um termo de adoção responsável e leva seu novo companheiro para casa.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Quais são os requisitos para adotar um animal?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Para adotar, você precisa ser maior de 18 anos, apresentar documento de identidade e comprovante de residência. Também avaliamos se o ambiente é adequado para o animal e se toda a família está de acordo com a adoção. Nosso objetivo é garantir que o animal tenha um lar amoroso e seguro.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border rounded">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Como posso ajudar se não posso adotar?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Existem várias formas de ajudar! Você pode fazer doações financeiras, doar ração, medicamentos ou itens de limpeza. Também pode se tornar voluntário, ajudando nos cuidados com os animais, eventos de adoção ou divulgação nas redes sociais. Cada contribuição faz diferença na vida dos nossos animais.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Os animais são castrados e vacinados?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sim! Todos os nossos animais são entregues castrados, vacinados e vermifugados. Também realizamos exames para garantir que estão saudáveis antes da adoção. Esse cuidado é essencial para o bem-estar do animal e tranquilidade do adotante.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
                <div class="logo-placeholder text-white mb-3 mb-md-0">
                    <i class="fas fa-paw"></i> ACAPRA
                </div>
                <nav class="mb-3 mb-md-0">
                    <ul class="d-flex flex-wrap justify-content-center list-unstyled mb-0 gap-3">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Sobre</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contato</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Adotar</a></li>
                    </ul>
                </nav>
            </div>
            <hr>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pt-3">
                <p class="text-white mb-3 mb-md-0">© Acapra - Acapra 2025. Todos os direitos reservados.</p>
                <div class="social-icons d-flex gap-3">
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="jquery-3.7.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.testimonial-slider');
            const prevBtn = document.querySelector('.slider-arrow.prev');
            const nextBtn = document.querySelector('.slider-arrow.next');
            const cardWidth = 200;

            prevBtn.addEventListener('click', function() {
                slider.scrollBy({
                    left: -cardWidth,
                    behavior: 'smooth'
                });
            });

            nextBtn.addEventListener('click', function() {
                slider.scrollBy({
                    left: cardWidth,
                    behavior: 'smooth'
                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $(".formulario").submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ route('mensagens.create') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert("Mensagem enviada com sucesso!");
                        $(".formulario")[0].reset(); 
                    },
                    error: function(xhr) {
                        alert("Erro ao enviar a mensagem!");
                    }
                });
            });
        });
    </script>

</body>

</html>