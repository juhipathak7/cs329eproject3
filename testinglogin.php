<?php include "../inc/dbinfo.inc"; ?>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db = mysqli_select_db($connection, DB_DATABASE) or die("Failed to connect to MySQL: " . mysql_error());


function SignIn() 

{ 

   session_start(); //starting the session for user profile page

   #$ent_usr = trim($_POST['username']);
   #$ent_usr = strip_tags($ent_usr);
   #$ent_usr = htmlspecialchars($ent_usr);

   $u= $_POST['username'];
   $p= $_POST['pwd'];
   $username = mysqli_real_escape_string($connection,$u);
   $password = mysqli_real_escape_string($connection,$p);

   #$ent_pwd = trim($_POST['pwd']);
   #$ent_pwd = strip_tags($ent_pwd);
   #$ent_pwd = htmlspecialchars($ent_pwd);   
   
   $sql = "SELECT * FROM `User`";

   $row = mysql_fetch_array($query) or die(mysql_error());

   {
      $_SESSION['userName'] = $row['pass'];
      echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
   }
   else
   {
      echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
   }





#   $result = mysqli_query($db,$sql);
 #  $rowcount = 0;
 #  $rowcount=mysqli_num_rows($result);
  # echo($rowcount);
  # if ($rowcount == 1)
  # {
   #   echo("HI");
   // Return the number of rows in result set
      
    #  echo($rowcount);
      // Free result set
     # mysqli_free_result($result);
   #}
   /*
   $res=mysqli_query("SELECT email FROM User WHERE username=usman");
   $row=mysqli_fetch_array($res);
   $count = mysqli_num_rows($res);
   echo($count);
   

   if($count == 1 && $row['password'] == $ent_pwd)
   { 
      $_SESSION['user'] = $row['username'];
      header("Location: quizzes.php");

   } 
   else 
   { 
      echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY..."; 
   } */

}

if(isset($_POST['username']) && !empty($_POST['username']))
{
   SignIn();
}
mysqli_close($connection);
?>