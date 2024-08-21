<?php
if(session_status() === PHP_SESSION_NONE) session_start();

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
                        <a href="about.php" class="nav-item nav-link">A propos</a>
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
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Savourez nos<br>Delicieux repas</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Au coeur de notre culture africaine congalise </p>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"></a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.PNG" alt="" width="450" height="350">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

<br>
<br>
<br>
<br>
<br>
       <center><h3>VOICI NOS COORDONEES</h3></center>

        
    
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                     <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>C/Mont Ngafula Q/Mbudi A/Verbiste N/38</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+243 89 788 77 30</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>tovohenrietto223@gmail.com</p>
                         <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>  
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Horraire</h4>
                        <h5 class="text-light fw-normal">Lundi - Samedi</h5>
                        <p>9H - 21H </p>
                        <h5 class="text-light fw-normal">Dimanche</h5>
                        <p>Ferme</p>

                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Henrietto Tovo</a>, 
							
		
						 <a class="border-bottom" href="https://htmlcodex.com">FASI UPC</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">UPC</a>
                                <a href="">L2 LMD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        
        <a href="index.html" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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