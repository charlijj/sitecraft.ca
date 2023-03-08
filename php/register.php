<?php
    session_start();
    require ('dbinfo.inc');
    if (isset($_POST['register'])) {
        try{
            $dbh = new PDO("mysql:host=$HOST;dbname=$DATABASE", $USER, $PASS");
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $Business = $_POST['Business'];
            $query = $dbh->prepare("SELECT * FROM Members WHERE email=:email");
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->execute();
            $query2 = "INSERT INTO Members(username, password, email, first_name, last_name, business_name) values ('$username', '$password_hash', '$email', '$first_name', '$last_name', '$Business')";
            if ($query->rowCount() > 0) {
                echo '<p class="error">The email address is already registered!</p>';
            }
            if ($query->rowCount() == 0) {
                if($dbh->exec($query2) !==false){
                    echo "The album was inserted";
                }else{
                    echo "The album was not inserted";
                }
            }
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }  
    } 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            text-align: center;
        }
        label {
            width: 200px;
            display: inline-block;
            font-size: 22px;
        }
        form {
            margin: 25px auto;
            padding: 20px;
            border: 2px solid ;
            width: 500px;
            background: #eee;
        }
        input {
            border: 1px solid;
            padding: 10px;
        }
        button {
            font-size: 22px;
            width: 200px;
            font-style:inherit;
            font-weight: bold;
            background: orangered;
            color: white;
            border: 1px solid black;
            padding: 20px;
        }
        .inputB {
            margin: 22px;
        } 
    </style>
</head>
<body>

    <h1>SiteCraft Registration Form</h1>
    <form method="post" action="" name="registration">
        <div class="inputB">
            <label>Username</label>
            <input type="text" name="username" required />
        </div>
        <div class="inputB">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <div class="inputB">
            <label>Email</label>
            <input type="email" name="email" required />
        </div>
        <div class="inputB">
            <label>First Name</label>
            <input type="text" name="fName" required />
        </div>
        <div class="inputB">
            <label>Last Name</label>
            <input type="text" name="lName" required />
        </div>
        <div class="inputB"></div>
            <label>Business Name</label>
            <input type="Business" name="Business" required />
        </div>
        <br>
        <br>
        <button type="submit" name="register" value="register">Register</button>
    </form>
</body>
</html>