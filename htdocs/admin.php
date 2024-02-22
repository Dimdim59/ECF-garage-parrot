<?php


session_start();
//var_dump($_SESSION); exit;
$user['role'] = $_SESSION['role'];

/*if ($user['role'] === 'admin') {
  // Redirection vers la page de connexion
  header('Location: admin.php');
  exit();
}*/

// Afficher l'email de l'utilisateur
$email = $_SESSION['email'];


if ($user['role'] === 'admin') {
  // Traitement des actions de l'administrateur (ajout de photo, écriture, attribution des droits d'administration)
} else {
  // Les clés email et role existent, vous pouvez les utiliser
  echo "Bienvenue, " . $email;
  // ... votre autre code utilisant $_SESSION['email'] et $_SESSION['role']
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="connexion.php">
  <title>Administrateur</title>
</head>

<body>
  <h1>Administrateur</h1>
  <p>Bienvenue, <?= $_SESSION['role'] ?></p>
  <ul>
    <li><a href="ajout_photo.php">Ajouter une photo</a></li>
    <li><a href="ecriture.php">Ecrire un article</a></li>
    <li><a href="gestion_utilisateurs.php">Gérer les utilisateurs</a></li>
  </ul>
</body>
</html>