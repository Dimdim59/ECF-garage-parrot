<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<div class="col-sm-6">
				<div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
				</div>
    <div class="formulaire-conteneur">
        <form action="connexion.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" name="mot_de_passe" id="mot_de_passe">
            <br>
            <button type="submit">Se connecter</button>
        </form>
    </div>
    <link rel="stylesheet" href="css/style_connect.css">
</body>
</html>