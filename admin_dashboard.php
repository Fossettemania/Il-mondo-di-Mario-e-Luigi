<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

echo "Bienvenue " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . " !";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Administrateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tableau de bord Administrateur</h1>
    <nav>
        <ul>
            <li><a href="add_pizza.php">Ajouter une pizza</a></li>
            <li><a href="remove_pizza.php">Retirer une pizza</a></li>
            <li><a href="view_orders.php">Visualiser les commandes</a></li>
            <li><a href="view_reservations.php">Visualiser les réservations</a></li>
        </ul>
    </nav>
</body>
</html>
