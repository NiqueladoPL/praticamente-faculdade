<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Praticamente</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Av. Paulo Migliorini, 303, Extrema/MG</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>praticamente@faex.edu.br</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Contatos:</small>
                <a class="text-body ms-3" href="https://api.whatsapp.com/send?phone=5511998487270"><i class="fab fa-whatsapp"></i></a>               
                <a class="text-body ms-3" href="https://www.instagram.com/praticos.mp/"><i class="fab fa-instagram"></i></a>
                
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Prat<span class="text-secondary">icame</span>nte</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="sobre.php" class="nav-item nav-link">Sobre</a>
                    <a href="produto.php" class="nav-item nav-link">Produtos</a>                    
                    <a href="contato.php" class="nav-item nav-link">Contato</a>
                </div>
                <div class="d-none d-lg-flex ms-2">                   
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="admin/login.php">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="carrinho.php">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Contato</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Contato</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Contato</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+011 99848_7270</p>
                        <h5 class="text-white">Email</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>praticamente@faex.edu.br</p>
                        <h5 class="text-white">Endereço</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>Rua Guilherme José de Oliveira, Nº 74,
                                                                Bairro: centro, CEP: 12935-000, Vargem/São Paulo</p>
                        <h5 class="text-white">Outros meios</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://api.whatsapp.com/send?phone=5511998487270"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>                                                      
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Gostaria de realizar uma proposta, pedido especial ou alguma denúncia? <br> Entre em contato via e-mail pelo formulário abaixo. </p>
                    <form action="https://formsubmit.co/alexspassoni@gmail.com" method="POST" class="form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Seu Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Seu Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="_subject" placeholder="Subject" name="_subject">
                                    <label for="subject">Assunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 200px"></textarea>
                                    <label for="message">Mensagem</label>
                                </div>
                            </div>
                            <input type="hidden" name="_next" value="http://localhost/praticamente_organic/contato.php">
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
        <iframe class="w-100" style="height: 450px;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5534384471603!2d-46.418972425582744!3d-22.89294903737491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceb3dcb67a2fad%3A0xd7408292c0b89448!2sR.%20Guilherme%20Jos%C3%A9%20de%20Oliveira%2C%2074%2C%20Vargem%20-%20SP%2C%2012935-000!5e0!3m2!1spt-BR!2sbr!4v1685809204866!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
    </div>
    <!-- Google Map End -->

    <!-- Footer Start -->
        <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h1 class="fw-bold text-primary m-0">Prat<span class="text-secondary">icame</span>nte</h1>
                        <p>Jamais coloque nada acima da sua saúde, ela é o seu bem mais valioso. Proteja-se!</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" target="_blank" href="https://api.whatsapp.com/send?phone=5511998487270"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" target="_blank" href="https://www.instagram.com/praticos.mp/"><i class="fab fa-instagram"></i></a>                        
                        
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Endereço</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Rua Guilherme José de Oliveira, Nº 74,
                                                                    Bairro: centro, CEP: 12935-000, Vargem/São Paulo</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+011 99848_7270</p>
                        <p><i class="fa fa-envelope me-3"></i>praticamente@faex.edu.br</p>
                    </div>                                
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">praticamente.faex.edu.br</a>, Todos os direitos reservados.
                        </div>
                        <!-- <div class="col-md-6 text-center text-md-end">
                            </*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="contato.php" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>