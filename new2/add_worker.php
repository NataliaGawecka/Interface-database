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
  <style>
      
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
	bottom:-20px;
	width:250px;
	border-radius:20px;
	font-size: 25px;
    font-family: "Poppins", sans-serif;
}
      </style>
  <body>
    <main>
      <section class="glass " >
        <div class="dashboard">
          <div class="user">
            <img src="./images/unknow.jpg" alt="" />
            <br>
        
            <h3></h3>
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
            <h1>Fill in the form to add worker</h1>
            <input type="text" />
            </div>

            <div class="cards">
            
            <form action="function_add_worker.php" method="POST">
            <h2 id="h2">Name</h2>
            <input type="text" class="input-field" name="name" id="name"></input>
            <h2 id="h3">Last name</h2>
            <input type="text" class="input-field" name="last_name" id="last_name"   ></input>
            <h2 id="h4">Position</h2>
            <input  type="text" class="input-field" name="position" id="position"  ></input>
            <h2 id="h5">Salary</h2>
            <input  type="text" class="input-field" name="salary" id="salary"  ></input>
            <h2 id="h6">Contract</h2>
             <select name="contract" class="input-field" id="contract" >
             <option selected="selected"></option>
             <option value="Full-time">Full-time</option>
             <option value="Part-time">Part-time</option>
             <option value="Fixed-term">Fixed-term </option>
             <option value="Temporary ">Temporary </option>
	        <option value="Agency ">Agency</option>
	        <option value="Freelancers">Freelancers</option>
            </select>
            <h2 id="h1">Term of employment</h2>
            <input type="date" class="input-field" name="date" id="date"  > </input>
            <h2 id="h7">Telephone</h2>
            <input  type="text" class="input-field" name="telephone" id="telephone"  ></input>
            <h2 id="h9">Address</h2>
            <input  type="text" class="input-field"name="address" id="address" ></input>
            <input type="submit" id="button_add_worker" value="Add Worker" name="button_add_worker" ></button>
            </form>
        
        </div>

      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </body>
</html>