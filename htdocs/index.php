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
<link rel="stylesheet" type="text/css" href="css/style.css">
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
    
	<!--header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="menu_main">
						<ul>
							<li><a href="index.php">Accueil</a></li>
							<li><a href="voiture.php">Vehicule</a></li>
                            <li><a href="#about">Entretien</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
				</div>
				<div class="col-sm-3">
					<div class="menu_main_2">
						<ul>
                            <li><a href="formulaire_inscription.php">Inscription</a></li>
                            <li><a href="connect.php">Se connecter</a></li>
							<li><a href="formulaire_commentaire.php">Contactez nous</a></li>
                            
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!--banner section start -->
	<div class="banner_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="car_taital">Entretien de votre vehicule</h1>
                <h2 class="free_text">Carroserie, mécanique, pneus, vidange, clim ...</h2>
                <div class="read_bt"><a href="formulaire_commentaire.php">Cliquez ici</a></div>
				</div>
			    <div class="col-md-6">
			        <div class="image_1"><img src="images/img-1.png"></div>	
			    </div>
			</div>
		</div>
	</div>
	<!--banner section end -->
	</div>
	<!--header section end -->
	<!--about section start -->
	<div id="about" class="about_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="about_taital">Voitures d'occasion</h1>
                <p class="lorem_text">Nous avons un grand nombre de voitures pour vous.</p>
                <div class="readmore_bt"><a href="voiture.php">Les annonces</a></div>
				</div>
			    <div class="col-md-6">
			        <div class="image_1"><img src="images/img-2.png"></div>	
			    </div>
			</div>
		</div>
	</div>
	<!--about section end -->
	<!--services section start -->
	<div class="services_section layout_padding">
		<div class="container">
			<h1 class="choose_text">Garage PARROT </h1>
			<p class="long_text">Situé à Toulouse depuis 2021</p>
		</div>
		<div class="services_section_2">
		    <div class="container">
		    	<div class="row">
		    		<div class="col-sm-12 col-lg-6 col-xl-4">
		    			<div class="box_main">
		    				<div class="icon_1"><img src="images/icon-1.png"></div>
		    				<h1 class="mordern_text">Vente de voitures</h1>
		    				<p class="dummy_text">Nous proposons divers types de voiture dans notre garage, remis en l'état par nos soins. <br><br></p>
		    			</div>
		    		</div>
		    		<div class="col-sm-12 col-lg-6 col-xl-4">
		    			<div class="box_main">
		    				<div class="icon_1"><img src="images/icon-2.png"></div>
		    				<h1 class="mordern_text">Professionnels</h1>
		    				<p class="dummy_text">Nous sommes une équipe de profesionnelle, qui pourrons vous aider avec un service qualitatif grâce au savoir faire et surtout à la passion de l'automobile.</p>
		    			</div>
		    		</div>
		    		<div class="col-sm-12 col-lg-6 col-xl-4">
		    			<div class="box_main">
		    				<div class="icon_1"><img src="images/icon-3.png"></div>
		    				<h1 class="mordern_text">Réparations</h1>
		    				<p class="dummy_text">Nous pourrons vous accompagner dans les divers réparations de votre voiture. Passant par la mécanique, la carosserie mais aussi l'entretien régulier.</p>
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    </div>
	</div>
	<!--services section end -->
	<!--contact section start -->
    <div id="contact" class="contact_section layout_padding">
  <div class="container">
    <h1 class="Request_text">Votre avis nous intéresse</h1>
    <div class="contact_main">
      <div class="mail_main">
        <form action="/action_page.php">
          <div class="form-group">
            <input type="text" class="email-bt" placeholder="Name" name="Name">
          </div>
          <div class="form-group">
            <input type="text" class="email-bt" placeholder="Email" name="Email">
          </div>

          <div class="form-group">
            <textarea class="massage-bt" placeholder="Message..." rows="5" id="comment" name="Massage"></textarea>
          </div>
          <div class="form-group">
            <label for="rating"></label>
            <div class="rating">
              <input type="radio" id="star1" name="rating" value="1">
              <label for="star1">★</label>
              <input type="radio" id="star2" name="rating" value="2">
              <label for="star2">★</label>
              <input type="radio" id="star3" name="rating" value="3">
              <label for="star3">★</label>
              <input type="radio" id="star4" name="rating" value="4">
              <label for="star4">★</label>
              <input type="radio" id="star5" name="rating" value="5">
              <label for="star5">★</label>
            </div>
          </div>
          <div class="send_btn">
            <div class="main_bt"><a href="#">Send</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

	<!--contact section end -->
	<!--testimonial section start -->
	<div class="testimonial_section layout_padding">
		<div class="container">
			<div class="testimonial_main">
				<div class="image_3"><img src="images/logo.png"></div>
				<h1 class="readable_text">Horaires du garage</h1>
			<div class="tableau">
                <table>    
                <tr>
                        <th>Jour</th>
                        <th>Matin</th>
                        <th>Après-midi</th>
                    </tr>
                    <tr>
                        <td>Lundi</td>
                        <td>8h45 - 12h00</td>
                        <td>14h00 - 18h00</td>
                    </tr>
                    <tr>
                        <td>Mardi</td>
                        <td>8h45 - 12h00</td>
                        <td>14h00 - 18h00</td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>8h45 - 12h00</td>
                        <td>14h00 - 18h00</td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td>8h45 - 12h00</td>
                        <td>14h00 - 18h00</td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td>8h45 - 12h00</td>
                        <td>14h00 - 18h00</td>
                    </tr>
                    <tr>
                        <td>Samedi</td>
                        <td>9h00 - 12h00</td>
                        <td>14h00 - 18h00</td>
                    </tr>
                    <tr>
                        <td>Dimanche</td>
                        <td>Fermé</td>
                        <td>Fermé</td>
                    </tr>
                </table>
                </p>
                <div class="garage-info">
                        <h2>Garage Parrot</h2>
                        <p>Tél : 0123456789</p>
                        </div>
            </table>
            </div>    
                </div>
		</div>
	</div>
 
    <!--testimonial section end -->
	<!--copyright section start -->
	<div class="copyright_section">
		<div class="container">
			<p class="copyright_text">Copyright 2023</p>
		</div>
	</div>
	<!--copyright section end -->
	<!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>   
</body>
</html>