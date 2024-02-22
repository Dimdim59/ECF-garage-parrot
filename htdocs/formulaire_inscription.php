<?php 
// variable de connexion
$host = "127.0.0.1";
$dbname = "db_garage";
$username = "root";
$password = "root";
$port = "3306";
global $pdo; 
//connexion base
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas d'échec de la connexion
    echo "Erreur de connexion : " . $e->getMessage();
    die();
   }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title></title>



    <!-- Déclaration de l'en-tête de page-->
    <header>
    
    <script src="formulaire_commentaire.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </header>
    <body>
    <link rel="stylesheet" href="css/style_inscription.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="logo"><a href="index.php"><img src="images/logo.png" class="logo" alt="Votre logo"></a></div>

    </body>

<!-- Création form pour inscription-->



<form action="process_inscription.php" method="post">
  <div class="row">
    <div class="col-md-6">
      <label for="nom" class="form-label">Nom</label>
      <input id="nom" class="form-control" type="text" name="nom" required placeholder="Entrez votre nom">
    </div>
    <div class="col-md-6">
      <label for="prenom" class="form-label">Prénom</label>
      <input id="prenom" class="form-control" type="text" name="prenom" required placeholder="Entrez votre prénom">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input id="email" class="form-control" type="email" name="email" required placeholder="Entrez votre adresse email">
    </div>
    <div class="col-md-6">
      <label for="mot_de_passe" class="form-label">Mot de passe</label>
      <input id="mot_de_passe" class="form-control" type="password" name="mot_de_passe" required placeholder="Entrez votre mot de passe">
    </div>
  </div>
  <button class="btn btn-primary">S'inscrire</button>
</form>
