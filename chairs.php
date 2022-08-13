<?php
  include "connection.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Chairs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5 {
      font-family: "Raleway", sans-serif
    }
    .tabl-chair {
      position: relative;
      width: 250px;
      height: 250px;
    }
    .table {
      position: absolute;
      height: 181px;
      width: 181px;
      left: 40px;
      top: 45px;
      border-radius: 0px;
    }
    .chair-sw {
      position: absolute;
      height: 31px;
      width: 22px;
      left: 59px;
      top: 177px;
      border-radius: 0px;

    }
    .chair-s {
      position: absolute;
      height: 31px;
      width: 22px;
      left: 119px;
      top: 200px;
      border-radius: 0px;

    }
    .chair-se {
      position: absolute;
      height: 31px;
      width: 22px;
      left: 179px;
      top: 177px;
      border-radius: 0px;

    }
    .chair-e {
      position: absolute;
      height: 31px;
      width: 22px;
      left: 196px;
      top: 120px;
      border-radius: 0px;
      
    }
    .chair-ne {
      position: absolute;
      height: 31px;
      width: 22px;
      left: 179px;
      top: 63px;
      border-radius: 0px;

    }
    .chair-n {
      position: absolute;
      height: 31px;
      width: 22px;
      left: 119px;
      top: 41px;
      border-radius: 0px;

    }
    .chair-nw {
      position: absolute;
      height: 31px;
      width: 22px;
      left: 59px;
      top: 63px;
      border-radius: 0px;

    }
    .chair-w {
      position: absolute;
      height: 31px;
      width: 22px;
      left: 43px;
      top: 120px;
      border-radius: 0px;

    }
    .chair-btn {
      border: 0px; 

    }
    </style>
</head>
<body>
    <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
    <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a> 
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">HOME</a> 
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
    <a href="index.php#about" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">ABOUT</a> 
    <a href="index.php#packs" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">PACKS</a>
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

  <div class="w3-container position-absolute w3-row-padding w3-center" style="top: 10%;" style="display: flex;"> 
    <div class="d-flex">
      <div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table">
          <form action="chairs.php" method="post">
            <button type="submit" name="chair1" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="1">
            </button>
            <button type="submit" name="chair2" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="2">
            </button>
            <button type="submit" name="chair3" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="3">
            </button>
            <button type="submit" name="chair4" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="4">
            </button>
            <button type="submit" name="chair5" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="5">
            </button>
            <button type="submit" name="chair6" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="6">
            </button>
            <button type="submit" name="chair7" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="7">
            </button>
            <button type="submit" name="chair8" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="8">
            </button>
          </form>
        </div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table" >
          <form action="chairs.php" method="post">
            <button type="submit" name="chair9" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="9">
            </button>
            <button type="submit" name="chair10" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="10">
            </button>
            <button type="submit" name="chair11" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="11">
            </button>
            <button type="submit" name="chair12" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="12">
            </button>
            <button type="submit" name="chair13" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="13">
            </button>
            <button type="submit" name="chair14" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="14">
            </button>
            <button type="submit" name="chair15" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="15">
            </button>
            <button type="submit" name="chair16" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="16">
            </button>
          </form>
        </div>

    </div>      
    <div class="d-flex">
      <div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table" >
          <img src="img/chair-available.png" alt="" class="chair-sw"><form action="chairs.php" method="post">
            <button type="submit" name="chair17" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="17">
            </button>
            <button type="submit" name="chair18" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="18">
            </button>
            <button type="submit" name="chair19" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="19">
            </button>
            <button type="submit" name="chair20" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="20">
            </button>
            <button type="submit" name="chair21" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="21">
            </button>
            <button type="submit" name="chair22" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="22">
            </button>
            <button type="submit" name="chair23" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="23">
            </button>
            <button type="submit" name="chair24" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="24">
            </button>
          </form>        </div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table" >
          <form action="chairs.php" method="post">
            <button type="submit" name="chair25" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="25">
            </button>
            <button type="submit" name="chair26" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="26">
            </button>
            <button type="submit" name="chair27" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="27">
            </button>
            <button type="submit" name="chair28" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="28">
            </button>
            <button type="submit" name="chair29" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="29">
            </button>
            <button type="submit" name="chair30" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="30">
            </button>
            <button type="submit" name="chair31" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="31">
            </button>
            <button type="submit" name="chair32" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="32">
            </button>
          </form>
        </div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table" >
          <form action="chairs.php" method="post">
            <button type="submit" name="chair33" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="33">
            </button>
            <button type="submit" name="chair34" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="34">
            </button>
            <button type="submit" name="chair35" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="35">
            </button>
            <button type="submit" name="chair36" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="36">
            </button>
            <button type="submit" name="chair37" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="37">
            </button>
            <button type="submit" name="chair38" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="38">
            </button>
            <button type="submit" name="chair39" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="39">
            </button>
            <button type="submit" name="chair40" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="40">
            </button>
          </form>
        </div>
      </div>
    </div>
      <div class="w3-dark-gray" style="width: 500px;">
      <br>
      <br>
      <br>
        <p>Dancing Zone</p>
        <br><br><br><br><br><br><br>
        <?php
          printf('<p>Chairs to select: '.$_SESSION["user_selects"].'</p>');
        ?>
      </div>
    <div class="d-flex">
      <div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table">
          <form action="chairs.php" method="post">
            <button type="submit" name="chair41" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="41">
            </button>
            <button type="submit" name="chair42" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="42">
            </button>
            <button type="submit" name="chair43" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="43">
            </button>
            <button type="submit" name="chair44" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="44">
            </button>
            <button type="submit" name="chair45" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="45">
            </button>
            <button type="submit" name="chair46" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="46">
            </button>
            <button type="submit" name="chair47" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="47">
            </button>
            <button type="submit" name="chair48" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="48">
            </button>
          </form>
        </div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table" >
          <form action="chairs.php" method="post">
            <button type="submit" name="chair49" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="49">
            </button>
            <button type="submit" name="chair50" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="50">
            </button>
            <button type="submit" name="chair51" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="51">
            </button>
            <button type="submit" name="chair52" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="52">
            </button>
            <button type="submit" name="chair53" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="53">
            </button>
            <button type="submit" name="chair54" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="54">
            </button>
            <button type="submit" name="chair55" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="55">
            </button>
            <button type="submit" name="chair56" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="56">
            </button>
          </form>
        </div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table" >
          <form action="chairs.php" method="post">
            <button type="submit" name="chair57" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="57">
            </button>
            <button type="submit" name="chair58" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="58">
            </button>
            <button type="submit" name="chair59" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="59">
            </button>
            <button type="submit" name="chair60" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="60">
            </button>
            <button type="submit" name="chair61" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="61">
            </button>
            <button type="submit" name="chair62" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="62">
            </button>
            <button type="submit" name="chair63" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="63">
            </button>
            <button type="submit" name="chair64" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="64">
            </button>
          </form>
        </div>
    </div>      
    <div class="d-flex">
      <div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table" >
          <form action="chairs.php" method="post">
            <button type="submit" name="chair65" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="65">
            </button>
            <button type="submit" name="chair66" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="66">
            </button>
            <button type="submit" name="chair67" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="67">
            </button>
            <button type="submit" name="chair68" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="68">
            </button>
            <button type="submit" name="chair69" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="69">
            </button>
            <button type="submit" name="chair70" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="70">
            </button>
            <button type="submit" name="chair71" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="71">
            </button>
            <button type="submit" name="chair72" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="72">
            </button>
          </form>
        </div>
        <div class="tabl-chair w3-light-gray">
          <img src="img/table.png" alt="" class="table" >
          <form action="chairs.php" method="post">
            <button type="submit" name="chair73" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-sw" id="73">
            </button>
            <button type="submit" name="chair74" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-s" id="74">
            </button>
            <button type="submit" name="chair75" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-se" id="75">
            </button>
            <button type="submit" name="chair76" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-e" id="76">
            </button>
            <button type="submit" name="chair77" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-ne" id="77">
            </button>
            <button type="submit" name="chair78" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-n" id="78">
            </button>
            <button type="submit" name="chair79" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-nw" id="79">
            </button>
            <button type="submit" name="chair80" class="chair-btn">
              <img src="img/chair-available.png" alt="" class="chair-w" id="80">
            </button>
          </form>
        </div>        
      </div>
    </div>

  </div>

 



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
      //logout
      if (isset($_POST["logout"])){
        session_unset();
        session_destroy();
        printf("<script>window.location.href = \"index.php\";</script>");
      }
      // Showing occupied and selected chairs
      $sqlchairs = "SELECT * FROM `chairs`;";
      $result = $mysql->query($sqlchairs);
      $chairs = $result->fetch_all(MYSQLI_ASSOC);
      foreach($chairs as $chair) {
        $chid = $chair['id'];
        $uid = $chair['userid'];
        $actuser = $_SESSION['user_id'];
        //printf('<script>console.log("'.$chid.'-'.$uid.'--'.$actuser.'")</script>');
        if($uid==''){
          printf('<script>
          let chair'.$chid.' = document.getElementById("'.$chid.'");
          chair'.$chid.'.setAttribute("src", "img/chair-available.png");         
          </script>');
        } else {
          if($uid!=$actuser){
            printf('<script>
            let chair'.$chid.' = document.getElementById("'.$chid.'");
            chair'.$chid.'.setAttribute("src", "img/chair-occupied.png");         
            </script>');
          } else {
            printf('<script>
            let chair'.$chid.' = document.getElementById("'.$chid.'");
            chair'.$chid.'.setAttribute("src", "img/chair-selected.png");         
            </script>');
          }
        }
      }
      // Selecting chairs
      foreach($chairs as $chair) {
        $chid = $chair['id'];
        $uid = $chair['userid'];
        $actuser = $_SESSION['user_id'];
        $cname = 'chair'.$chid;

        if(isset($_POST[$cname])){          
          if($uid==''){
            if($_SESSION["user_selects"]>0){
              $_SESSION["user_selects"] -= 1;
              $selects = $_SESSION["user_selects"];
              $sqlup = "UPDATE `users` SET `selects` = '$selects' WHERE `users`.`id` = '$actuser';";
              $mysql->query($sqlup);
              $sqlselect = "UPDATE `chairs` SET `userid` = '$actuser' WHERE `chairs`.`id` = '$chid';";
              $mysql->query($sqlselect);
              printf("<script>window.location.href = \"chairs.php\";</script>");
            }

          } else {
            if($uid==$actuser){
              if($_SESSION["user_selects"]<$_SESSION["user_max"]){
                $_SESSION["user_selects"] += 1;
                $selects = $_SESSION["user_selects"];
                $sqlup = "UPDATE `users` SET `selects` = '$selects' WHERE `users`.`id` = '$actuser';";
                $mysql->query($sqlup);
                $sqlselect = "UPDATE `chairs` SET `userid` = NULL WHERE `chairs`.`id` = '$chid';";
                $mysql->query($sqlselect);
                printf("<script>window.location.href = \"chairs.php\";</script>");
              }

            }
          }
                   
        }
      }

    ?>
    <script>
      
    </script>
</body>
</html>