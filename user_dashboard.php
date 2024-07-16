<?php
session_start();
if (!isset($_SESSION['user_id'])) {
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
    <title>Tableau de bord Utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tableau de bord Utilisateur</h1>
    <nav>
        <ul>
            <li><a href="reserve_table.php">Réserver une table</a></li>
            <li><a href="order_pizza.php">Commander des pizzas</a></li>
        </ul>
    </nav>
</body>
</html>
