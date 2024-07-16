<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réserver une table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Réserver une table</h1>
    </header>
    <form action="reserve_table_action.php" method="post">
        <label for="genre">Genre:</label>
        <select id="genre" name="genre">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="telephone">Numéro de téléphone:</label>
        <input type="tel" id="telephone" name="telephone" required>
        <label for="email">Adresse mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <label for="heure">Heure:</label>
        <input type="time" id="heure" name="heure" required>
        <label for="nombre_personnes">Nombre de personnes:</label>
        <input type="number" id="nombre_personnes" name="nombre_personnes" required>
        <button type="submit">Réserver</button>
    </form>
</body>
</html>

