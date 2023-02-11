<?php
session_start();
include("connectionFunctions.php");
$db_handle= new DBController();
error_reporting(E_ALL);
?>

<?php
if(!empty($_GET["code"]))
   {
    $_SESSION['order']=$_GET["code"];
      header("Location:desciption.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formre.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="home.css">
    <link  href="form.php">
    <link href="home.php">
    <link  href="desciption.php">
    <link rel="stylesheet" href="Pdescrip.css">
    <link  href="about.php">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Auction Gallery</title>
</head>
<body>
        <!-- *****************************Top Bar*************************** -->
     <div id="main_container">
       <div id="topBar">
        <div id="digitalClock">
                  
        </div>
     <!-- **********************Search Box**************************** -->
         <form>
            <input type="text" placeholder="Search.." name="search" id="searchBox" onkeyup="SearchBox()">
            <a id="createAccount" href="loginPage.php">Log In</a>
                <a id="SignIn" href="form.php">Sign Up</a>
          </form>
        </div>
    </div>
     <!-- **********************End of Search Box****************************-->
      <!-- ******************Navigation Bar************** -->
          <div id="navigationBar">
            <div id="Themetitle">
              <img src="logo.PNG">
          </div>
              <ul id="navItems">
                <li><a href="#">Department</a></li>
                <li><a href="index.php" target="_self">Auction Gallery</a></li>
                <li><a href="about.php" target="_self">About Us</a></li>
                <li><a href="home.php" target="_self">Home</a></li>
              </ul>
          </div>
       <!-- ******************End of Navigation Bar************** -->
       <!-- /***********************Register for Bid************/ -->
         <div id="registerForm">
           <form method="POST" action="loginProcess.php" id="formRegister">
                 <label>LOGIN</label>
                 <input type="text" name="userid" placeholder="Username or Email" id="userH">
                 <input type="password" name="password" placeholder="Password" id="passwordH">
                 <input type="submit" value="SIGN IN" id="signBtnH">
                 <span>Don't have an account?</span><a href="form.php" target="_blank  " id="registerText">Register for Bid</a>
           </form>
         </div>
       <!--***********************End of Register for Bid************/-->
      <!--/****************Grid system using flexbox**************/--> 
       <div id="gridcontainer">
             <div id="filter_container">
                  <div id="filter1">
                       <!--code for checkboxes-->
                       <form id="filterForm">
                          <p><label class="filterTitle">ITEM CATEGORIES</label></p>
                           <input type="checkbox" name="procategory" class="procategory" value="Electronics">Electronics<br>
                           <input type="checkbox" name="procategory" class="procategory" value="Land">Land<br>
                           <input type="checkbox" name="procategory" class="procategory" value="Jewellery">Jewellery<br>
                           <input type="checkbox" name="procategory" class="procategory" value="Kitchenware">Kitchenware<br>
                           <input type="checkbox" name="procategory" class="procategory" value="Artefacts">Artefacts<br>
                           <input type="checkbox" name="procategory" class="procategory" value="Antique Products">Antique Products<br>
                           <input type="checkbox" name="procategory" class="procategory" value="Electronics">Electronics<br>
                       </form>
                  </div>
                  <div id="filter2">
                         <!-- code for checkboxes -->
                     <form id="rangeForm">
                         <p><label class="rangeTitle">Range</label></p>
                           <input type="checkbox" name="procategory" class="procategory" >Less than $50<br>
                           <input type="checkbox" name="procategory" class="procategory" >$50 - $100<br>
                           <input type="checkbox" name="procategory" class="procategory" >$101 - $200<br>
                           <input type="checkbox" name="procategory" class="procategory" >$201 - $500<br>
                           <input type="checkbox" name="procategory" class="procategory" >$501 - $1,000<br>
                           <input type="checkbox" name="procategory" class="procategory" >$1,001 - $2,000<br>
                           <input type="checkbox" name="procategory" class="procategory" >$2,001 - $5,000<br>
                           <input type="checkbox" name="procategory" class="procategory" >More than $5,000<br>
                     </form>
                  </div>
             </div>
            
       <div id="grid">
            <!-- code for the flexbox properties -->
            <!-- /***********************Produc t display*****************/ -->
           <?php
        
            $product_array = $db_handle->runQuery("SELECT * FROM auction_table ORDER BY id ASC");
            if (!empty($product_array)) { 
              foreach($product_array as $key=>$value){
                $_SESSION["id"]=$product_array[$key]["id"]; 
           ?>
            <div class="gridBox">
               <form method="POST" class="gridForm" action="index.php?action=add&code=<?php echo $product_array[$key]["id"]; ?>">
                    <div class="gridboximg">
                       <img id="gridImg" src="img<?php echo $product_array[$key]["id"];?>.jpg">
                      </div>
                  <div class="detaibox">
                     <p class="cardtitle"><?php echo $product_array[$key]["name"]; ?></p>
                     <p class="info"><span>Reserve:</span> <span><?php echo "$". $product_array[$key]["iniamt"]; ?></span> </p>
                     <p class="info"><span>Bid:</span> <span><?php echo "$". $product_array[$key]["amount"]; ?></span></p>
                     <p class="info"> <span>Closes:</span> <span> 04/11/2021 08:00 PM</span></p>
                      <input type="submit" value="View Details">
                   </div>
               </form>
            </div>
          <?php
            }
            }
          ?>
       </div>


  </div>
  <script src="test.js"></script>
  <script src="clock.js"></script>
</body>
</html>