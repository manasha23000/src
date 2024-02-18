
<?php
$title = "Process";
require '../header.php'; ?>

<?php


//what to do with the data

if(isset ($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST ['city'];
    $groupId = $_POST['groupId'];

    //connect to the database server

    require 'db.php';

    //write sql statment to insert data
    $sql = "insert into studentsinfo (fname,lname,city,groupId)
    values ('$fname', '$lname', '$city', '$groupId')";
    

    if($conn->query($sql)===TRUE){
        echo "Your data was recorded";
    }

    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>

<?php include '../footer.php'; ?>