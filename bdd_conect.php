<?php
// database connection 
$bdd = "Pizzeria Mario et Luigi";
$server = "localhost";
$user = "root";
$psw = "root"; 
$connect = mysqli_connect($server, $user, $psw, $bdd); 

if ($connect -> connect_error){
    echo "Not connected to Db " . $connect ->connect_error;
}
?>