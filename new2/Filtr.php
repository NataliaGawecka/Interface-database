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
  
  h5{
  position: relative;
  top:-100px;
}

      </style>
  <body>
    <main>
      <section class="glass " >
        <div class="dashboard">
          <div class="user">
          
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
          <h2>If you need help click here.</h2>
          <h5> <img src="./images/help.png" alt="" /></h5>
          </div>
        </div>
        <div class="games">
          <div class="status">
            <h1>Workers</h1>
            <input type="text" />
            </div>

            <div class="cards">

            <form action="Filtr.php">
             <div class="form-group fg--search">
             <input type="text" class="input" placeholder="search by name" name="name_search" id="name_search">
             <button type="submit" name="submit_filtr"><i class="fa fa-search"></i></button>
            </div>
            </from>


            <div class="scroll">
          <?php
             @$name = $_GET['name_search'];  
             $zapytanie="SELECT * FROM worker_table WHERE Name='$name';";

             $wynik=mysqli_query($conn,$zapytanie);
             if(mysqli_num_rows($wynik) <= 0) echo 'BŁĄD! pobierania!';
             else {
                 
                 while($row=mysqli_fetch_row($wynik))
                 { 
                  echo'
                   
                  <div class="card">
                  <img src="./images/'.$row[9].'" alt="" />
                  <div class="card-info">
                  <h2><a href="show.php?Id='.$row[0].'&Name='.$row[1].'&LastName='.$row[2].'&Position='.$row[3].'&Salary='.$row[4].'&Contract='.$row[5].'&Date='.$row[6].'&Telephone='.$row[7].'&Address='.$row[7].'">' .$row[1].' ' .$row[2].'</a></h2>
                  <p>' .$row[3].'</p>
                
                 
                  </div>
                  <div class="percentage">
                  <h2><a href="delete.php?Name='.$row[1].'">delete</a></h2>
                  <h2><a href="edit.php?Id='.$row[0].'&Name='.$row[1].'&LastName='.$row[2].'&Position='.$row[3].'&Salary='.$row[4].'&Contract='.$row[5].'&Date='.$row[6].'&Telephone='.$row[7].'&Address='.$row[8].'&Picture='.$row[9].'">edit</a></h2>
                  </div>
                  </div>
                   
                  '
                     
                 ;}
             }
        ?>
        </div>
        </div>

      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </body>
</html>