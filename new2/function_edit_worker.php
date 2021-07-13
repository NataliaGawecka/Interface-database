<?php
$host='localhost';
$user='root';
$pass='';
$db='pracownicy';
$conn= mysqli_connect($host,$user,$pass) or die ("Nie można się połączyć");
$db= mysqli_select_db($conn,$db) or die ("Nie można wybrać bazy danych");

if(isset($_POST['button_update_worker'])){
    $Id=$_GET['Id'];
    $name=$_POST['name'];
    $last_name=$_POST['last_name'];
    $position=$_POST['position'];
    $salary=$_POST['salary'];
    $contract=$_POST['contract'];
    $date=$_POST['date'];
    $telephone=$_POST['telephone'];
    $address=$_POST['address'];
$zapytanie="UPDATE worker_table SET Name='$name' , LastName='$last_name', Position='$position', Salary=$salary, Contract='$contract', TermOfEmployment='$date', Telephone=$telephone, Address='$address' WHERE id=$Id ";
 $r=mysqli_query($conn,$zapytanie);
 header("Location: http://localhost/new2/webside.php");

}