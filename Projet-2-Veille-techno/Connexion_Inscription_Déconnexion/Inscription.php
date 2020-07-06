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
        <title>Inscription</title>
</head>
<body>
 <div class="box">
 <p class="p1">Inscription</p>
 <div style="margin-left:25%;">
 <form action="ScriptInscription.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nom Prénom</label>
      <input type="text" class="form-control" name="Nom" id="inputEmail4" required autofocus>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Localisation</label>
      <input type="text" class="form-control" name="Localisation" id="inputPassword4" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nom de l'entrepise</label>
      <input type="text" class="form-control" name="nom_ent" id="inputEmail4"  required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Localisation de l'entreprise</label>
      <input type="text" class="form-control" name="Loc_ent" id="inputPassword4"  required>
    </div>
  </div>
  <div class="form-group" style="width:66.5%;">
    <label for="inputAddress">Adresse mail</label>
    <input type="email"  class="form-control" name="mail" id="inputAddress" placeholder="example@boite.com"  required>
  </div>
  <div class="form-group" style="width:66.5%;">
    <label for="inputAddress2">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" id="inputAddress2"  required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Numéro de téléphone</label>
      <input type="number" class="form-control" name="num" id="inputCity"  required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Êtes-vous un</label>
      <select name="utilisateur" class="form-control">
        <option value="client"> client</option>
        <option value="sponsor">fournisseur</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        J'accepte les conditions d'utilisation
      </label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">S'inscrire</button>
  <B><a href="Connexion.php" target="blank" style="margin:3%;">Déjà enregistré ? </a><B>
</form>
</div>
</div>
</body>
</html>
