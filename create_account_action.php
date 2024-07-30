<?php
session_start();
include 'db_connection.php';

$genre = $_POST['genre'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$password = $_POST['password'];

// Préparer et exécuter la requête d'insertion
$sql = $conn->prepare("INSERT INTO users (genre, nom, prenom, adresse, telephone, email, password, role) VALUES (?, ?, ?, ?, ?, ?, ?, 'user')");
$sql->bind_param("sssssss", $genre, $nom, $prenom, $adresse, $telephone, $email, $password);

if ($sql->execute()) {
    echo "Compte créé avec succès!";
    header("Location: user_dashboard.php");
} else {
    echo "Erreur: " . $sql->error;
}

$conn->close();
?>
