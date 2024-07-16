<?php
session_start();
include (bdd_connect.php);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h3>
        Hello welcome :  
        <?php
        /*THIS. DOES NOT. WORK 
        //this is for the simple user is it enough 
        if(isset($_SESSION["email"])){
            $email = $_SESSION["email"]; 
            $requete = mysqli_query($connect,"SELECT  CLIENT.* WHERE CLIENT.email = $email and admin = 0" );
            while ($row = mysqli_fetch_array($requete)){
                echo $row["prenom"]. ''.$row["nom"];
            }
        }
        //add the order history and reservation confirmation
        // add the log out option 
        */
        
        ?>
    </h3>
</body>
</html>
