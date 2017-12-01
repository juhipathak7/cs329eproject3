<?php include "../inc/dbinfo.inc"; ?>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$db = mysqli_select_db($connection, DB_DATABASE);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
echo "Connected successfully";

/* 
$ID = $_POST['username']; 
$Password = $_POST['password']; 
*/

function SignIn() 

{ 
session_start(); //starting the session for user profile page 
if(!empty($_POST['username']))
{ 
   echo("in");
   $query = mysql_query("SELECT * FROM User where username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error()); 
   $row = mysql_fetch_array($query) or die(mysql_error()); 

   if(!empty($row['username']) AND !empty($row['password']))
   { 
      $_SESSION['userName'] = $row['pass']; 
      echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
   } 

   else 
   { 
      echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
   } 
}
}

if(isset($_POST['username']) && !empty($_POST['username']))
{
   SignIn();
}
?>
