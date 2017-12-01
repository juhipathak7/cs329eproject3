<?php include "../inc/dbinfo.inc"; ?>
<?php
   session_start();
   $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
   $db = mysqli_select_db($connection, DB_DATABASE);
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>