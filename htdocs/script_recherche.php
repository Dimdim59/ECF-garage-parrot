<?php

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_garage";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Erreur de connexion : " . $conn->connect_error);
}

// Requête SQL
$sql = "SELECT * FROM automobile";

// Exécuter la requête
$result = $conn->query($sql);

// Vérifier le résultat
if (!$result) {
  die("Erreur de requête : " . $conn->error);
}

// Parcourir les résultats
while ($row = $result->fetch_assoc()) {

  echo "<p>Marque : " . $row["marque"] . "</p>";
  echo "<p>Modèle : " . $row["modele"] . "</p>";
  echo "<p>Année : " . $row["annee"] . "</p>";
  echo "<p>Kilométrage : " . $row["kilometrage"] . " km</p>";
  echo "<p>Prix : " . $row["prix"] . "</p>";
  echo "<hr>";
}

// Fermer la connexion
$conn->close();

?>
