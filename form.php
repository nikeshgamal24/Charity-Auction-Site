

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
  <title>Resigtration Form</title>
</head>

<body>
  <!-- *****************************Top Bar*************************** -->
  <div id="main_container">
    <div id="topBar">
      <div id="digitalClock">
                  
      </div>
      <!-- **********************Search Box**************************** -->
      <form action="" method="POST" autocomplete="off">
        <input type="text" placeholder="Search.." name="search" id="searchBox">
        <a id="createAccount" href="form.php">Create an Account</a>
        <a id="SignIn" href="loginPage.php">Log In</a>
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
  <!-- <div id="registerForm">
            <form id="formRegister">
                  <label>LOGIN</label>
                  <input type="text" placeholder="Username or Email" id="userH">
                  <input type="password" placeholder="Password" id="passwordH">
                  <input type="button" value="SIGN IN" id="signBtnH">
                  <span>Don't have an account?</span><a href="forn.html" target="_blank" id="registerText">Register for Bid</a>
            </form>
          </div> -->
  <!--***********************End of Register for Bid************/ -->

  <!-- /******************Registration form**************************/ -->
  <div id="formContainer">
    <form action="registrationLog.php" method="POST" autocomplete="off" id="registrationForm">
      <Label id="rTitle">Registration</Label><br /><br />
      Full Name<span class="asterisk">*</span><br />
      <input type="text" name="naame" placeholder="Full Name - First Name and Last Name" id="fullName"
        size="45"><br /><br />
      Email<span class="asterisk">*</span><br />
      <input type="email" placeholder="Email" name="Email" id="Email" size="45"><br /><br />
      Password<span class="asterisk">*</span><br />
      <input type="password" placeholder="Password" name="Password" id="Password" size="45"><br /><br />
      Confirm Password<span class="asterisk">*</span><br />
      <input type="password" placeholder="Confirm Password" name="Confirm_Password" id="Confirm Password"
        size="45"><br /><br />
      Phone<span class="asterisk">*</span><br />
      <input type="text" placeholder="Phone Number" size="45" name="Phone" id="Phone"><br /><br />
      Country<span class="asterisk">*</span><br />
      <!-- /***********Dropdown**********/ -->
      <select name="countries" id="country" style="color:rgba(0,0,0,0.6); padding:6px 12px;">
       <option value="0">Select your country</option>
        <option value="1">Nepal</option>
        <option value="2">India</option>
        <option value="3">United States</option>
        <option value="4">United Kingdom</option>
        <option value="5">Spain</option>
      </select><br /><br />
      <!-- /***********End of Dropdown**********/ -->
      <input type="checkbox" name="Terms" id="agreement" reqquired>&nbsp; <span id="textagree"> I agree to the terms and conditions
        of the <a href="#"> Hamro Auction </a> </span>
      <br><br>
      <input type="submit" value="Create an account" id="AccountBtn">
    </form>
  </div>
  <!-- /******************End of Registration form**************************/ -->
  <script src="clock.js"></script>
</body>
</html>