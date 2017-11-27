<?php include "../inc/dbinfo.inc"; ?>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$link = mysqli_select_db($connection, DB_DATABASE);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$f= $_POST['fname'];
$l= $_POST['lname'];
$e= $_POST['email'];
$u= $_POST['username'];
$p= $_POST['pwd'];

$first_name = mysqli_real_escape_string($connection,$f);
$last_name = mysqli_real_escape_string($connection,$l);
$email = mysqli_real_escape_string($connection,$e);
$username = mysqli_real_escape_string($connection,$u);
$password = mysqli_real_escape_string($connection,$p);
 
// attempt insert query execution
$sql = "INSERT INTO `User` (`firstname`, `lastname`, `email`, `username`, `password`) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

//mysqli_query($link, $sql);
if(mysqli_query($connection, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// close connection
mysqli_close($link);

?>