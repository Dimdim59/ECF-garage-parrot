<?php
// Définir les variables de connexion à la base de données
$host = "localhost";
$dbname = "db_garage";
$username = "root";
$password = "root";

// Établir la connexion
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Récupérer les données du formulaire
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Préparer la requête SQL pour sélectionner l'utilisateur
$sql = "SELECT * FROM utilisateurs WHERE email = :email AND role = 'admin'";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

$user = $stmt->fetch();

// Vérifier si l'utilisateur existe et si le mot de passe est correct
if (!$user || !password_verify($mot_de_passe, $user['mot_de_passe'])) {
    // Redirection vers la page d'accueil
    header('Location: admin.php');
    die();
}

// Démarrer une session et rediriger vers la page d'administration
session_start();

// Stocker des informations en session
$_SESSION['user_id'] = $user['id'];
$_SESSION['role'] = $user['role'];

// Redirection vers la page d'administration
if ($user['role'] === 'admin') {
    header('Location: admin.php');
} elseif ($user['role'] === 'employe') {
    header('Location: employe.php');
} else {
    header('Location: index.php');
}

?>
