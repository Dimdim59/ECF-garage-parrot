<?php

// Définir l'adresse email de destination
$emailDestinataire = "test@aaa.fr";

// Extraire le message du formulaire
$message = $_POST['message'];

// Envoyer l'email
$headers = "From: test@aaa.fr";
mail($emailDestinataire, "Nouveau message", $message, $headers);

// Afficher un message de confirmation
echo "Votre message a été envoyé avec succès !";

?>
