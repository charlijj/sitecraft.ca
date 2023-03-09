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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/site_builder_style.css">
    
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    
</head>
<body onscroll="navBarChange()">

    <!-- Top of page marker -->
    <div id="top"></div> 

    <!-- Nav Bar
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="navbar" id="navBar">

        <a href="../index.html" class="navbarLinks">
            <span>Home</span>
        </a>

        <a href="../site_builder.html" class="navbarLinks">
            <span>Site Builder</span>
        </a>

        <a href="#top" class="navbarLinks" style="border-right: 0;">
            <span>Account (sign in)</span> 
        </a>

    </div>

    <!-- About/Team
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="main">
        
        <h1 class="headerTxt">Your selections</h1>
        <div class="line" style></div>

        <div class="buildFormConfirm">


            <?php
                include_once("website_variables.php");
                
                echo "<h3>Template: </h3>$template";
                echo "<h3>Theme: </h3>$theme";

                echo "<h3>Primary Color: </h3><div class=\"colorDisplay\" style=\"background-color: $primaryColor;\"></div>";
                echo "<h3>Secondary Color: </h3><div class=\"colorDisplay\" style=\"background-color: $secondaryColor;\"></div>";
                echo "<h3>Treachery Color: </h3><div class=\"colorDisplay\" style=\"background-color: $treacheryColor;\"></div>";
                echo "<h3>Border Color: </h3><div class=\"colorDisplay\" style=\"background-color: $borderColor;\"></div>";

            ?>
        </div>

    </div>

    <footer>
        Jasper Charlinski, Sebastien Van Den Bremt, Naman Batra Febuary 10th, 2023 &copy;
    </footer>

    <script src="../script/nav_bar_script.js"></script>
</body>
</html>