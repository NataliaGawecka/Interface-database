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
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

span{
    color:  #426696;
    font-weight: 500;
    opacity: 0.8;
    font-family: "Poppins", sans-serif;
    font-size: 50px;
}

#phone,#envelope,#home{
    color:  #426696;
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
            <h1>Contact with us!</h1>
            <input type="text" />
            </div>

            <div class="cards">


            <i class="fa fa-volume-control-phone fa-5x" aria-hidden="true"  id="phone">   <span id="telephone_number">111-111-111</span></i>
            <br>
            <i class="fa fa-envelope fa-5x" aria-hidden="true" id="envelope">   <span id="email">Database@gmail.com</span></i>
            <br>
            <i class="fa fa-home fa-5x" aria-hidden="true" id="home"> <span id="location">Poland Warsaw ul.XX X</span></i>
          
            <br><br><t>
            <div class="mapouter" >
            <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d156389.09520356412!2d20.921111334332924!3d52.23285504212421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc669a869f01%3A0x72f0be2a88ead3fc!2sWarszawa!5e0!3m2!1spl!2spl!4v1622033668585!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://youtube-embed-code.com">youtube embed code</a><br>
           <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
            <a href="https://www.embedgooglemap.net">how to add a google map to your website</a>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
            </div>
            </div>
           
            
          
 


        </div>

      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </body>
</html>