<?php
$host='localhost';
$user='root';
$pass='';
$db='pracownicy';
$conn= mysqli_connect($host,$user,$pass) or die ("Nie można się połączyć");
$db= mysqli_select_db($conn,$db) or die ("Nie można wybrać bazy danych");
session_start();
if(empty($_SESSION['id'])){

    $_SESSION['id'] = 1; 
}
if(isset($_POST['register'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$id=$_SESSION['id']++;
$zapytanie="SELECT COUNT(1) FROM user_table WHERE Username='$username' AND Password='$password';";
	 $r=mysqli_query($conn,$zapytanie);
	 $row=mysqli_fetch_row($r);
	 if($row[0]< 1){
     $zapytanie2="INSERT INTO user_table(id,Username,Email,Password) VALUES ($id,'$username','$email','$password');";
     mysqli_query($conn,$zapytanie2);
     header("Location: http://localhost/new2/index.html?Alert=success");
	 }
	 else{
		  header("Location: http://localhost/new2/index.html?Alert=negative");
	 }
  }
  elseif(isset($_POST['log_in'])){
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $zapytanie="SELECT COUNT(1) FROM user_table WHERE Username='$username' AND Password='$password';";
	 $r=mysqli_query($conn,$zapytanie);
	 $row=mysqli_fetch_row($r);
	 if($row[0]>= 1){
		 header("Location: http://localhost/new2/webside.php?Alert=success");
	 }
	 else{
		 header("Location: http://localhost/new2/index.html");
	 }
 }
  ?>