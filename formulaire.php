<html>
	<head>
		<meta charset="utf-8"/>
		<title> Formulaire</title>
	</head>
	<body>
		<h1> Formulaire de connexion </h1>
		<form action="connexion.php" method= "post">

		<label for="user">Utilisateur</label>

		<input type ="text" id="user" name="utilisateur"/>
		<label for ="motdepasse" > Mot de passe</label>
		<input  type ="text"id="mdp" name="motdepasse"/>

		<input type="submit"  value= "Se connecter"/>
		<form action= "nonconnecte.php"
		<?php  
		<input isset ($_POST["Utilisateur"]) == false and  isset ($_POST["motdepasse"]) == false />
		<form action= "mauvaisidentifiants.php"
		<input unset($_POST["util"]) unset($_POST["mot"]);/>
		<form action= "connexion.php"
		<input isset($_POST["utilsateur"] and isset($_POST["motdepasse"]));/>
		?>


	</body>
</html>
