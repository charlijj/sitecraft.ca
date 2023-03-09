
<?php
    session_start();
    require ('dbinfo.inc');
    if (isset($_POST['login'])) {
        try{
            $dbh = new PDO("mysql:host=$HOST;dbname=$DATABASE", $USER, $PASS);
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = $dbh->prepare("SELECT * FROM Members WHERE username =:username");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if (!$result) {
                 echo '<p class="error">Username password combination is wrong!</p>';
                 } else {
                if (password_verify($password, $result['password'])) {
                    $_SESSION['user_id'] = $result['id'];
                  '<p class="success">Congratulations, you are logged in!</p>';
                } else {
                echo '<p class="error">Username password combination is wrong!</p>';
                }
                }
                }
            
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }  
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login Form</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Form</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="" name="login">
        <div class="inputB">
            <label>Username</label>
            <input type="text" name="username" required />
        </div>
        <div class="inputB">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        
        <br>
        <br>
        <button type="submit" name="register" value="register">Register</button>
        <a href="register.php">  <button type="button-primary" name="register" value="register">Don't have an account yet? Register here</button> </a> 
    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
