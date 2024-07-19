<?php
include 'bdd_conect.php';
if (isset($_POST["sign_up"])){
    echo "sign up button was clicked";
        $nom = ($_POST["nom"]); 
        $prenom = ($_POST["Prenom"]);
        $genre= $_POST["genre"];
        $adress =($_POST["adress"]);
        $num_tel =($_POST["phone_num"]);
        $email = ($_POST["email"]);
        $mot_de_pass = ($_POST["mdp"]);
        //this is so the password is hidden 
        $mot_de_pass = md5($mot_de_pass); 
        //this is to check if the user exits: 
        $select ="SELECT * From CLIENT where email='$email' && Password = 'mot_de_pass' ";
        
        $resultat = mysqli_query($connect, $select);
        //this means that if there are more then 0 rows 
        if (mysqli_num_rows($resultat) > 0){
            $error[] = 'User exists'; 
        }
        else {
            //this works 
            $requete  = "INSERT INTO CLIENT(nom,prenom,genre,adress,num_tel,email,Password)
                    VALUES ('$nom','$prenom','$genre','$adress','$num_tel','$email','$mot_de_pass')";
            mysqli_query($connect, $requete); 
            header("location: Compte.php");

        }
}
?>
<!--Sign in / Login form-->
<h3>T'as un Compte Click <a href = "Compte.php">ici!</a></h3>
        <h2>Pas de compte, pas de problem</h1>
<div class = "form-creer_compte">
            <h3>Create an account</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class= "error-msg">'.$error.'</span>';
                }
            }
            ?>
            <form action = "register.php" method = "post">

            <label for = "nom">Nom/Last Name:</label>
            <input type = "text" id = "nom" name = "nom" required>
            
            <br>
            <br>

            <label for = "Prenom">Prenom/First Name:</label>
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
    </html>
    <?php
   
/* lol its not working 16:48 july 16 


        $checkEmail="SELECT * From users where email='$email'";
        $result=$conn->query($checkEmail);
//check to see what num_rows>0
            if($result->num_rows>0){
               echo "Email Address Already Exists !";
            }
                else {
                    $requete  = "INSERT INTO 'CLIENT'(nom,prenom,genre,adress,num_tel,email,Password)
                    VALUES ('$nom','$prenom','$genre','$adress','$num_tel','$email','$mot_de_pass')";

                    if ($connect ->query($requete)== true){
                        header("location : Pizzeria_main.php");
                    }
                        else {
                        echo "Error :". $connect ->error;
                        }
                    }
    
}

if (isset($_POST["sign_in"])){
    $email = $_POST["Username"];
    $password = $_POST["psw"];

$sql = "SELECT * FROM CLIENT WHERE email = '$email' and Password = '$password'"; 
$resultat = $connect->query($sql); 
//see if we can do in the if && if admin = 0 
    if ($resultat->num_rows > 0){
        session_start(); 
        //search about what this is 
        $row = $resultat ->fetch_assoc();
        $_SESSION['email']=$row['email']; 
        header("location : user_homepage.php" ); 
        //add the limits on using an email more than once
        exit(); 
    }
    //we need to add one for admin 
    else {
        echo "Account not found wrong email or password"; 
    }
}*/


?>