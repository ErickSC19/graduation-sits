<?php
  include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5 {
    font-family: "Raleway", sans-serif
  }
  
  /* Create a Parallax Effect */
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  /* First image (Logo. Full height) */
  .bgimg-1 {
    background-image: url("img/headerl_plataforma.jpg");
    min-height: 100%;
    width: 100%;
    height: 250px;
  }


  .w3-wide {
    letter-spacing: 10px;
  }
  .w3-hover-opacity {
    cursor: pointer;
  }
  </style>
</head>
<body>
   <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
    <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a> 
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">HOME</a> 
    <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">LOGIN</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">REGISTER</a>
    <a href="index.php#about" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">ABOUT</a> 
    <a href="index.php#packs" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">PACKS</a>
  </nav>
  
  <!-- Top menu on small screens -->
  <header class="w3-container w3-top w3-white w3-xlarge w3-padding-16">
    <span class="w3-left w3-padding"><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>Sits</span>
    <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
  </header>
  
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>  

    <!-- Parallax -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
          <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">REGISTER<span class="w3-hide-small"></span></span>
        </div>
      </div>

      <div class="w3-content w3-container w3-padding-16 w3-light-gray" id="login-forms">
        <form action="register.php" target="_self" method="post">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <label for="">Name</label>
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="nName">
            </div>
            <div class="w3-half">
              <label for="">Email</label>
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="nEmail">
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -8px 8px -8px">
            <label for="">Password</label>
            <input class="w3-input w3-border" type="password" placeholder="Password" required name="nPassword">
          </div>          
          <input class="w3-input w3-border" type="password" placeholder="Retype password" required name="nConfirmation">
          <button class="w3-button w3-black w3-right w3-section" type="submit" name="registering">
            <i class="fa fa-plus-square-o" aria-hidden="true"></i> Create
          </button>
        </form>
      </div>



      <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off w3-bottom position-absolute">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        
      </footer>
  <script>    
    // Script to open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }
    
    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
    
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }
    </script>

    <?php

      if(isset($_POST["registering"])) {
        $name = $_POST["nName"];
        $email = $_POST["nEmail"];
        $password = $_POST["nPassword"];
        $confirmation = $_POST["nConfirmation"];
        if($password==$confirmation){
          $sqlcreate = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `pack`) VALUES (NULL, '$name', '$email', '$password', NULL);";
          $mysql->query($sqlcreate);
          printf("<script>
          alert('You are now registered');
          </script>");
        } else {
          printf("<script>
          alert('The password fields must coincide');
          </script>");
        }
      }
   
    ?>
</body>
</html>