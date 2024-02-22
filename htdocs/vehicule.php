<?php 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Garage PARROT</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style_vehicule.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>

<body>

<h1>Liste des véhicules</h1>
  <?php include "script_recherche.php"; ?>
    <ul class="vehicules">
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
    <li>
      <h2><?php echo $row["marque"] . " " . $row["modele"]; ?></h2>
      <p>Prix : <?php echo $row["prix"]; ?> €</p>
      <p>Année : <?php echo $row["annee"]; ?></p>
      <p>Kilométrage : <?php echo $row["kilometrage"]; ?> km</p>
        <?php
    }
      ?>
      
      <div class="photos">
    <img src="images/voiture1_photo1.jpg" alt="Photo 1">
    <img src="images/voiture1_photo2.jpg" alt="Photo 2">
  </div>
  <div class="photos">
    <img src="images/voiture2_photo1.jpg" alt="Photo 1">
    <img src="images/voiture2_photo2.jpg" alt="Photo 2">
  </div>
  <div class="photos">
    <img src="images/voiture3_photo1.jpg" alt="Photo 1">
    <img src="images/voiture3_photo2.jpg" alt="Photo 2">
  </div>
  <div class="photos">
    <img src="images/voiture4_photo1.jpg" alt="Photo 1">
    <img src="images/voiture4_photo2.jpg" alt="Photo 2">
  </div>
  <div class="photos">
    <img src="images/voiture5_photo1.jpg" alt="Photo 1">
    <img src="images/voiture5_photo2.jpg" alt="Photo 2">
  </div>
  <div class="photos">
    <img src="images/voiture6_photo1.jpg" alt="Photo 1">
    <img src="images/voiture6_photo2.jpg" alt="Photo 2">
  </div>
    </li>

</body>
</html>
 