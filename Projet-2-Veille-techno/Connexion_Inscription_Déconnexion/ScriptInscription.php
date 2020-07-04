<?php

require_once('../BDD/bdd.php');

//Stockage des valeurs entrées dans les champs par l'utilisateur lors de son inscription 
$nom = $_POST['Nom'];
$localisation = $_POST['Localisation'];
$nom_ent = $_POST['nom_ent'];
$localisation_ent = $_POST['Loc_ent'];
$mail = $_POST['mail'];
$hashpass = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$num = $_POST['num'];
$user = $_POST['utilisateur'];
$err_msg="Adresse mail non valide";


if(isset($_POST['submit'])) //Si l'utilisateur appuie sur Inscription...
{
      
            //On vérifie si le mail entrée lors de l'inscription existe déjà à l'aide cette requête préparée
            $requete = $bdd->prepare('SELECT Adresse_mail FROM `clients` WHERE Adresse_mail=:email');
            $requete->bindParam(':email', $mail, PDO::PARAM_STR);
            $requete->execute();
            $login=$requete->fetch();

            $requete1 = $bdd->prepare('SELECT Adresse_mail FROM `clients` WHERE Adresse_mail=:email');
            $requete1->bindParam(':email', $mail, PDO::PARAM_STR);
            $requete1->execute();
            $login1=$requete1->fetch();

        if($login) //S'il existe déjà on quitte la page et on affiche un message d'erreur
        {
            die();
            /*echo "<a href=\"Insciption.php\">Retourner à l'inscription</a>";*/
        }    
            else 
            {
                if($user == "client")
                {
                try
                {
                //Renvoi d'eventuelles erreurs de traitement de la bdd 
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //Insertion des données saisies par l'utilisateur dans la bdd
                $requete2 = $bdd->prepare("INSERT INTO `clients` (`Nom`, `Localisation`, `Nom_entreprise`, `Localisation_entreprise`, `Adresse_mail`, `Mot de passe`, `Num_telephone`) VALUES(:nom, :localisation, :nom_ent, :localisation_ent, :email, :motdepasse, :num)");
                $requete2->bindParam(':nom', $nom, PDO::PARAM_STR);
                $requete2->bindParam(':localisation', $localisation, PDO::PARAM_STR);
                $requete2->bindParam(':nom_ent', $nom_ent, PDO::PARAM_STR);
                $requete2->bindParam(':localisation_ent', $localisation_ent, PDO::PARAM_STR);
                $requete2->bindParam(':email', $mail, PDO::PARAM_STR);
                $requete2->bindParam(':motdepasse', $hashpass, PDO::PARAM_STR);
                $requete2->bindParam(':num', $num, PDO::PARAM_INT);
                $requete2->execute();
                //print_r($login);
                }
                catch (PDOException $ex) {
                    echo  $ex->getMessage();
                    print_r($bdd->errorInfo());
                }
                header( 'Location: Connexion.php');
                }
            }
            if($login1) //S'il existe déjà on quitte la page et on affiche un message d'erreur
            {
                die();
                /*echo "<a href=\"Insciption.php\">Retourner à l'inscription</a>";*/
            }
            else
            {   
                if($user == "sponsor")
                {
                    try
                    {
                    //Renvoi d'eventuelles erreurs de traitement de la bdd 
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //Insertion des données saisies par l'utilisateur dans la bdd
                    $requete3 = $bdd->prepare("INSERT INTO `sponsors` (`Nom_entreprise`, `Localisation_entreprise`, `Adresse_mail`, `Mot_de_passe`, `Num_telephone`) VALUES(:nom_ent, :localisation_ent, :email, :motdepasse, :num)");
                    $requete3->bindParam(':nom_ent', $nom_ent, PDO::PARAM_STR);
                    $requete3->bindParam(':localisation_ent', $localisation_ent, PDO::PARAM_STR);
                    $requete3->bindParam(':email', $mail, PDO::PARAM_STR);
                    $requete3->bindParam(':motdepasse', $hashpass, PDO::PARAM_STR);
                    $requete3->bindParam(':num', $num, PDO::PARAM_INT);
                    $requete3->execute();
                    //print_r($login);
                    }
                    catch (PDOException $ex) {
                        echo  $ex->getMessage();
                        print_r($bdd->errorInfo());
                    }
                    header( 'Location: Connexion.php'); 
                }
             
        }
            /*$msg = $requete2->execute();
            var_dump($msg);*/
        

    }
?>