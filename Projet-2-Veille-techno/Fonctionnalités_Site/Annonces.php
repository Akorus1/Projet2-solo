<?php   session_start(); ?>
<?php 
error_reporting(0);
require_once("../BDD/bdd.php");
 
$nom = $_SESSION['user_Nom'];
$mail = $_SESSION['user_Mail'];
$com = $_POST['com'];
$id_us= $_SESSION['user_id'];

if(isset($_POST['submit'])) //Si l'utilisateur appuie sur Inscription...
{       
                try
                {
                //Renvoi d'eventuelles erreurs de traitement de la bdd 
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //Insertion des données saisies par l'utilisateur dans la bdd
                $requete2 = $bdd->prepare("INSERT INTO `commentaires` (`ID_client`,`Contenu`, `Date`, `Adresse_mail`, `Nom`) VALUES(:id, :com, CURRENT_DATE, :email, :nom)");
                $requete2->bindParam(':nom', $nom, PDO::PARAM_STR);
                $requete2->bindParam(':email', $mail, PDO::PARAM_STR);
                $requete2->bindParam(':com', $com, PDO::PARAM_STR);
                $requete2->bindParam(':id', $id_us, PDO::PARAM_STR);
                $requete2->execute();
                //print_r($login);
                }
                catch (PDOException $ex) {
                    echo  $ex->getMessage();
                    print_r($bdd->errorInfo());
                }
}
            
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/Projet-2-Veille-techno/Elements/Style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Annonces</title>
</head>
<header>
        <?php 
        /*require_once("../boutique/bdd.php");*/
        require_once("../Elements/menu.php"); ?>
</header>
<body>

 <div class="box">
 <p class="p1">Les annonces</p>
 <p class="p2"><a href="#" id="mona" role="button">Poster une annonce</a></p>
 <?php $requete = $bdd->prepare('SELECT * FROM commentaires');
        $requete->execute();
        while($produit=$requete->fetch(PDO::FETCH_OBJ)){?>
         <div style="padding:0px; border-style:solid;">                    
         <?php
         setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
         $date=strftime("%A %d %B %Y", strtotime($produit->Date)); 
         echo $produit->Nom .' le '.  $date; ?><br>
          <?php echo $produit->Contenu; ?>
        </div>
        <br>
        <?php } ?>
  <br><br>      
 <div style="margin-left:24%;">
 <form action="Annonces.php" method="post" id="monform1">
  <div class="form-group" style="width:66.5%;">
  <textarea  name="com" class="form-control" rows="6"></textarea>
</div>
<button type="submit" id="Oui" name="submit" class="btn btn-primary">Publier</button>
</form>
</div>
</div>
</body>
<footer>
        <?php require_once("../Elements/footer.php"); ?>
</footer>
<script type="text/javascript">
        $(document).ready(function() {
            $('#monform1').hide();
            $("#mona").click(function(){     
                $('#monform1').show();
            });
        });
</script>"

</html>