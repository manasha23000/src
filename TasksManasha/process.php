<?php

$title = "Information";
require 'header.php'; ?>

<?php
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"]; ?>


<h3> <?Php echo "Hello " . $Firstname . " " . $Lastname . ", You are welcome to my site." ; ?> </h3> 

<?php
require 'footer.php';
?>