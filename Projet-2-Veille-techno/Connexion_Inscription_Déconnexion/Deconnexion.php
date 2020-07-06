<?php
error_reporting(0);  
session_unset();
if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
     }
session_destroy(); 
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
        <title>Déconnexion</title>
</head>
<body>

 <div class="box">
 <h1>Solidarity Bond</h1>
 <p class="p1">Vous êtes déconnecté</p>
 <p class="p2"><a href="http://projet2-solo/Projet-2-Veille-techno/Accueil_et_Mentions_légales/Accueil.php">Retourner à l'accueil</a></p>
</div>
</body>
</html>