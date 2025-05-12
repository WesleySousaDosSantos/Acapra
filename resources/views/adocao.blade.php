<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adotar - ACAPRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <header style="background-color: rebeccapurple;">
        <div class="container py-3">
            <div class="d-flex justify-content-around align-items-center">
                <div class="logo-placeholder" style="color: white;">
                    <i class="fas fa-paw"></i> ACAPRA
                </div>
                <nav>
                    <ul class="d-flex list-unstyled mb-0 gap-4 align-items-center">
                        <li><a href="#" class="text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-decoration-none">Sobre</a></li>
                        <li><a href="#" class="text-decoration-none">Contato</a></li>
                        <li><a href="#" class="btn btn-purple">Adotar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

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
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Cooper">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Cooper</div>
                                <div class="pet-gender">
                                    <i class="fas fa-mars"></i> Macho
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Luna">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Luna</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Cooper">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Cooper</div>
                                <div class="pet-gender">
                                    <i class="fas fa-mars"></i> Macho
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="dog">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Cooper">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Cooper</div>
                                <div class="pet-gender">
                                    <i class="fas fa-mars"></i> Macho
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pet-item" data-type="cat" style="display: none;">
                    <div class="pet-card">
                        <div class="pet-image">
                            <img src="adoteee.png" alt="Mia">
                        </div>
                        <div class="pet-info">
                            <div>
                                <div class="pet-name">Mia</div>
                                <div class="pet-gender">
                                    <i class="fas fa-venus"></i> Fêmea
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-paw"></i>
                            </div>
                        </div>
                        <div class="pet-actions">
                            <button class="btn btn-adopt">
                                <i class="fas fa-heart"></i> ADOTAR
                            </button>
                            <button class="btn btn-info">
                                <i class="fas fa-circle-info"></i> INFORMAÇÕES
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-dog">
                <img src="dog-adocao.png" alt="Cachorro" class="img-fluid">
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
                        <li><a href="index.html" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Sobre</a></li>
                        <li><a href="contato.html" class="text-white text-decoration-none">Contato</a></li>
                        <li><a href="adotar.html" class="text-white text-decoration-none">Adotar</a></li>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const petItems = document.querySelectorAll('.pet-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    petItems.forEach(item => {
                        if (filterValue === 'dogs' && item.getAttribute('data-type') === 'dog') {
                            item.style.display = 'block';
                        } else if (filterValue === 'cats' && item.getAttribute('data-type') === 'cat') {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>