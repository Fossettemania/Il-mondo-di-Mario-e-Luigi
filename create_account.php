<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Créer un compte</h1>
    </header>
    <form action="create_account_action.php" method="post">
        <label for="genre">Genre:</label>
        <select id="genre" name="genre">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" required>
        <label for="telephone">Numéro de téléphone:</label>
        <input type="tel" id="telephone" name="telephone" required>
        <label for="email">Adresse mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Créer un compte</button>
    </form>
</body>
</html>
