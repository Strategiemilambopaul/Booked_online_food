<?php
if(session_status() === PHP_SESSION_NONE) session_start();

require "class/MainController.php";

$recette = new MainController();
if(session_status() === PHP_SESSION_NONE) session_start();





$appreciations = $recette->appreciationsClient();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <title>Tovo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    
    <link href="img/favicon.ico" rel="icon">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet">
    <style>
 .hero-header {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/main.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.hero-header img {
    animation: imgRotate 50s linear infinite;
}

@keyframes imgRotate { 
    100% { 
        transform: rotate(360deg); 
    } 
}

.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, .5);
}

    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        


        
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                <img src="img/logol2.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active">Acceuil</a>
                        <a href="about.php" class="nav-item nav-link">A PROPOS</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                             
                                <a href="team.php" class="dropdown-item">Notre equipe</a>
                                <a href="testimonial.php" class="dropdown-item">Reservations</a>
                                <a href="appreciation.php" class="dropdown-item">Appreciation</a>
                                <a href="Cuisson.php" class="dropdown-item">Recettes</a>


                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Appreciations</a>
                        <?php if(isset($_SESSION) and !empty($_SESSION['user'])):?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Client</a>
                                <div class="dropdown-menu m-0">
                                    <a href="booking.html" class="dropdown-item"><?=$_SESSION['user']['nom']?></a>
                                    <a href="team.html" class="dropdown-item"><?=$_SESSION['user']['email']?></a>
                                    <a href="logout.php" class="dropdown-item">se déconnectez</a>
                                </div>
                            </div>
                            <a href="logout.php" class="nav-item nav-link">⚙ logout</a>
                        <?php endif?>
                    </div>
                    <a href="" class="btn btn-primary py-2 px-4"></a>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">-Commentaires-</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        


        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">List</h5>
                    <h1 class="mb-5">Les avis des Clients</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-user fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Nos Clients</small>
                                    <h6 class="mt-n1 mb-0">Leur appreciations</h6>
                                </div>
                            </a>
                        </li>
                        
                       
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php foreach($appreciations as $appreciation):?>
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="img/default.png" alt="" style="width: 90px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span><a href="#" class="nav-item nav-link"><?= $appreciation['nom']?></a></span>
                                                </h5>
                                                <small class="fst-italic"><?= $appreciation['content']?></small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach?>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    
    <script src="js/main.js"></script>
</body>

</html>