
<?php


$servername = "web-dev-env-main-db-1";
$username = "CURDAPP";
$password = "password";
$dbname = "CURDAPP";

//create database connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn-> connect_error){
    die ("Connection Failed: " . $conn->connect_error);
}


?>