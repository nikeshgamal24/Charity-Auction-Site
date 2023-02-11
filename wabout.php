<?php
  session_start();
  if(!isset($_SESSION['username'])){
      header('loginPage.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="home.php">
    <link rel="stylesheet" href="index.php">
    <title>About</title>
    <style>
    #dashboard{
      position:absolute;
      right:-110px;
      margin-top:-32px;
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
            <li><a href="about.php" target="_self">About Us</a></li>
            <li><a href="welcome.php" target="_self">Home</a></li>
        </ul>
    </div>

    <!-- ******************End of Navigation Bar************** -->

    <!-- /*****************About Setion 1st Part******************/ -->
    <div id="ab">
        <div id="abtext">
            <p id="abdes">
                Charity Auctions Today
                is removing the
                fundraising barriers for
                non-profits, schools and
                other great organizations.
            </p>
        </div>
        <div id="abimg">
            <img src="ab.jpg">
        </div>
    </div>
    <div id="aboutsec">
        <!-- /**************************1st Paragraph*****************/ -->
        <p class="abparatitle">
            Our humble beginnings
        </p>

        <p class="abparades">
            In 2007, Tom Kelly was trying to set up an auction
            for his mother to raise funds for a cause near and
            dear to her heart. He encountered steep commission
            es and a lack of user control. Tom recognized this
            represented a real barrier to nonprofits and everyday
            heroes like his mom, who wanted to make a real difference
            in their communities. It was challenging to take their
            fundraising efforts to the next level due to lack of
            resources, expertise, and time.
            <br><br>
            Tom founded the Charity Auctions Today online auction
            platform that lets anyone set up a professional-quality
            auction or mobile bidding event in minutes. The platform
            features customizable templates, multiple mobile bidding
            options, personalized support from human account managers,
            and many more user-friendly features. Charity Auctions
            Today is the “click-and-easy” way to grow your bidding
            pool, increase your fundraising profits and
            reduce expenses so more money goes directly to your cause.
        </p>
        <!-- /**************************End of 1st Paragraph*****************/ -->

        <!-- /**************************2nd Paragraph*****************/ -->
        <p class="abparatitle">
            Look how far we’ve come
        </p>
        <p class="abparades">
            Since launching Charity Auctions Today, Tom has helped
            organizations raise over $500,000,000. The platform has
            hosted over 250,000 auctions to date and continues to grow
            every month as people realize the value that Tom and his
            team bring to their non-profits. They are truly an extension
            of your in-house fundraising team.
        </p>
        <!-- /**************************End of 2nd Paragraph*****************/ -->

        <!-- /**************************3rd Paragraph*****************/ -->
        <p class="abparatitle">
            A message from our founder
        </p>
        <p class="abparades">
            Thank you from the bottom of my heart. This has been
            a truly empowering journey. I have enjoyed being able to
            take something that started as a way to help my mother and
            grow it to help so many more people. Hearing your success
            stories is what keeps me getting out of bed everyday to
            create the best online auction platform, period. I will
            working hard to make sure that everyone who needs help
            raising funds for causes near and dear to their hearts has
            the support they are looking for.
        </p>
        <!-- /**************************End of 3rd Paragraph*****************/ -->
    </div>
    <!-- /*****************End of About Setion 1st Part******************/ -->

    <!-- /*******************3rd section******************/ -->
    <div id="absthec">
        <p id="abthTitle">Let’s get started, it’s super easy.</p>
        <p id="abthdes">Oh yeah, you don’t need a credit card to get
            started either.</p>
        <button id="abthBtn">Technical Support</button>
    </div>
    <!-- /*******************End of 3rd section******************/ -->

    <!-- /****************Footer***********************/ -->
    <footer>
        <p id="cmpName">

        </p>
        <p id="social">

        </p>
        <p id="links">

        </p>
        <p id="copyright">

        </p>
    
        <script src="clock.js"></script>
    </body>
</html>