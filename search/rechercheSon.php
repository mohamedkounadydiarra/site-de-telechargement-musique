<?php 
require("../supremeadmin/connexionDB.php");

$recherche = $_GET['recherche'];
//barre de recherche
$req = $pdo->prepare("SELECT * FROM article WHERE nom LIKE ? ORDER BY idArticle DESC");
$req->execute(array("%".$recherche."%"));
 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>supreme communication</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
<link rel="stylesheet" href="../css1/bootstrap.min.css">
<link rel="stylesheet" href="../css2/css/all.min.css">
<link rel="stylesheet" href="../css1/templatemo-style.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
<div class="container-fluid bg-dark">
<div class="row py-2 px-lg-5">
<div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
<div class="d-inline-flex align-items-center text-white">
<small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
<small class="px-3">|</small>
<small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
</div>
</div>
<div class="col-lg-6 text-center text-lg-right">
<div class="d-inline-flex align-items-center">
<a class="text-white px-2" href="">
<i class="fab fa-facebook-f"></i>
</a>
<a class="text-white px-2" href="">
<i class="fab fa-linkedin-in"></i>
 </a>

<a class="text-white pl-2" href="">
<i class="fab fa-youtube"></i>
</a>
</div>
</div>
</div>
</div>

<!-- Navbar Start -->

<?php require("../nav/navSearch.php"); ?>

<!-- Navbar End -->


    <!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
<div class="container text-center py-5">
<h1 class="text-primary mb-4">BIENVENUE SUR</h1>
<h1 class="" style="color:white;">SUPREME COMMUNICATION</h1>
<div class="mx-auto" style="width: 100%; max-width: 600px;">
<form action="rechercheSon.php" method="GET">
<div class="input-group">
<input type="search" name="recherche" required class="form-control border-light" style="padding: 30px;" placeholder="recherche">
<div class="input-group-append">
<button class="btn btn-primary px-3">recherche</button>
</div>
</form>
</div>
</div>
</div>
</div>
    <!-- Header End -->


    <!-- About Start -->
<!-- <div class="container-fluid py-5">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 pb-4 pb-lg-0" style="background-color: rgb(209, 248, 248);">
<img class="img-fluid w-100" src="../img/supreme.png" alt="">
<div class="bg-primary text-dark text-center p-4">
<h3 class="m-0">14 ans d'experience</h3>
</div>
</div>


<div class="col-lg-7">
<h6 class="text-primary text-uppercase font-weight-bold">Qui sommes nous ?</h6>
<h1 class="mb-4">Nous sommes une entreprise spécialisé dans la communication degitale Marketing</h1>
<p class="mb-4">Rétrouver chez la vie et l'actualité de vos hommes politiques et artiste chanteur préferé !</p>
<div class="d-flex align-items-center pt-2">
<a href="https://www.youtube.com/channel/UCxjg_XUqhwkXRxDXKGbza7g">
<button type="button" class="btn-play" data-toggle="modal"data-target="#videoModal"></button>
</a>
<h5 class="font-weight-bold m-0 ml-4">Notre chaine youtube</h5>
</div>
</div>
</div>
</div>
       
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>        

<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
</div>
</div>
</div>
</div>
</div> -->
 <!-- About End -->





    <!-- Team Start -->
<div class="container-fluid pt-5">
<div class="container">
<div class="text-center pb-2" style="background-color: rgb(225, 245, 245);">
<h6 class="text-primary text-uppercase font-weight-bold">Musique</h6>
<h5 class="mb-4">Tous styles confondus</h5>
</div>
<br>
<br>
<div class="row">
<div class="row tm-mb-90 tm-gallery" >


<?php foreach($req as $ett){  ?>

<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5" style="display: block;background-color: rgb(225, 245, 245);margin: 5px;">

<figure class="effect-ming tm-video-item">
<img src="../supremeadmin/fichierCover/<?= $ett['cover']; ?>" alt="Image" class="img-fluid" style="width: 100%;" >
<figcaption class="d-flex align-items-center justify-content-center" style="width: 100%;">
<h2 style="color:white;"><?= $ett['nom']; ?></h2>
<a href="../supremeadmin/fichierSon/<?= $ett['son']; ?>"></a>
</figcaption>                    
</figure>

<div class="d-flex justify-content-between tm-text-gray">
<span class="tm-text-gray-light"><?= $ett['datepublier']; ?></span>
<span><h6><?= $ett['description']; ?></h6></span>
<span>
<a href="../supremeadmin/fichierSon/<?= $ett['son']; ?>" download=""> <img src="../img/telechargement.png" style="width:20px;height: 20px;"></a>
</span>
</div>

<?php 
//la requette pour la liste des like 
$idArticle = $ett['idArticle'];
$likeListe = $pdo->prepare("SELECT idLike FROM likes WHERE idArticle = ?");
$likeListe->execute(array($idArticle));
$like = $likeListe->rowCount();

//la requette pour la liste des dislike
$dislikeListe = $pdo->prepare("SELECT idDislike FROM dislike WHERE idArticle = ?");
$dislikeListe->execute(array($idArticle));
$dislike = $likeListe->rowCount();

?>

<h6 style="color:white;"><?= $ett['nom']; ?></h6>
<a href="../action/like.php?type=0&idArticle=<?= $ett['idArticle'] ?>">j'aime:<?= $like?></a><br>
<a href="../action/like.php?type=1&idArticle=<?= $ett['idArticle'] ?>">j'aime pas:<?= $dislike?></a>
</div>

<?php } ?>

</div> 
</div>
</div>
</div>
    <!-- Team End -->




    <!-- Footer Start -->
    <?php require("../footer/footer.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js2/plugins.js"></script>
</body>

</html>
