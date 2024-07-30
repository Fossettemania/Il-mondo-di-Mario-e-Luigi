<?php
// Inclure le fichier de configuration de la base de données
include 'db_connection.php';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $pizza_name = $_POST['pizza_name'];
    $ingredients = $_POST['ingredients'];
    $price = $_POST['price'];

    // Vérifier que les champs ne sont pas vides
    if (!empty($pizza_name) && !empty($ingredients) && !empty($price)) {
        // Préparer et exécuter la requête d'insertion
        $sql = "INSERT INTO pizzas (pizza_name, ingredients, price) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssd", $pizza_name, $ingredients, $price);

        if ($stmt->execute()) {
            echo "Pizza ajoutée avec succès!";
        } else {
            echo "Erreur: " . $stmt->error;
        }

        // Fermer la déclaration
        $stmt->close();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Pizza</title>
</head>
<body>
    <h2>Ajouter une Pizza</h2>
    <form method="post" action="add_pizza.php">
        <label for="pizza_name">Nom de la Pizza:</label><br>
        <input type="text" id="pizza_name" name="pizza_name" required><br>
        <label for="ingredients">Ingrédients:</label><br>
        <input type="text" id="ingredients" name="ingredients" required><br>
        <label for="price">Prix:</label><br>
        <input type="number" step="0.01" id="price" name="price" required><br><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
