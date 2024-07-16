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
        <!--Maybe put this in the main page -->
        <?php if (isset($_POST["Username"]) == false  and isset($_POST["psw"]) == false)       
        {
            echo "<p>Pas connecte</p>"
            ?>
            <div class = login_form>
            <form action = "register.php" method = "post">
                <div class = login_info>
                    <label for = "Username">Username/email: </label>
                    <input type ="email" id = "Username" name = "Username" required>
                    <br>
                    <label for = "psw"> Password: </label>
                    <input type ="password" id = "psw" name = "psw" required>
                    <br>
                    <input type = "submit" value = "Login" name = "sign_in"> 
       <?php }
?>

</div>
     
</td>
</table>
</div>

    </body>
    </html>
    </body>
    </html>