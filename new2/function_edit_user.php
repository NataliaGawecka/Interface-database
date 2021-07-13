<?php
$host='localhost';
$user='root';
$pass='';
$db='pracownicy';
$conn= mysqli_connect($host,$user,$pass) or die ("Nie można się połączyć");
$db= mysqli_select_db($conn,$db) or die ("Nie można wybrać bazy danych");

if(isset($_POST['button_update_worker'])){
    $Id=$_GET['Id'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $Email=$_POST['Email'];
    $zapytanie="UPDATE user_table SET Username='$Username' , Password='$Password', Email='$Email' WHERE id=$Id ";
 $r=mysqli_query($conn,$zapytanie);
 header("Location: http://localhost/new2/users_webside.php");

}