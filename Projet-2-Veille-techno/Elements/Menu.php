<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<nav class="navbar navbar-dark bg-dark">
<a class="btn btn-dark" href="http://projet2-solo/Projet-2-Veille-techno/Accueil_et_Mentions_légales/index.php" role="button">Accueil</a>
  <div class="dropdown">
  <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  La boutique
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item"  href="http://projet2-solo/Projet-2-Veille-techno/Fonctionnalités_Site/La_boutique/Masques.php">Les masques</a>
    <a class="dropdown-item"  href="http://projet2-solo/Projet-2-Veille-techno/Fonctionnalités_Site/La_boutique/Parois.php">Les parois anti-contact</a>
    <a class="dropdown-item"  href="http://projet2-solo/Projet-2-Veille-techno/Fonctionnalités_Site/La_boutique/Gants.php">Les gants</a>
    <a class="dropdown-item"  href="http://projet2-solo/Projet-2-Veille-techno/Fonctionnalités_Site/La_boutique/Commande.php">Passer une commande</a>
    <a class="dropdown-item"  href="http://projet2-solo/Projet-2-Veille-techno/Fonctionnalités_Site/La_boutique/panier.php">Mon panier</a>
  </div>
</div>
  <a class="btn btn-dark" href="http://projet2-solo/Projet-2-Veille-techno/Fonctionnalités_Site/Lequipe.php" role="button">Qui sommes-nous ?</a>
  <a class="btn btn-dark" href="http://projet2-solo/Projet-2-Veille-techno/Connexion_Inscription_Déconnexion/Connexion.php" id="Conn" role="button" >Se connecter</a>
  <a class="btn btn-dark" href="http://projet2-solo/Projet-2-Veille-techno/Connexion_Inscription_Déconnexion/Inscription.php" id="Insc" role="button">S'inscrire</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Chercher un produit" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">OK</button>
  </form>
</nav>

<?php 
if(isset($_SESSION['login']))
{
?>
<script type="text/javascript">
$(document).ready(function(){
  $("#Conn").replaceWith("<a class=\"btn btn-dark\" href=\"http://projet2-solo/Projet-2-Veille-techno/Connexion_Inscription_Déconnexion/Deconnexion.php\" role=\"button\" >Se déconnecter</a>");
  $("#Insc").replaceWith("<a class=\"btn btn-dark\" href=\"http://projet2-solo/Projet-2-Veille-techno/Fonctionnalités_Site/Annonces.php\" role=\"button\" >Les annonces</a>");  
    });
</script>

<?php } ?>