<?php include "../inc/dbinfo.inc"; ?>
<?php
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$link = mysqli_select_db($connection, DB_DATABASE);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$first_name = mysqli_real_escape_string($link, $_REQUEST['First_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['Last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$password = mysqli_real_escape_string($link, $_REQUEST['Password']);
 
// attempt insert query execution
$sql = "INSERT INTO User(firstname, lastname, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>