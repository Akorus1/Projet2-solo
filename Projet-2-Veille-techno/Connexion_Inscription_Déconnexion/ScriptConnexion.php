<?php
require_once('../BDD/bdd.php');

$mail = $_POST['mail'];

if(isset($_POST['submit']))
    {    //Si l'utilisateur appuie sur Connexion...


        //  Récupération de l'utilisateur et de son pass hashé
        $req = $bdd->prepare('SELECT * FROM clients WHERE Adresse_mail = :mail');  
        $req->bindParam(':mail', $mail, PDO::PARAM_STR);
        $req->execute(); 
        $resultat = $req->fetch();
        $id = $resultat['ID'];
        
        $req2 = $bdd->prepare('SELECT * FROM sponsors WHERE Adresse_mail = :mail');  
        $req2->bindParam(':mail', $mail, PDO::PARAM_STR);
        $req2->execute(); 
        $resultat2 = $req2->fetch();
        $id2 = $resultat2['ID'];
        
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($_POST['mdp'], $resultat['Mot_de_passe']);
        
        if ($mail == $resultat['Adresse_mail'] || $mail == $resultat2['Adresse_mail'])
        {
            if ($isPasswordCorrect) 
            {   //Si le hashage correspond...
                session_start();
                //On crée des variables de session qui retiendront les données de l'utilisateurs sur toutes les pages
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $id;
                $_SESSION['user_Nom'] = $resultat['Nom'];
                $_SESSION['user_Mail'] = $resultat['Adresse_mail'];

                require_once("../Accueil_et_Mentions_légales/Accueil.php");
            }
        else
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        }
            else 
            {
                echo 'Mauvais identifiant ou mot de passe sff!';
            }
        
    }
?>