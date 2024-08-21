
<?php 

if(session_status() === PHP_SESSION_NONE) session_start();

    
    require "class/MainController.php";

   

    if(!isset($_SESSION) and !isset($_SESSION['user']))
    {
        header('Location: Auth/index.php');
    }

  

    $recette = new MainController();
    if(isset($_GET) and !empty($_GET)){
        $id = $_GET['plat'];
        $plat = $recette->getPlat($id);
        $iduser = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : header('Location: Auth/index.php') ;
        $user = $recette->getUser($iduser);

        if(isset($_POST) and !empty($_POST)){
            $id_user =  $_SESSION['user']['id'];
            $id_plat = $_GET['plat'];
            $content = $_POST['content'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $message = $recette->reserve($iduser,$id_plat,$content,$date,$time);

            header("Location: booking.php?plat=$id_plat");
            $plat = $plat['nom'];
            
        }
    }
   
    $date = date('Y-m-d');

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

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Information sur la Réservation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> Sorry, <span class="text-warning fw-bold"><?= $user['nom']?> </span>  Veuillez remplir tous les champs requis, pour arriver à reserver de la bonne recette de votre plat.
        </p>
        <p>
            <img src="img/<?= $plat['photo_path']?>" alt="" class="rounded" style="width: 100px; height:90px">
            <span><?= $plat['nom']?></span>
            <p><?= $plat['details']?></p>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ajuster ⚙</button>
      </div>
    </div>
  </div>
</div>

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
                                    <a href="booking.php" class="dropdown-item"><?=$_SESSION['user']['nom']?></a>
                                    <a href="team.php" class="dropdown-item"><?=$_SESSION['user']['email']?></a>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">-Reservation-</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <?php if(isset($message) and !empty($message)):?>
            <center> <p class="bg-primary text-white rounded py-2 px-2 w-2 fw-bold">Votre réservation a été placée avec succès 😊</p></center>

        <?php endif?>

        
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                   
                    <img src="img/<?=$plat['photo_path']?>" alt="<?=$plat['nom']?>" class="w-100 h-100">

                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Reserver une table en ligne</h1>
                        <form method="POST" action="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="nom" value="<?=$user['nom']?>" placeholder="Your Name" readonly>
                                        <label for="name">Votre nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" value="<?=$user['email']?>" placeholder="Your Email" readonly>
                                        <label for="email">Votre Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" value="<?=$plat['nom']?>" placeholder="Votre choix de la recette" readonly>
                                        <input type="hidden" class="form-control" name="plat" value="<?=$plat['id']?>" placeholder="Votre choix de la recette" readonly>
                                        <label for="datetime">Votre choix de la recette</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker"  name="date" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" min="<?= $date?>" required/>
                                        <label for="datetime">Date & Heure</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="time" class="form-control timepicker" name="time" id="timepicker1" required="required">
                                    <label for="datetime">eg : 10:00 PM</label>
                                    </div>
                                </div>
                                
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="content" placeholder="Special Request" id="message" style="height: 100px" required></textarea>
                                        <label for="message">Message Speciale</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Reservez📰</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="ratio ratio-16x9">
                            <!-- <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe> -->
                                <img src="img/<?=$plat['photo_path']?>" alt="<?=$plat['nom']?>">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        

        
    
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    
    <!-- <script>
            // Récupérez l'élément input
        const datetimeInput = document.getElementById("datetime");

        // Ajoutez un écouteur d'événement pour la saisie
        datetimeInput.addEventListener("input", () => {
            const selectedDatetime = datetimeInput.value;
            const isValid = validateDatetime(selectedDatetime);
            if (!isValid) {
                alert("Veuillez sélectionner une date et une heure valides.");
                // Réinitialisez la valeur si elle est invalide
                datetimeInput.value = "";
            }
        });

        // Fonction de validation
        function validateDatetime(datetime) {
            // Vérifiez si la chaîne de caractères est au format attendu (yyyy-mm-ddThh:mm)
            const regex = /^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}$/;
            return regex.test(datetime);
        }

    </script> -->

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


    <script src="js/datapicker.js"></script>

    
    <script src="js/main.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />


</body>

</html>