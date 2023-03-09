<!DOCTYPE html>
<html lang="en">
<?php
require ('../php/website_variables.php');
?>
<!-- 
$template='template2';
$theme='light';
$primaryColor='#b31a1a';
$secondaryColor='#1a4ab3';
$treacheryColor='#27b31a';
$borderColor='#761ab3'; 
-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site Template</title>
    <style>
        body {
            background-color: <?php echo('$primaryColor') ?>;
        }

        .myDiv {
            border: 5px outset black;
            background-color: lightgray;
            text-align: center;
        }

        .header {
            padding: 2px;
            display: flex;
            align-items: center;
            justify-content: center;

            width: 100%;
            /* background color to be the same as body */
            background: <?php echo('$secondaryColor') ?>;

            border: 3px outset <?php echo('$borderColor') ?>;
            color: black;
            font-size: 20px;
        }

        .headerContainer {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 100%;
            height: 100%;
        }

        .container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			height: 100%;
			padding: 20px;
			box-sizing: border-box;
		}

		.image {
			flex-basis: 25%;
			max-width: 100%;
			margin: 10px;
			box-sizing: border-box;
		}

		.image img {
			display: block;
			max-width: 100%;
			height: auto;
		}
        .companyName {
			background-color: #F5F5F5;
			padding: 20px;
			box-sizing: border-box;
			text-align: center;
		}

		h1 {
			font-family: 'M PLUS 1p', sans-serif;
			font-size: 48px;
			font-weight: bold;
			color: #333333;
			margin: 0;
			line-height: 1.2;
		}

		p {
			font-family: 'M PLUS 1p', sans-serif;
			font-size: 18px;
			color: #666666;
			margin: 10px 0 0;
		}
        .options {
			display: table;
			width: 100%;
		}

		.row {
			display: table-row;
		}

		.cell {
			display: table-cell;
			width: 50%;
			padding: 20px;
			box-sizing: border-box;
			text-align: center;
			vertical-align: middle;
		}

		.button {
			display: inline-block;
			padding: 10px 20px;
			border: 2px solid <?php echo('$borderColor') ?>;
			border-radius: 4px;
			margin: 10px;
			font-size: 18px;
			font-weight: bold;
			text-decoration: none;
			transition: all 0.3s ease-in-out;
		}

		.button:hover {
			background-color: #000000;
			color: #ffffff;
		}
        .description {
			margin: 20px auto;
			padding: 10px;
			max-width: 600px;
			font-size: 18px;
			line-height: 1.5;
			text-align: justify;
			background-color: #f7f7f7;
            color: #666666;
			border: 1px solid <?php echo('$borderColor') ?>;
            font-family: 'M PLUS 1p', sans-serif;
		}
        .footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
			font-size: 14px;
		}
        
    </style>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header" id="header">

        <div class="headerContainer">

            <img src="../img/favicon.png" alt="website logo" >

            <a href="index.html" class="headerContainer" style="align-items: center;">
                <span>Options</span>
            </a>

            <a href="index.html" class="headerContainer" style="text-align: center;">
                <span>Sign In</span>
            </a>

        </div>
    </div>
    <div class="companyName">
		<h1>鎚職人</h1>
		<p>Japanese Artisan Hammer Company</p>
	</div>
    <div class="container">
		<div class="image">
			<img src="../img/hammer1.jpg" alt="Japanese long hammer">
		</div>
		<div class="image">
			<img src="../img/hammer2.jpg" alt="Japanese short copper hammer">
		</div>
		<div class="image">
			<img src="../img/hammer3.jpg" alt="Japanese short hammer">
		</div>
	</div>
    <div class="options">
		<div class="row">
			<div class="cell">
				<a href="#" class="button">View Catalog</a>
			</div>
			<div class="cell">
				<a href="#" class="button">Make Custom Order</a>
			</div>
		</div>
	</div>

    <div class="description">
		We are a Japanese artisan hammer company that specializes in handcrafted, high-quality hammers for the discerning craftsman. 
        With a rich history dating back over a century, we pride ourselves on producing traditional Japanese hammers 
        that are as beautiful as they are functional.
	</div>
    <footer class="footer">
		<p>&copy; 2023 Japanese Artisan Hammer Company. All rights reserved.</p>
	</footer>
</body>

</html>