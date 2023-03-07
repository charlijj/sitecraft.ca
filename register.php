<?php
    session_start();
    include('config.php');
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Your registration was successful!</p>';
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
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