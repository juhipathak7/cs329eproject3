<?php include "../inc/dbinfo.inc"; ?>
<?php
   $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
   $db = mysqli_select_db($connection, DB_DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $u= $_POST['username'];
      $p= $_POST['pwd'];

      $username = mysqli_real_escape_string($connection,$u);
      $password = mysqli_real_escape_string($connection,$p);
      
      $sql = "SELECT id FROM User WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
