<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander des pizzas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Commander des pizzas</h1>
    </header>
    <form action="order_pizza_action.php" method="post">
        <label for="pizza">Pizza:</label>
        <select id="pizza" name="pizza">
            <option value="margherita">Margherita</option>
            <option value="pepperoni">Pepperoni</option>
            <option value="vegetarienne">Végétarienne</option>
            <option value="nimet">Nimet</option>

        </select>
        <label for="taille">Taille:</label>
        <select id="taille" name="taille">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite" required>
        <label for="type_retrait">Type de retrait:</label>
        <select id="type_retrait" name="type_retrait">
            <option value="restaurant">Au restaurant</option>
            <option value="livraison">Livraison</option>
        </select>
        <button type="submit">Commander</button>
    </form>
</body>
</html>
