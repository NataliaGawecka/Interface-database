<?php

$host='localhost';
$user='root';
$pass='';
$db='pracownicy';
$conn= mysqli_connect($host,$user,$pass) or die ("Nie można się połączyć");
$db= mysqli_select_db($conn,$db) or die ("Nie można wybrać bazy danych");

    
    $Username = $_GET['Username'];
    
    $sql = "DELETE FROM user_table where Username='$Username'";
    mysqli_query($conn,$sql);
    
    if($_GET){
        header('Location: webside.php');
    }
    

?>