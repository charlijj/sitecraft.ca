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
        
        
        <a href="login_model.php" class="navbarLinks" style="border-right: 0;">
            <span>Accounts (sign in)</span> 
        </a>
    </div>

    <!-- About/Team
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="main" style="height: 2000px;">
        
        <h1 class="headerTxt">Confirm your selections</h1>
        <div class="line" style></div>

        <div class="buildFormConfirm">

            <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") // If form method is using post, collect input from form
                {
                    $about = $_POST["about"];
                    $services = $_POST["services"];

                    $exata1 = $_POST["exata1"];
                    $exata2 = $_POST["exata2"];

                }

                echo "<h3>About: </h3>$about";
                echo "<h3>Services: </h3>$services";
                echo "<h3>exata1: </h3>$exata1";
                echo "<h3>exata2: </h3>$exata2";

                file_put_contents("website_content_variables.php", "<?php\n\$about='$about';\n\$services='$services';\n\$exata1='$exata1';\n\$exata2='$exata2';\n?>");
            ?>
        </div>

        <input type="button" id="submitButton" class="submitButton" value="Confirm" onClick="confirm()">

    </div>

    <footer>
        Jasper Charlinski, Sebastien Van Den Bremt, Naman Batra Febuary 10th, 2023 &copy;
    </footer>

    <script src="../script/nav_bar_script.js"></script>
    <script>
        function confirm() {alert("This is how far it goes so far");}
    </script>
</body>
</html>
