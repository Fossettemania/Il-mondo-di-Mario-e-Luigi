<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>
    <?php
    //check code breakdown on notion 
    if ($_POST['CLIENT']  admin == 1 ){
        echo "Reservaiton View : ";
        echo "<form action ='' method = 'post' >
        <input type = 'date' name = 'reservation_day'>
        </form>"

        //essentionally the sql requete would be SELECT * FROM 
    } 
    else {
        ?>
        <div class = "reservation_form">
        <form action = "" method ="post"> 
            <p>Genre :</p>
            <label for = "genre">Male</label>
            <input type = "radio" id = "Male" name = "genre" value = "Male"> 
            <label for = "genre">Female</label>
            <input type = "radio" id = "Female" name = "genre" value = "Female"> 
            <label for = "genre">Other</label>
            <input type = "radio" id = "Other" name = "genre" value = "Other"> 

            <br><br>

            <label for = "nom">Nom/Last Name:</label>
            <input type = "text" id = "nom" name = "nom" required>
            
            <br><br>

            <label for = "prenom">Prenom/First Name:</label>
            <input type = "text" id = "Prenom" name = "Prenom" required>

            <br><br>

            <label for = "phone_num">Numero telephone/Phone Number:</label>
            <input type = "tel" id = "phone_num" name = "phone_num" required >

            <br><br>

            <label for = "email">Adress Email :</label>
            <input type = "email" id = "email" name = "email" required>
            <br><br>
            <label for = "day">Select the day of your reservation</label>
            <input type = "date" id = "dayReservation" name = "day" required>
            <label for = "time">Select the time for your reservation</label>
            <input type = "time" id = "timeReservartion" name = "time" required>
            <br><br>
            <input type = "submit" value = "Reserve" >

        </form>
    </div>
    <!--Remeber to put a conformation-->
   <?php
    }?>
    
    
</body>
</html>