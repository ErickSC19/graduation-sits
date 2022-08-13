<?php
  include "connection.php";
  include "mail/class.email.php";
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slideshow.css">
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
      background-image: url("img/graduation-party.jpg");
      min-height: 100%;
      width: 100%;
      height: 900px;
    }


    .w3-wide {
      letter-spacing: 10px;
    }
    .w3-hover-opacity {
      cursor: pointer;
    }
    .slides {
      width: 100%; 
      height: 500px;
    }
    @media only screen and (max-width: 300px) {
      .slides {
        height: 100px;
      }
    }
    </style>
    
</head>
<body>
    <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
    <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">HOME</a> 
    <?php
      if(isset($_SESSION['user_id'])){
        printf('<form action="index.php" method="post">
        <button onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16" type="submit" name="logout">LOG OUT</button> 
        </form>');        
      } else {
        printf(
          '<a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">LOGIN</a> 
          <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">REGISTER</a>'          
        );
      }

    ?>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">ABOUT</a> 
    <a href="#packs" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">PACKS</a>
  </nav>
  
  <!-- Top menu on small screens -->
  <header class="w3-container w3-top w3-white w3-xlarge w3-padding-16">
    <span class="w3-left w3-padding"><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>Sits</span>
    
    <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
    <p class="w3-right w3-padding">
      
    <?php 
    if(isset($_SESSION['user_id'])){
      echo $_SESSION['user_name'];
    } else {

    }
    ?>
    </p>
  </header>
  
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>  

  <!-- Parallax -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">PREPARE <span class="w3-hide-small">FOR</span> PROM</span>
    </div>
  </div>
  <!-- About -->
  <div class="w3-content w3-container w3-padding-64 w3-light-gray" id="about">
      <br>
    <h3 class="w3-center">RESERVE YOUR SITS</h3>
    <p class="w3-center"><em>We wait you this 10th july!</em></p>
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <!--<p><b><i class="fa fa-user w3-margin-right"></i>My Name</b></p><br>-->
        <img src="img/usa_prom2.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of a Prom" width="500" height="340">
      </div>
  
      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large w3-margin-top">
          
        <p>Welcome to the official website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="w3-container">
        <iframe src="slide.html" frameborder="0" class="slides"></iframe>
      </div>
      

    </div>
  
  <!-- Packages -->
  
  <div class="w3-container w3-dark-gray w3-center w3-text-light-grey w3-padding-32" id="packs">
    <h3 class="w3-padding-16">Packs Available</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-white w3-center">
            <li class="w3-black w3-xlarge w3-padding-32">Individual</li>
            <li class="w3-padding-16">1 sit</li>
            <li class="w3-padding-16">Food included</li>
            <li class="w3-padding-16">Drinks included</li>
            <li class="w3-padding-16">Attention to table</li>
            <li class="w3-padding-16">
              <h2>$ 150</h2>
              <span class="w3-opacity">For 10th July</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <?php 
                if(isset($_SESSION['user_id'])){
                  if(isset($_SESSION['user_pack'])){
                    if($_SESSION['user_pack']==1){
                      printf("<button class=\"w3-button w3-white w3-padding-large\" onClick=\"window.location.href = 'chairs.php';\">Choose chairs</button>");
                    } else {
                      printf('
                      <form action="index.php" method="post">
                        <button class="w3-button w3-white w3-padding-large" name="pack1">Select</button>
                      </form>                  
                      ');
                    }
                  } else {
                    printf('
                    <form action="index.php" method="post">
                      <button class="w3-button w3-white w3-padding-large" name="pack1">Select</button>
                    </form>                  
                    ');
                  }


                } else {
                  printf("<button class=\"w3-button w3-white w3-padding-large\" onClick=\"window.location.href = 'login.php';\">Sign Up</button>");
                }
              ?>
              
            </li>
          </ul>
        </div>
        
        <div class="w3-third">
          <ul class="w3-ul w3-white w3-center">
            <li class="w3-black w3-xlarge w3-padding-32">Couple</li>
            <li class="w3-padding-16">2 sits</li>
            <li class="w3-padding-16">food included</li>
            <li class="w3-padding-16">Drinks included</li>
            <li class="w3-padding-16">Attention to table</li>
            <li class="w3-padding-16">
              <h2>$ 250</h2>
              <span class="w3-opacity">For 10th July</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <?php 
                  if(isset($_SESSION['user_id'])){
                    if(isset($_SESSION['user_pack'])){
                      if($_SESSION['user_pack']==2){
                        printf("<button class=\"w3-button w3-white w3-padding-large\" onClick=\"window.location.href = 'chairs.php';\">Choose chairs</button>");
                      } else {
                        printf('
                        <form action="index.php" method="post">
                          <button class="w3-button w3-white w3-padding-large" name="pack2">Select</button>
                        </form>                  
                        ');
                      }
                    } else {
                      printf('
                      <form action="index.php" method="post">
                        <button class="w3-button w3-white w3-padding-large" name="pack2">Select</button>
                      </form>                  
                      ');
                    }


                  } else {
                    printf("<button class=\"w3-button w3-white w3-padding-large\" onClick=\"window.location.href = 'login.php';\">Sign Up</button>");
                  }
                ?>
            </li>
          </ul>
        </div>

        <div class="w3-third">
            <ul class="w3-ul w3-white w3-center">
              <li class="w3-black w3-xlarge w3-padding-32">Couple</li>
              <li class="w3-padding-16">1 table (8 sits)</li>
              <li class="w3-padding-16">food included</li>
              <li class="w3-padding-16">Drinks included</li>
              <li class="w3-padding-16">Attention to table</li>
              <li class="w3-padding-16">
                <h2>$ 650</h2>
                <span class="w3-opacity">For 10th July</span>
              </li>
              <li class="w3-light-grey w3-padding-24">
                <?php 
                  if(isset($_SESSION['user_id'])){
                    if(isset($_SESSION['user_pack'])){
                      if($_SESSION['user_pack']==3){
                        printf("<button class=\"w3-button w3-white w3-padding-large\" onClick=\"window.location.href = 'chairs.php';\">Choose chairs</button>");
                      } else {
                        printf('
                        <form action="index.php" method="post">
                          <button class="w3-button w3-white w3-padding-large" name="pack3">Select</button>
                        </form>                  
                        ');
                      }
                    } else {
                      printf('
                      <form action="index.php" method="post">
                        <button class="w3-button w3-white w3-padding-large" name="pack3">Select</button>
                      </form>                  
                      ');
                    }


                  } else {
                    printf("<button class=\"w3-button w3-white w3-padding-large\" onClick=\"window.location.href = 'login.php';\">Sign Up</button>");
                  }
                ?>
              </li>
            </ul>
          </div>
      </div>
  </div>
  <?php
  if(isset($_SESSION['user_id'])){
    printf('
    <br>
    <form action="index.php" method="post">
    <label for="">Subscribe to the newsletter:</label>
    <input class="w3-input w3-border" type="email" placeholder="Your Email" required name="yourEmail">
    <button class="w3-button w3-black w3-right w3-section" type="submit" name="sendmessage">
      <i class="fa fa-paper-plane"></i> SEND MESSAGE
    </button>
  </form>
    ');

  }
  ?>
</div> 

  <!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off w3-">
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
      if (isset($_POST["logout"])){
        session_unset();
        session_destroy();
        printf("<script>window.location.href = \"index.php\";</script>");
      }
      if (isset($_POST["pack1"])){
        $id = $_SESSION['user_id'];
        $_SESSION['user_pack'] = 1;
        $_SESSION['user_selects'] = 1;
        $_SESSION['user_max'] = 1;
        $sqlpack = "UPDATE `users` SET `pack` = '1' WHERE `users`.`id` = $id;";
        $mysql->query($sqlpack);
        $sqlup = "UPDATE `users` SET `selects` = '1' WHERE `users`.`id` = '$id';";
        $mysql->query($sqlup);
        $sqlclean = "UPDATE `chairs` SET `userid` = NULL WHERE `chairs`.`userid` = $id;";
        $mysql->query($sqlclean);
        printf("<script>window.location.href = \"index.php#packs\"; window.location.href = \"index.php#packs\";</script>");
      }
      if (isset($_POST["pack2"])){
        $id = $_SESSION['user_id'];
        $_SESSION['user_selects'] = 2;
        $_SESSION['user_pack'] = 2;
        $_SESSION['user_max'] = 2;
        $sqlpack = "UPDATE `users` SET `pack` = '2' WHERE `users`.`id` = $id;";
        $mysql->query($sqlpack);
        $sqlup = "UPDATE `users` SET `selects` = '2' WHERE `users`.`id` = '$id';";
        $mysql->query($sqlup);
        $sqlclean = "UPDATE `chairs` SET `userid` = NULL WHERE `chairs`.`userid` = $id;";
        $mysql->query($sqlclean);
        printf("<script>window.location.href = \"index.php#packs\"; window.location.href = \"index.php#packs\";</script>");
      }
      if (isset($_POST["pack3"])){
        $id = $_SESSION['user_id'];
        $_SESSION['user_pack'] = 3;
        $_SESSION['user_selects'] = 8;
        $_SESSION['user_max'] = 8;
        $sqlpack = "UPDATE `users` SET `pack` = '3' WHERE `users`.`id` = $id;";
        $mysql->query($sqlpack);
        $sqlup = "UPDATE `users` SET `selects` = '8' WHERE `users`.`id` = '$id';";
        $mysql->query($sqlup);
        $sqlclean = "UPDATE `chairs` SET `userid` = NULL WHERE `chairs`.`userid` = $id;";
        $mysql->query($sqlclean);
        printf("<script>window.location.href = \"index.php#packs\"; window.location.href = \"index.php#packs\";</script>");
      }
      if (isset($_POST["sendmessage"])){
        $id = $_SESSION['user_id'];
        $obj = new Email();
        $message = "Now you are registered to our newsletter!";
        $obj->sendEmail($_POST["yourEmail"], $id, "Now you are sudscribed!", $message);
      }




    ?>

</body>
</html>