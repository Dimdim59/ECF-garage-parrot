<?php
session_start();

// Définir les variables de connexion à la base de données
$host = "127.0.0.1";
$dbname = "db_garage";
$username = "root";
$password = "root";
$port = "3306";
global $pdo;

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas d'échec de la connexion
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}

// Définir les variables du formulaire
$email = $_POST['email'];
$mot_de_passe_saisi = $_POST['mot_de_passe'];

// Requête SQL pour récupérer l'utilisateur
$sql = "SELECT * FROM utilisateurs WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Vérifier si l'utilisateur existe
$user = $stmt->fetch();

if ($user) {
    // Vérifier le mot de passe
    if ($mot_de_passe_saisi === $user['mot_de_passe']) {
        // Code de connexion réussie
        echo "Connexion réussie !";
        // ... Redirection vers la page d'accueil ou autre action
    } else {
        // Code d'erreur de mot de passe incorrect
        echo "Mot de passe incorrect.";
    }
} else {
    // Code d'erreur d'utilisateur non trouvé
    echo "Utilisateur non trouvé.";
}
if ($mot_de_passe_saisi === $user['mot_de_passe']) {
    // Code de connexion réussie
    echo "Connexion réussie !";
}
    // Stockage du rôle de l'utilisateur dans la variable $_SESSION
    $_SESSION['role'] = $user['role'];
    $_SESSION['email'] = $user['email'];
    // Redirection vers la page d'administration si le rôle est "admin"
    if ($user['role'] === 'admin') {
        header('Location: admin.php');
    }
        elseif ($user['role'] === 'employé'){

            // Redirection vers la page 'employe.php' si le rôle est "employe"
            header('Location: employe.php');

    } else {
        // Redirection vers la page d'accueil ou une autre page par défaut
        header('Location: connexion.php');
        exit();
    }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="connexion.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="mot_de_passe">Mot de passe</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe">
        <br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
