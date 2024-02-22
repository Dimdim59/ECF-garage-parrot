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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
<link rel="stylesheet" href="css/style_commentaire.css">
</body>

<!-- Création form pour commentaire-->

<form>
            <div class="row">
              <div class="col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input id="nom" class="form-control" type="text" name="" required placeholder="Entrer votre nom">
              </div>
              <div class="col-md-6">
                <label for="prenom" class="form-label">Prénom</label>
                <input id="prenom" class="form-control" type="text" name="" required placeholder="Entrer votre prénom">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="mail" class="form-label">Mail</label>
                <input id="mail" class="form-control" type="text" name="" required placeholder="Entrer votre mail">
              </div>
              <div class="col-md-6">
                <label for="numéro" class="form-label">Numéro</label>
                <input id="numéro" class="form-control" type="text" name="" required placeholder="Entrer votre numéro">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label for="adresse" class="form-label">Adresse</label>
                <input id="adresse" class="form-control" type="text" name="" required placeholder="Entrer votre adresse">
              </div>
            </div>
              <div class="col-12">
                <label for="titre_commentaire" class="form-label">Titre du commentaire</label>
                <input id="titre_commentaire" class="form-control" type="text" name="titre_commentaire" required placeholder="Entrez un titre pour votre commentaire">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label for="commentaire" class="form-label">Commentaire</label>
                <textarea id="commentaire" class="form-control" name="commentaire" rows="3" required placeholder="Entrez votre commentaire"></textarea>
              </div>
            </div>
  <form action="process.php" method="post">
    <button class="btn btn-primary">Envoyer</button>
  </form>
</form>

