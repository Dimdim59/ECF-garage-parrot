<?php

// Définir les variables de connexion à la base de données
$host = "localhost";
$dbname = "db_garage";
$username = "root";
$password = "root";

// Établir la connexion
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Définir la requête SQL pour récupérer les utilisateurs
$sql = "SELECT * FROM utilisateurs";

// Exécuter la requête
$stmt = $conn->query($sql);

// Parcourir les utilisateurs
while ($user = $stmt->fetch()) {
  // Afficher les informations de l'utilisateur
  echo "Prénom: " . $user['prenom'] . "<br>";
  echo "Nom: " . $user['nom'] . "<br>";
  echo "Email: " . $user['email'] . "<br>";
  echo "<br>";
}

?>
