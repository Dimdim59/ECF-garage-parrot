<?php ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des véhicules</title>
  <link rel="stylesheet" href="style_voiture.css">
</head>
<body>
  <h1>Liste des véhicules</h1>
  <form id="recherche-form">
    <input type="text" placeholder="Rechercher par marque, modèle..." id="recherche-input">
  </form>
 
  <div class="filtres">
    <label for="filtre-kilometrage">Kilométrage max : </label>
    <input type="number" id="filtre-kilometrage">
    <label for="filtre-annee">Année min : </label>
    <input type="number" id="filtre-annee">
    <label for="filtre-prix">Prix max : </label>
    <input type="number" id="filtre-prix">
  </div>
</form>

  <ul class="vehicules"></ul>
  
  <script src="script.js"></script>
</body>
</html>
