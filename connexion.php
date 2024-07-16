<html>
	<head>
		<meta charset="utf-8"/>
		<title> Formulaire envoyé</title>
	</head>
	<body>
		<h1> Formulaire envoyé </h1>
	<?php
	if($_POST["utilisateur"] =="truc"and $_POST["motdepasse"] =="1234"){
		echo "<h1> Authentification réussie </h1>";
	}else{
		echo "<h1> style=color:red >Nom d'utilisateur ou mot depasse incorrect, veuillez réessayer </h1>";
	}

	if($_POST["utilisateur"] == true and $_POST["motdepasse"] == true){
		echo "<h1>connecté</h1>";
	} else {
		echo "<h1> style=color:red > Echec de connexion</h1>";

	if($_POST["util"] == true and $_POST["mot"] == true){
		echo "<h1>mauvais identifiants</h1>";
		} else {
			echo "<h1> style=color:red > Identifiants Incorrects</h1>";
		}

?>

</body>
</html>
