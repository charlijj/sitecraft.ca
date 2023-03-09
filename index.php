<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title>Site Craft</title>
        <meta name="description" content="">
        <meta name="author" content="">
      
        <!-- Mobile Specific Metas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <!-- FONT
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
      
        <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/index_style.css">
      
        <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="icon" type="image/png" href="img/favicon.png">
      
      </head>
<body onscroll="navBarChange()">

    <!-- Top of page marker -->
    <div id="top"></div> 

    <!-- Nav Bar
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="navbar" id="navBar">

        <div class="navbarLinksContainer">

            <a href="#top" class="navbarLinks">
                <span>Home</span>
            </a>
    
            <a href="site_builder.html" class="navbarLinks">
                <span>Site Builder</span>
            </a>
            <?php include('login_model.php') ?>
            <a href="login_model.php" class="navbarLinks" data-toggle="modal" data-target="#myModal" style="border-right: 0;">
            <span>(sign in)</span> 
        </a>

        </div>


    </div>

    <!-- About/Team
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="banner">

        <div class="banner-about">
            <h2>About SiteCraft.ca</h2>
            <p>
                SiteCraft.ca is a website building website that aims to solve the problem of high costs and lack of technical expertise required to build a website. Many individuals and small business owners struggle to create a professional-looking website due to the high cost of hiring a web developer or the lack of knowledge and skills required to build a website themselves. sitecraft.ca aims to solve this problem by providing a user-friendly platform that allows users to easily create their own website by filling out a simple form with their desired website content.
            </p>
        </div>

        <div class="banner-team" id="teamContainer">

            <div id="slideContent">
                <h2>Meet the team!</h2>
                <br>
                <ul>
                    <li class="teamMember">Jasper Charlinski</li>
                    <li class="teamMember">Sebastien Van Den Bremt</li>
                    <li class="teamMember">Naman Batra</li>
                </ul>
            </div>
  
            <div class="prevNextContainer">
                <a class="prev" onclick="moveSlide(-1)">&#10095;</a>
                <a class="next" onclick="moveSlide(1)">&#10094;</a>
            </div>

        </div>
    </div>

    <!-- About/Team
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="showcase">

        <h2>Explore our templates</h2>

        <p>Insert some templates or examples here (slideshow?)</p>
        <div class="templateCtn">
            <div class="templateImg">
                <a a href="seb_template.html"><img src="img/template1.png" alt="Template for Hammers" class="templateSizing" > </a>
            </div>

        </div>
    </div>

    <footer>
        Jasper Charlinski, Sebastien Van Den Bremt, Naman Batra Febuary 10th, 2023 &copy;
    </footer>

    <script src="script/nav_bar_script.js"></script>
    <script src="script/meet_team_slideshow.js"></script>

</body>
</html>
