<?php
include 'db_connection.php';

if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
} else {
    echo "Connexion réussie!";
}

$conn->close();
?>
