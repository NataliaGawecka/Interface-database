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
          <form action="upload.php?Id=<?php echo $_GET["Id"]; ?>&Name=<?php echo $_GET["Name"]; ?>&LastName=<?php echo $_GET["LastName"]; ?>&Position=<?php echo $_GET["Position"]; ?>&Salary=<?php echo $_GET["Salary"]; ?>&Contract=<?php echo $_GET["Contract"]; ?>&Date=<?php echo $_GET["Date"]; ?>&Telephone=<?php echo $_GET["Telephone"]; ?>&Address=<?php echo $_GET["Address"]; ?>" method="post"  enctype="multipart/form-data">
            
           <img src="./images/<?php echo $_GET["Picture"];?>" alt="" />
           <br>

           <input type="file" 
                  name="my_image">
           <input type="submit" 
                  name="submit"
                  value="Upload">
            
            </form>
            
            <h3><?php echo $_GET["Name"]; ?> <?php echo $_GET["LastName"]; ?></h3>
           
          </div>
          <div class="links">
            <div class="link">
              <img src="./images/worker.png" alt="" />
              <h2>Workers</h2>
            </div>
            <div class="link">
              <img src="./images/user.png" alt="" />
              <h2>Users</h2>
            </div>
            <div class="link">
              <img src="./images/home.png" alt="" />
              <h2>About</h2>
            </div>
            <div class="link">
              <img src="./images/phone.png" alt="" />
              <h2>Contact</h2>
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
            
            <form action="function_edit_worker.php?Id=<?php echo $_GET["Id"]; ?>" method="POST">
            <h2 id="h2">Name</h2>
            <input type="text" class="input-field" name="name" id="name" value="<?php echo $_GET["Name"]; ?>"></input>
            <h2 id="h3">Last name</h2>
            <input type="text" class="input-field" name="last_name" id="last_name"   value="<?php echo $_GET["LastName"]; ?>"></input>
            <h2 id="h4">Position</h2>
            <input  type="text" class="input-field" name="position" id="position"  value="<?php echo $_GET["Position"]; ?>"></input>
            <h2 id="h5">Salary</h2>
            <input  type="text" class="input-field" name="salary" id="salary"  value="<?php echo $_GET["Salary"]; ?>"></input>
            <h2 id="h6">Contract</h2>
             <select name="contract" class="input-field" id="contract" >
             <option selected="selected"><?php echo $_GET["Contract"]; ?></option>
             <option value="Full-time">Full-time</option>
             <option value="Part-time">Part-time</option>
             <option value="Fixed-term">Fixed-term </option>
             <option value="Temporary ">Temporary </option>
	        <option value="Agency ">Agency</option>
	        <option value="Freelancers">Freelancers</option>
            </select>
            <h2 id="h1">Term of employment</h2>
            <input type="date" class="input-field" name="date" id="date"  value="<?php echo $_GET["Date"]; ?>" required pattern="\d{4}-\d{2}-\d{2}"> </input>
            <h2 id="h7">Telephone</h2>
            <input  type="text" class="input-field" name="telephone" id="telephone"  value="<?php echo $_GET["Telephone"]; ?>"></input>
            <h2 id="h9">Address</h2>
            <input  type="text" class="input-field"name="address" id="address"  value="<?php echo $_GET["Address"]; ?>"></input>
            <input type="submit" id="button_update_worker" value="Update Worker" name="button_update_worker" ></button>
            </form>
        
        </div>

      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </body>
</html>