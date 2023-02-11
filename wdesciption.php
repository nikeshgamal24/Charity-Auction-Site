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
    <style>
    #dashboard{
      position:absolute;
      right:-110px;
      margin-top:3px;
      width:290px;
      display:flex;
      justify-content:space-around;
      font-size:17px;
    }
    #dashboard p{
      background-color:white;
      color:rgb(243,118,35);
      font-weight:800px;
      padding:4px 9px;
     margin:0px 2px;
     border-radius:6px;
    } 

    #dashboard a{
      background-color:rgb(243,118,35);
      color:white;
      font-weight:800px;
      padding:3px 8px;
     margin:0px 2px;
     border-radius:6px;
      padding:3px 8px;
     margin:0px 2px;
     border-radius:6px;
    } 

    #dashboard a:hover{
      background-color:white;
      color:rgb(243,118,35);
    }
    </style>
</head>

<body>
  <!-- *****************************Top Bar*************************** -->
  <div id="main_container">
       <div id="topBar">
            <div id="digitalClock">
                  
           </div>
            <!-- **********************Search Box**************************** -->
            <form>
                <input style="margin-right:180px;" type="text" placeholder="Search.." name="search" id="searchBox">
            </form>
                 <div id="dashboard">  
                           <p>Welcome,<?php echo $_SESSION['username'];?></p>
                           <a href="logout.php">Log out</a> 
                </div>  
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
            <li><a href="windex.php" target="_self">Auction Gallery</a></li>
            <li><a href="wabout.php" target="_self">About Us</a></li>
            <li><a href="welcome.php" target="_self">Home</a></li>
        </ul>
    </div>
    <!-- ******************End of Navigation Bar************** -->
   
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
                        <p>Reserve Bid:$ 315</p>
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
                        <form action="Bidamtprocess.php" method="POST" autocomplete="off">
                            <span>$</span><input type="text" name="bidAmt" placeholder="Enter Bid amount" id="bidAmt">
                            <input type="submit" name="bidBtn" value="Place Bid" id="BidBtn">
                        </form>
                        
                        <p class="errorBidMessage" id="Message"><?php echo $_SESSION['message'];?></p>
                        <script>
        
                            if(document.getElementById("Message").innerHTML=="Amount recorded successfully<br>Thank you for bidding"){
                                document.getElementById("Message").classList.add("Success");
                                <?php unset($_SESSION["message"]);?>
                            }
                            else{
                                document.getElementById("Message").classList.add("notSuccess");
                                <?php unset($_SESSION["message"]);?>
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