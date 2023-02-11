<?php 
session_start();
if(!isset($_SESSION['message']))
    {
        $_SESSION['message']="";
    }
?>
<?php
  $n=$_SESSION['order'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="formre.css">
  <link rel="stylesheet" href="about.php">
  <link rel="stylesheet" href="index.php">
  <link rel="stylesheet" href="home.php">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Pdescrip.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Description section</title>
</head>

<body>
  <!-- *****************************Top Bar*************************** -->
  <div id="main_container">
    <div id="topBar">
      <div id="digitalClock">
                  
      </div>
            <!-- **********************Search Box**************************** -->
            <form>
                <input type="text" placeholder="Search.." name="search" id="searchBox">
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
        <form id="formRegister">
            <label>LOGIN</label>
            <input type="text" placeholder="Username or Email" id="userH">
            <input type="password" placeholder="Password" id="passwordH">
            <input type="button" value="SIGN IN" id="signBtnH">
            <span>Don't have an account?</span><a href="form.php" target="_blank  " id="registerText">Register for
                Bid</a>
        </form>
    </div>
    <!--***********************End of Register for Bid************/-->

    <div id="bigContainer">
    <div class="c1" id="b1">
            <!-- //Product titel -->
            <p class="ProductTitle">
                Smart Watch
            </p>
            <hr style="border: 1px solid rgb(219,219,219);">
            <!--Fesatures block -->
            <div class="mainDescription">
                <div class="productImg" style="display:flex; justify-content:center;">
                <img id="gridImg"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxZ0MYvYx1Yz0KGCFAZ-ILgs0NxdpHkSW-3RRfRdi0RJEj-zble_3CQPww7-9XMruutZw&usqp=CAU" alt="">
                </div>
                <div class="Bidsection">
                    <p class="placeBid">Place Bid</p>
                    <hr style="border: 1px solid rgb(219,219,219);">
                    <div>
                        <p>Current Bid:$315</p>
                        <p>You must Bid:</p>
                        <p>$<span id="dbBidamt">
                        <?php
                                //checking the connection
                                $conn=mysqli_connect('localhost','root','','Products');
                                 
                                if(!$conn){
                                  echo "connection successful";
                                }
                              
                                   $sql="SELECT * FROM auction_table WHERE id='$n'";
                                  
                                   $result=mysqli_query($conn,$sql);
                                
                                  $array=mysqli_fetch_assoc($result);
                                  $_SESSION['updatedAmt']=$array['amount'];
                        ?>
                        <?php echo $_SESSION['updatedAmt'];?></span> or more</p>
                        <p>Auction End In: <span id="countdown1"></span></p>
                        <p>
                        <form method="POST" action="Bidamtprocess.php">
                            <span>$</span><input type="text" name="bidAmt" placeholder="Enter Bid amount" id="bidAmt">
                            <input type="submit" name="bidBtn" value="Place Bid" id="BidBtn">
                        </form>
                        
                        <p class="errorBidMessage" id="Message"><?php echo $_SESSION['message'];?></p>
                        <script>
        
                            if(document.getElementById("Message").innerHTML=="Amount recorded successfully<br>Thank you for bidding"){
                                document.getElementById("Message").classList.add("Success");
                            }
                            else{
                                document.getElementById("Message").classList.add("notSuccess");
                            }
                        </script>  
                    </p>
                    </div>
                </div>
            </div>
            <!-- Description block -->
            <!-- //Product titel -->
            <p class="ProductDest">
                Description
            </p>
            <p class="descriptionProduct">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Doloremque deserunt, beatae ipsa minima praesentium, itaque
                ducimus vero voluptatem distinctio dignissimos dolore.
                Ex non facere eligendi repellendus quia maiores ratione
                magnam.
            </p>
        </div>
    </div>
    
    <script src="clock.js"></script>
    <script src="countdown.js"></script>
</body>
</html>