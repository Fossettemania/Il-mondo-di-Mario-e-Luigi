<?php
session_start();
include 'db_connection.php';

$genre = $_POST['genre'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (genre, nom, prenom, adresse, telephone, email, password)
VALUES ('$genre', '$nom', '$prenom', '$adresse', '$telephone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Compte créé avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
