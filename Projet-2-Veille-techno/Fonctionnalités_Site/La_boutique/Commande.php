<?php session_start(); 
require_once("../../BDD/bdd.php");
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
        <title>Finalisation commande</title>
</head>
<header>
<?php  require_once("../../Elements/menu.php"); ?>
</header>
<body>
 <div class="box">
 <?php if(empty($_SESSION['panier'])){
        echo "<p class=\"p1\" style=\"margin: auto; padding:0px; position:aboslute\">Vous n'avez choisi aucun article, vous ne pouvez pas passer de commande</p>
        <a style=\"margin:43%;\" href=\"../../Accueil_et_Mentions_légales/Accueil.php\">Retourner à l'accueil</a>
        <script type=\"text/javascript\">
        $(document).ready(function() {
                    $('#monform').remove();             
            });
</script>";
/*error_reporting(0);*/
       
} ?>
 <form  action="ScriptCommande.php" method="post" id="monform">
 <h2 class="text-center">Formulaire de contact</h2>
 <label for="inputLastName" class="sr-only">Nom</label>
   <input type="text" id="inputNom" name="nom" class="form-control" placeholder="Votre Nom" required autofocus>
   </br>
   <label for="inputMailAddress" class="sr-only">Adresse mail</label>
   <input type="text" id="inputMail" name="mail" class="form-control" placeholder="Adresse mail" required>
   </br>
   <label for="inputNumtel" class="sr-only">Numéro de téléphone</label>
   <input type="text" id="inputNum" name="num" class="form-control" placeholder="Numéro de téléphone" required>
   </br>
   <label for="inputNameEnterprise" class="sr-only">Nom de l'entreprise</label>
   <input type="text" id="inputNomEntreprise" name="nom_entreprise" class="form-control" placeholder="Nom de l'entrprise" >
   </br>
   <label for="inputPlace" class="sr-only">Localisation de l'entreprise</label>
   <input type="text" id="inputLieu" name="lieu_entreprise" class="form-control" placeholder="Localisation de l'entrprise">
   </br>
   <label for="inputPlace" class="sr-only"></label>
   <input type="text" id="inputProduits" name="produits" value="<?php  
        
        $ids=array_values($_SESSION['panier']);
        $requete = $bdd->prepare('SELECT Type, Nom FROM `produits` WHERE `ID` IN ('.implode(',',$ids).')');
        $requete->execute();
        while($produit=$requete->fetch(PDO::FETCH_OBJ))  {
           echo $produit->Nom .' '. $produit->Type;
           /*$ids=implode("," , $_SESSION['articles']);
           $tab=explode("," , $ids);
           $tab1=array_unique($tab);
           $ids1=implode("," ,$tab1);
        echo $ids1;*/
        }
    ?>" class="form-control" >
   </br>
   </br>
   <label for="inputDate" class="sr-only">Date</label>
   <input type="text" id="inputDate" name="date" class="form-control" placeholder="Date Année-mois-jours">
   </br>
   <button type="submit" name="accept" class="btn btn-primary" >Accepter</button>
   </form>
</div>
</body>
<footer>
        <?php require_once("../../Elements/footer.php"); ?>
</footer>
</html>