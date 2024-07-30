<?php
$servername = "localhost";
$username = "root";
$password = "root"; // Changez ce mot de passe s'il est différent
$dbname = "il mondo di luigi e mario";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}
?>
