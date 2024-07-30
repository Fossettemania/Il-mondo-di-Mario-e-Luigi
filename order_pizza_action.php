<?php
// Inclure le fichier de configuration de la base de données
include 'db_connection.php';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id_users = $_POST['id_users'];
    $id_pizza = $_POST['id_pizza'];
    $quantite = $_POST['quantite'];
    $retrait = $_POST['retrait'];

    // Vérifier que les champs ne sont pas vides
    if (!empty($id_users) && !empty($id_pizza) && !empty($quantite) && !empty($retrait)) {
        // Préparer et exécuter la requête d'insertion
        $sql = "INSERT INTO commande (id_client, id_pizza, quantitie, retrait) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiis", $id_users, $id_pizza, $quantite, $retrait);

        if ($stmt->execute()) {
            echo "Commande passée avec succès!";
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
