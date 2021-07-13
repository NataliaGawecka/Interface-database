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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style_edit.css" />
  </head>
  <body>
    <main>
      <section class="glass " >
        <div class="dashboard">
          <div class="user">
          <form action="upload_user.php?Id=<?php echo $_GET["Id"]; ?>&Username=<?php echo $_GET["Username"]; ?>&Email=<?php echo $_GET["Email"]; ?>&Password=<?php echo $_GET["Password"]; ?>" method="post"  enctype="multipart/form-data">
            
            <img src="./images/<?php echo $_GET["Picture"];?>" alt="" />
            <br>
 
            <input type="file" 
                   name="my_image">
            <input type="submit" 
                   name="submit"
                   value="Upload">
             
             </form>
            <h3><?php echo $_GET["Username"]; ?> </h3>
           
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
            <h1>Information about worker</h1>
            <input type="text" />
            </div>

            <div class="cards">
            
            <form action="function_edit_user.php?Id=<?php echo $_GET["Id"]; ?>" method="POST">
            <h2 id="h2">Username</h2>
            <input type="text" class="input-field" name="Username" id="name" value="<?php echo $_GET["Username"]; ?>"></input>
            <h2 id="h3">Email</h2>
            <input type="text" class="input-field" name="Email" id="last_name"   value="<?php echo $_GET["Email"]; ?>"></input>
            <h2 id="h4">Password</h2>
            <input  type="text" class="input-field" name="Password" id="position"  value="<?php echo $_GET["Password"]; ?>"></input>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
            <input type="submit" id="button_update_worker" value="Update User" name="button_update_worker" ></button>
            </from>
        
        </div>

      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </body>
</html>