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

if(isset($_POST['button_add_worker'])){
$name=$_POST['name'];
$last_name=$_POST['last_name'];
$position=$_POST['position'];
$salary=$_POST['salary'];
$contract=$_POST['contract'];
$date=$_POST['date'];
$telephone=$_POST['telephone'];
$address=$_POST['address'];
$id=$_SESSION['id']++;
$zapytanie="SELECT COUNT(1) FROM worker_table WHERE Name='$name' AND LastName='$last_name';";
	 $r=mysqli_query($conn,$zapytanie);
	 $row=mysqli_fetch_row($r);
	 if($row[0]< 1){
     $zapytanie2="INSERT INTO worker_table(id,Name,LastName,Position, Salary, Contract, TermOfEmployment, Telephone, Address) VALUES ($id,'$name','$last_name','$position', $salary, '$contract', '$date', $telephone, '$address');";
     mysqli_query($conn,$zapytanie2);
     header("Location: http://localhost/new2/webside.php?Alert=success");
	 }
	 else{
		  header("Location: http://localhost/new2/add_worker.php");
	 }
  }
  
  
  ?>