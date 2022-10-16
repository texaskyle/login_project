<?php
require 'connection.inc.php';
require 'core.inc.php';




// checking if the username and pasword are set
if (isset($_POST['login']) && isset($_POST['username']) && isset($_POST['pwd']))  {
    // checking if there are empty fields in the form
    if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $pwd_hash = md5($pwd);

        // performing a  query to check if the user has inserted well the username and the password
        $query = "SELECT * FROM users WHERE username = '".mysqli_real_escape_string($conn,$username)."' AND pwd = '".mysqli_real_escape_string($conn,$pwd_hash)."'";
        $query_run = mysqli_query($conn, $query);
        if(!$query_run) {
            echo "query to check if the user's input matched with the database did't run";
        }else{
          $query_num_rows = mysqli_num_rows($query_run);

            // checking if there is a user who already exist in the database
            if($query_num_rows == 0){
                echo "invalid username or password";
            }

           while($row =  mysqli_fetch_assoc($query_run)) {
            echo "You are logged in as <strong>".$row['username']."</strong>";
           $user_id = $row['id'];
           $username = $row['username'];

         $username = $row['username'];
         $_SESSION['username'] =$user_name;
        //    through the session start we will knw if the user is alredy logged in
           $_SESSION['user_id'] = $user_id;
        //    redirecting the user to the index page
        header("Location: index.php");
           } 
            }
        }
    }else{
        echo "All the fields are required to be entered!!";
    }

?>
<form action="loginform.inc.php"  method="POST">
username: <br>
<input type="text" name="username"> <br><br>
password: <br>
<input type="password" name="pwd"> <br><br>

<input type="submit" name="login" value="log in">


 
</form>