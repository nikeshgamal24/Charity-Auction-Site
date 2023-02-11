<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="about.php">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="form.php">
    <title>Home</title>
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
    <!-- /*************************Part 1***********************/ -->
    <div id="homePar1">
        <img src="bn4.jpg" id="homePart1Image">
    </div>
    <!-- /*************************End of Part 1***********************/ -->

    <!-- /*************************Part 2***********************/ -->
    <div id="secondPart">
        <p id="texth">
            Spend Less Time.<br>Make More Money.
        </p>
        <div id="sfirst">
            <div id="createdes">
                <p id="createTitle">Quickly create, design and manage auctions.</p>
                <p id="created">You are only 5 minutes away from having your auction built and ready for items. We took
                    the pain and confusion out of getting started.</p>
                <button id="hBtn1" class="Button">Build an Auction</button>
                <button id="hBtn2" class="Button">Demo Auction</button>
            </div>
            <div id="createImg">
                <img src="manage.jpg">
            </div>
        </div>

        <div id="ssecond">
            <div id="secondImg">
                <img src="money.jpg">
            </div>
            <div class="secondSection">
                <p class="secondTitle">More money goes directly to your cause.</p>
                <p class="seconddes">You can accept cash, checks, bank transfers, or credit cards. It’s your money,
                    collect it on your own terms.</p>
                <button id="hsBtn1">Collect More Money</button>
            </div>

        </div>

        <div id="sthird">
            <div id="thirdSection">
                <p id="thirdTitle">Manage your donors and donations effortlessly.</p>
                <p id="thirddes">Our Donation CRM allows you to easily track all donations and donors in an easy-to-use dashboard. Export all information or sync with our integration
                     partners to unlock more donor management tools.</p>
                <button id="hthBtn1">Manage My Donors</button>
            </div>
            <div id="thirdImg">
                <img src="donor.jpg">
            </div>
        </div>
    </div>
    <!-- /*************************End of Part 2***********************/ -->

    <!-- /*************************Part 3***********************/ -->
     <div id="support">
         <div id="suppImg">
              <img src="technical.jpg">
         </div>
         <div id="suppDes">
               <p id="suppTitle">
                Friendly technical support and training when you need it.
               </p>
               <p id="suppddes">
                Other companies charge hundreds of dollars for your auction support and training. We offer it for free.
               </p>
               <button id="suppBtn">Technical Support</button>
         </div>
     </div>
    <!-- /*************************End of Part 3***********************/ -->

    <!-- /*******************3rd section******************/ -->
    <div id="absthec">
        <p id="abthTitle">Let’s get started, it’s super easy.</p>
        <p id="abthdes">Oh yeah, you don’t need a credit card to get
            started either.</p>
        <button id="abthBtn">Technical Support</button>
    </div>
    <!-- /*******************End of 3rd section******************/ -->
    <script src="clock.js"></script>
</body>
</html>