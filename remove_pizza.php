<?php
// Inclure le fichier de configuration de la base de données
include 'db_connection.php';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer l'ID de la pizza à supprimer
    $pizza_id = $_POST['pizza_id'];

    // Vérifier que l'ID n'est pas vide
    if (!empty($pizza_id)) {
        // Préparer et exécuter la requête de suppression
        $sql = "DELETE FROM pizzas WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $pizza_id);

        if ($stmt->execute()) {
            echo "Pizza supprimée avec succès!";
        } else {
            echo "Erreur: " . $stmt->error;
        }

        // Fermer la déclaration
        $stmt->close();
    } else {
        echo "Veuillez fournir un ID de pizza.";
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supprimer une Pizza</title>
</head>
<body>
    <h2>Supprimer une Pizza</h2>
    <form method="post" action="remove_pizza.php">
        <label for="pizza_id">ID de la Pizza:</label><br>
        <input type="number" id="pizza_id" name="pizza_id" required><br><br>
        <input type="submit" value="Supprimer">
    </form>
</body>
</html>
