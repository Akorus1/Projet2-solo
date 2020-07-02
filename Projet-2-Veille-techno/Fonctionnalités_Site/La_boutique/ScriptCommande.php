<?php 
require_once("../../BDD/bdd.php");

if(isset($_POST['accept'])) 
{       
    try
    { 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete2 = $bdd->prepare("INSERT INTO commandes (Nom_client, Adresse_mail_client, Num_telephone_client,  Nom_entreprise, Localisation_entreprise, Nom_produits, Date) VALUES(:nom, :mail, :num, :nom_entreprise, :localisation_entreprise, :nom_produits, :date)");
        $requete2->execute(array(':nom'=>$_POST['nom'], 'mail'=>$_POST['mail'], ':num'=>$_POST['num'], ':nom_entreprise'=>$_POST['nom_entreprise'], ':localisation_entreprise'=>$_POST['lieu_entreprise'], ':nom_produits'=>$_POST['produits'], ':date'=>$_POST['date']));
    }
    catch (PDOException $ex) {
        echo  $ex->getMessage();
        print_r($bdd->errorInfo());
    }
        if($requete2)
        {
                require_once 'remerciements.php';
                  
        }
        else
        {
            echo "raté";
            var_dump($_POST);
            var_dump($requete2); 
           
        }
       
}


?>