<?php

session_start();

// Vérifier si l'utilisateur est connecté et a le rôle "admin"
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}

// Récupération des données du formulaire
$id = $_POST['id'];
$new_role = $_POST['role'];

// Connexion à la base de données
$host = "127.0.0.1";
$dbname = "db_garage";
$username = "root";
$password = "root";
$port = "3306";
$pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Requête pour modifier le rôle de l'utilisateur
$sql = "UPDATE utilisateurs SET role = :role WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':role', $new_role);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirection vers la page de gestion des rôles
header('Location: admin.php');
exit();

?>
