<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Luigi et Mario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bienvenue à la Pizzeria de Luigi et Mario</h1>
    </header>
    <nav>
        <ul>
            <li><a href="create_account.php">Créer un compte</a></li>
            <li><a href="reserve_table.php">Réserver une table</a></li>
            <li><a href="order_pizza.php">Commander des pizzas</a></li>
        </ul>
    </nav>
    <section>
        <h2>À propos de nous</h2>
        <p>Bienvenue à notre pizzeria située au bord de la mer. Venez déguster nos délicieuses pizzas!</p>
    </section>

    <section>
        <h2>Utilisateurs inscrits</h2>
        <?php
        include 'db_connection.php'; // Inclure le fichier de connexion

        $sql = "SELECT nom, prenom, email FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nom"]. " " . $row["prenom"]. " - " . $row["email"]. "</li>";
            }
            echo "</ul>";
        } else {
            echo "Aucun utilisateur inscrit.";
        }
        ?>
    </section>

    <section>
        <h2>Réservations</h2>
        <?php
        $sql = "SELECT nom, prenom, date, heure, nombre_personnes FROM reservations";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nom"]. " " . $row["prenom"]. " - " . $row["date"]. " à " . $row["heure"]. " pour " . $row["nombre_personnes"]. " personnes</li>";
            }
            echo "</ul>";
        } else {
            echo "Aucune réservation.";
        }
        ?>
    </section>

    <section>
        <h2>Commandes de pizzas</h2>
        <?php
        $sql = "SELECT pizza, taille, quantite, type_retrait FROM orders";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["pizza"]. " - " . $row["taille"]. " - " . $row["quantite"]. " - " . $row["type_retrait"]. "</li>";
            }
            echo "</ul>";
        } else {
            echo "Aucune commande.";
        }

        $conn->close();
        ?>
    </section>
</body>
</html>
