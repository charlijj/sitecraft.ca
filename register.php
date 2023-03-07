<!DOCTYPE html>
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
        .input {
            margin: 22px;
        } 
    </style>
</head>
<body>

    <h1>SiteCraft Registration Form</h1>
    <form method="post" action="" name="registration">
        <div class="input">
            <label>Username</label>
            <input type="text" name="username" required />
        </div>
        <div class="input">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <div class="input">
            <label>Email</label>
            <input type="email" name="email" required />
        </div>
        <div class="input">
            <label>First Name</label>
            <input type="text" name="fName" required />
        </div>
        <div class="input">
            <label>Last Name</label>
            <input type="text" name="lName" required />
        </div>
        <div class="input"></div>
            <label>Business Name</label>
            <input type="Business" name="Business" required />
        </div>
        <br>
        <br>
        <button type="submit" name="register" value="register">Register</button>
    </form>
</body>
</html>