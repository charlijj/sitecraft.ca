
<?php
    session_start();
    require ('php/dbinfo.inc');
   
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
                 } 
                else {
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
    
?>
