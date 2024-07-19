<?php
include 'bdd_conect.php';
session_start(); 



if (isset($_POST["sign_in"])){
        /*$nom = ($_POST["nom"]); 
        $prenom = ($_POST["Prenom"]);
        $genre= $_POST["genre"];
        $adress =($_POST["adress"]);
        $num_tel =($_POST["phone_num"]);*/
        $Username = ($_POST["Username"]);
        $Password = ($_POST["psw"]);
        //this is so the password is hidden 
        //$mot_de_pass = md5($mot_de_pass); 

        //this is to check if the user exits: 
        $select ="SELECT * From CLIENT where email='$Username' && Password = 'psw' ";
        //so this connects to the DB and and prefoms the requete 
        $resultat = mysqli_query($connect, $select);
        //this means that if there are more then 0 rows 
        if (mysqli_num_rows($resultat) > 0){
            //does this gives us the result of the query 
            $row = mysqli_fetch_array($resultat);
            //I dont have a user_type i set the admin in my database  to zero so i need to check inside the database if admin = 1 
        //Maybe i  do a requete like SELECT * FROM CLIENT WHERE admin = 1
        //so apperently i can do the admin = 1 or admin = 0 from the DB
        
            if ($row['admin'] == 1){
                //this checks if the person is an admin 
                echo "Your'e an admin";
                $_SESSION['admin_name'] = $row['prenom'] ; 
                header("location: admin_homepage.php"); 
                    
                }elseif($row['admin'] == 0){
                    echo "Your'e a user ";
                    $_SESSION['user_name'] = $row['prenom'] ; 
                    header("location: user_homepage.php");
                    
                }
                else {
                    $error[] = "Incorrect email or password.";
                    
                }
            
        }; 
        
        

};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conection</title>
</head>
<body>
<img src ="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/049cf305-54e2-4e37-98da-1d6e28453eb0/dh3slld-a4ea1a99-5548-4605-8490-714abd62aa40.jpg/v1/fill/w_894,h_894,q_70,strp/mario_and_luigi_eating_pizza_by_spongebobnintendo20_dh3slld-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzA0OWNmMzA1LTU0ZTItNGUzNy05OGRhLTFkNmUyODQ1M2ViMFwvZGgzc2xsZC1hNGVhMWE5OS01NTQ4LTQ2MDUtODQ5MC03MTRhYmQ2MmFhNDAuanBnIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.Ne0A1VWpL5l8a2jMeSCtcD57itta-_iqcsmgregDhDA"/>
    <table>
        <td>
        <h1>T'as un compte ? </h1>
        <h3>Login :</h3>
        <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class= "error-msg">'.$error.'</span>';
                }
            }
            ?>
        <!--Maybe put this in the main page -->
        
            <div class = login_form>
            <form action = "" method = "post">
                <div class = login_info>
                    <label for = "Username">Username/email: </label>
                    <input type ="email" id = "Username" name = "Username" required>
                    <br>
                    <label for = "psw"> Password: </label>
                    <input type ="password" id = "psw" name = "psw" required>
                    <br>
                    <input type = "submit" value = "Login" name = "sign_in"> 
       <?php 
?>
<p> don't have an account create one <a href = "register.php">here!</a></p>
</div>
     
</td>
</table>
</div>

    </body>
    </html>
    