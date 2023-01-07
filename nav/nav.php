
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
<a href="/supreme" class="navbar-brand ml-lg-3">
<h1 class="m-0 display-5 text-uppercase text-primary"><img src="img/supreme.png" width="200px" height="130px"></h1>
</a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
<span class="navbar-toggler-icon"></span>
</button>
<?php 
require("supremeadmin/connexionDB.php");
$categorie = $pdo->prepare("SELECT * FROM categorie "); 
$categorie->execute(); 

?>

<div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
<div class="navbar-nav m-auto py-0">
<a href="/supreme" class="nav-item nav-link active">Acceuil</a>
<!-- <?php //foreach($categorie as $resultat){ ?>
<a href="pages/comedie.php?idCategorie=<?= $resultat['idCategorie']; ?>" class="nav-item nav-link "><?= $resultat['nom'] ?></a>
<?php //} ?> -->

<!-- <a href="#service.html" class="nav-item nav-link">Buzz</a> -->
</div>
<a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">CONTACT</a>
</div>
</nav>
</div>