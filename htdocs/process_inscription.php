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




// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];


// Préparer la requête SQL pour insérer les données
$sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)";
$stmt = $pdo->prepare($sql);

// Lier les paramètres
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':mot_de_passe', $mot_de_passe);

// Exécuter la requête
$stmt->execute();

echo 'Inscription réussie !';

// En option, envoyer un email de confirmation ou rediriger vers une page de réussite

?>
