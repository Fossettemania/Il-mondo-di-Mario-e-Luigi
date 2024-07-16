<?php
/* lol its not working 16:48 july 16 
include 'bdd_conect.php';

if (isset($_POST["sign_up"])){
        $nom = $_POST["nom"]; 
        $prenom = $_POST["prénom"];
        $genre= $_POST["genre"];
        $adress = $_POST["adress"];
        $num_tel = $_POST["phone_num"];
        $email = $_POST["email"];
        $mot_de_pass = $_POST["mdp"];
        //this is so the password is hidden 
        $mot_de_pass = md5($mot_de_pass); 

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