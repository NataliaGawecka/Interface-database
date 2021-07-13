<?php 

if (isset($_POST['submit'])=='submit' && isset($_FILES['my_image'])) {
	
    $host='localhost';
    $user='root';
    $pass='';
    $db='pracownicy';
    $conn= mysqli_connect($host,$user,$pass) or die ("Nie można się połączyć");
    $db= mysqli_select_db($conn,$db) or die ("Nie można wybrać bazy danych");

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];


    $Id=$_GET['Id'];
    $Username=$_GET['Username'];
    $Email=$_GET['Email'];
    $Password=$_GET['Password'];
    
   

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'Images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql="UPDATE user_table SET picture='$new_img_name' WHERE id=$Id ";
				mysqli_query($conn, $sql);
				header("Location: edit_user.php?Id=$ID&Username=$Username&Email=$Email&Password=$Password&Picture=$new_img_name");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}