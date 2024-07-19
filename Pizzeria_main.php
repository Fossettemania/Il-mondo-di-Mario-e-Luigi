<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Super Mario Bro's Pizzeria 🍕</title>
</head>
<body>
<!--Put a nav bar here? (list of links)-->
<div class = headerphoto> 
<img src = "/MarioLuigibanner.jpeg" id = "banner"/>
</div>
    <h1>Super Bros Pizzeria </h1>
    <h2>From Mario & Luigi</h2>
<!--Sign in / Login form--><!--
<h3>T'as un Compte Click <a href = "Compte.php">ici!</a></h3>
        <h2>Pas de compte, pas de problem</h1>
<div class = "form-creer_compte">
            <h3>Create an account </h3>
            <form action = "register.php" method = "post">

            <label for = "nom">Nom/Last Name:</label>
            <input type = "text" id = "nom" name = "nom" required>
            
            <br>
            <br>

            <label for = "prenom">Prenom/First Name:</label>
            <input type = "text" id = "Prenom" name = "Prenom"required>

            <br>
            <br>

            <p>Genre :</p>
            <label for = "genre">Male</label>
            <input type = "radio" id = "Male" name = "genre" value = "Male"> 
            <label for = "genre">Female</label>
            <input type = "radio" id = "Female" name = "genre" value = "Female"> 
            <label for = "genre">Other</label>
            <input type = "radio" id = "Other" name = "genre" value = "Other"> 
            
            <br>
            <br>

            <label for = "adress">Adress postal:</label>
            <input type = "text" id = "adress" name = "adress" required>

            <br>
            <br>

            <label for = "phone_num">Numero telephone:</label>
            <input type = "tel" id = "phone_num" name = "phone_num" required >

            <br>
            <br>

            <label for = "email">Adress Email :</label>
            <input type = "email" id = "email" name = "email" required>

            <br><br>

            <label for = "mdp">Password:</label>
            <input type = "password" id = "mdp_creer" name = "mdp" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title = "Needs at least one number, captial and lowcase letter at least 8 characters"required >
            <input type = "Submit" value = "Create my account" name = "sign_up">
    </form>
</div>
    </html>-->
<!--These pizzas should be side by side -->
<div class ="pizzaPics">
    <figure>
        <img src ="/PizzaMario.jpeg"/>
        <figcaption>The Mario Pizza</figcaption>
    </figure> 
    <figure>
    <img src ="/PizzaLuigismall.jpeg"/>
    <figcaption>The Luigi Pizza</figcaption>
    </figure>
</div>
</body>
    </html>