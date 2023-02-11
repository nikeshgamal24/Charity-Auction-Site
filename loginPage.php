<?php
session_start();
if(!isset($_SESSION['Lerror'])){
    $_SESSION['Lerror']="";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="about.php">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="form.php">
    <title>LOG IN</title>
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
                <a  id="SignIn" href="form.php">Sign Up</a>
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
    
    <div id="LOGNINFORM" >
        <p class="sign" align="center">Log in</p>
        <p class="error" id="logMessage"><?php echo $_SESSION['Lerror'];?></p>
                        <script>
        
                            if(document.getElementById("logMessage").innerHTML=="Email Or Password is incorrect"){
                                document.getElementById("logMessage").classList.add("notSuccess");
                            }
                        </script>
                    <?php 
                                unset($_SESSION['Lerror']);
                                session_destroy();
                        ?>  
        <form method="POST"  action="loginProcess.php" class="form1">
          <input class="un" type="text" align="center" placeholder="Email ID" name="userid">
          <input class="pass" type="password" align="center" placeholder="Password" name="password">
          <input type="submit" class="submit" align="center" value="Log In" name="submitBtn">
          <p class="forgot" align="center"><a href="#">Forgot Password?</p>      
    </div>    
    <script src="clock.js"></script>
</body>
</html>