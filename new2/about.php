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
            <h1>About us</h1>
            <input type="text" />
            </div>

            <div class="cards">

             <h2>there is example text.there is example text.there is example text.</h2>
             <br>
             <h2>there is example text.there is example text.there is example text.</h2>
             <br>
             <h2>there is example text.there is example text.there is example text.</h2>
             <br>
             <h2>there is example text.there is example text.there is example text.</h2>
             <br>
             <h2>there is example text.there is example text.there is example text.</h2>
             <br>
             <h2>there is example text.there is example text.there is example text.</h2>
             <br>
             <h2>there is example text.there is example text.there is example text.</h2>
             <br>
             <h2>there is example text.there is example text.there is example text.</h2>
             <br>
        </div>

      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </body>
</html>