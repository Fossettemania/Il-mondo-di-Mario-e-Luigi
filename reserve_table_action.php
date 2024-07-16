<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzeria";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$genre = $_POST['genre'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$date = $_POST['date'];
$heure = $_POST['heure'];
$nombre_personnes = $_POST['nombre_personnes'];

$sql = "INSERT INTO reservations (genre, nom, prenom, telephone, email, date, heure, nombre_personnes)
VALUES ('$genre', '$nom', '$prenom', '$telephone', '$email', '$date', '$heure', '$nombre_personnes')";

if ($conn->query($sql) === TRUE) {
    echo "Réservation réussie";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
