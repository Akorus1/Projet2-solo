<?php session_start() ?>
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
        <title>Connexion</title>
</head>
<body>
 <div class="box">
 <p class="p1">Connexion</p>
 <div style="margin-left:25%;">
 <form action="ScriptConnexion.php" method="post">
  <div class="form-group" style="width:66.5%;">
    <label for="inputAddress">Adresse mail</label>
    <input type="email"  class="form-control" name="mail" id="inputAddress" placeholder="example@boite.com" required autofocus>
  </div>
  <div class="form-group" style="width:66.5%;">
    <label for="inputAddress2">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" id="inputAddress2" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
  <B><a href="Inscription.php" target="blank" style="margin:3%;">Pas encore de compte ? </a><B>
</form>
</div>
</div>
</body>
</html>