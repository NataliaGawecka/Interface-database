<?php
$host='localhost';
$user='root';
$pass='';
$db='pracownicy';
$conn= mysqli_connect($host,$user,$pass) or die ("Nie można się połączyć");
$db= mysqli_select_db($conn,$db) or die ("Nie można wybrać bazy danych");
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glass Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <style>
       .fg--search {
    background: white;
    width: 300px;
    border-radius:20px;
    position: relative;
    top:-15px;
  }
  
  .fg--search input {
    width: 100%;
    padding: 20px 60px 20px 20px;
    display: block;
    border-radius:20px;
  }
  
  .fg--search button {
    background: transparent;
    border: none;
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
    position: absolute;
    top: 0;
    right: 0;
    padding: 18px 20px;
    z-index: 2;
  }
  
  .fg--search input:focus + button .fa-search {
    color: rgb(50,205,50);
  }


  #button_add_worker{
	height: 40px;
    color: #426696;
    background: linear-gradient(
        to left top,
        rgba(255, 255, 255, 0.8),
        rgba(255, 255, 255, 0.5)
      );
	position:relative;
	left:320px;
	bottom: -35px;
	width:250px;
	border-radius:20px;
	font-size: 25px;
    font-family: "Poppins", sans-serif;
}


#sort_button{
	height: 40px;
    color: #426696;
    background: linear-gradient(
        to left top,
        rgba(255, 255, 255, 0.8),
        rgba(255, 255, 255, 0.5)
      );

	width:200px;
	border-radius:20px;
	font-size: 25px;
    font-family: "Poppins", sans-serif;
}

  
.select{
  border-radius:20px;
  height:40px;
  width:80px;
}

label{
  color: #658ec6;
  font-weight: 700;
   opacity: 0.8;
   font-size: 20px;
}
      </style>
  <body>
    <main>
      <section class="glass " >
        <div class="dashboard">
          <div class="user">
            <img src="./images/avatar.png" alt="" />
            <h3>Simo Edwin</h3>
            <p>Pro Member</p>
          </div>
          <div class="links">
            <div class="link">
              <img src="./images/worker.png" alt="" />
              <h2><a href="webside.php">Workers</a></h2>
            </div>
            <div class="link">
              <img src="./images/user.png" alt="" />
              <h2><a href="users_webside.php">Users</a></h2>
            </div>
            <div class="link">
              <img src="./images/home.png" alt="" />
              <h2><a href="about.php">About</a></h2>
            </div>
            <div class="link">
              <img src="./images/phone.png" alt="" />
              <h2><a href="contact.php">Contact</a></h2>
            </div>
          </div>
          <div class="pro">
            <h2>Join pro for free games.</h2>
            <img src="./images/controller.png" alt="" />
          </div>
        </div>
        <div class="games">
          <div class="status">
            <h1>Users</h1>
            <input type="text" />
            </div>

            <div class="cards">


           <form action="sort_worker.php?" >
            <label for="sort">Sort:</label>
            <select name="sort" id="sort" class='select'>
            <optgroup label="Name">
            <option value="asc">Asc</option>
            <option value="desc">desc</option>
              </optgroup>
            </select>
            
            <input type="submit" value="Submit" name="sort_button" id="sort_button">
           </form> 


            <form action="add_worker.php">
            <input type="submit"  id="button_add_worker" value="Add Worker" name="button_add_worker" />
            </form>

        

            <form action="Filtr_user.php">
             <div class="form-group fg--search">
             <input type="text" class="input" placeholder="search by name" name="name_search" id="name_search">
             <button type="submit" name="submit_filtr"><i class="fa fa-search"></i></button>
            </div>
            </from>

           
            
          <div class="scroll">
          <?php
               @$name = $_GET['name_search'];  
               $zapytanie="SELECT * FROM user_table WHERE Username='$name';";

             $wynik=mysqli_query($conn,$zapytanie);
             if(mysqli_num_rows($wynik) <= 0) echo 'BŁĄD! pobierania!';
             else {
                 
                 while($row=mysqli_fetch_row($wynik))
                 { 
                  echo'
                   
                    <div class="card">
                    <img src="./images/employee.png" alt="" />
                    <div class="card-info">
                    <h2><a href="show.php?">' .$row[1].' </a></h2>
                    <p>' .$row[2].'</p>
                  
                   
                    </div>
                    <div class="percentage">
                    <h2><a href="delete.php?">delete</a></h2>
                    <h2><a href="edit.php?">edit</a></h2>
                    </div>
                    </div>
                     
                    '
                     
                 ;}
             }
        ?>
        </div>
        </div>