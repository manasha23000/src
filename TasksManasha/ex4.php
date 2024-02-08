
<?php $title = "Exercise 04";

include 'header.php'; ?>


<body>

<h3><br>2.If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age,
 decide if he/she is eligible for voting. 
(18 or more than 18 years is eligible for voting).</h3>

<br>

<form method="post" name="IFElSE_form" action=<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>>

    <div class="mb-3">   
        Name : <input type="text" name="name"  class="form-control" required> 
    </div>
    <div class="mb-3">   
        Age : <input type="number" name="age"  class="form-control" required> 
    </div>
    <button type="submit" name= "Form3"  value="Form3" class="btn btn-primary">Submit</button>

</form>
<?php

$age= 0 ;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['Form3'])){

$age = $_POST["age"];
$name = $_POST["name"];

if ($age >= 18){
    echo $name . ", you are " . $age . " years old. You are eligible for voting.";
}

else {
    echo $name . ", you are " . $age . " years old. You are not eligible for voting.";
}
    }

}

?>


<h3><br>3.Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not:
    It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>


<?php

$currentmonth  = date("F");

echo "Current Month = " . $currentmonth ;

echo "<br><br>";

switch ($currentmonth)
{
    case "August": 
        echo "It's August, so it's still holiday.";
    break;
    default:
        echo "Not August, this is " . $currentmonth . ". so I don't have any holidays" ;
}
?>

<h3><br>4.For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>


<form method="post" name="ForLoop_form" action=<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>>

    <div class="mb-3">   
        Enter any number : <input type="number" name="limit1"  class="form-control" required> 
    </div>
   
    <button type="submit" name= "Form1" value="Form1" class="btn btn-primary">Submit</button>

</form>
<?php

$limit1 = 0 ;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['Form1'])){
  
$limit1 = $_POST["limit1"];

 echo "Multiplication Table for " . $limit1 . " ;" ; 
  }


  for ($i = 1; $i <= 10; $i++) {
    echo "<li>$limit1 x $i = " . ($limit1* $i) . "</li>" ;
}
  }

?>

<h3><br>5.While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</b></h3>




<form method="post" name="Loop_form" action=<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>>

    <div class="mb-3">   
    Enter any number : <input type="number" name="limit"  class="form-control" required> 
    </div>
   
    <button type="submit" name= "Form2" value="Form2" class="btn btn-primary">Submit</button>

</form>
<?php

$limit = 0 ;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['Form2'])){

  
$limit = $_POST["limit"];

 echo "The numbers from 1 to " . $limit . " ;" ; 
  }


$i = 1;
while ($i <= $limit) {
    echo "<li>$i</li>";
    $i++;
}
  }

?>

<h3><br>6. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript")</h3>
 
<?php

$myarray=array("HTML", "CSS", "PHP", "JavaScript") ;

foreach ($myarray as $value) {
    echo $value . "<br/>";
}
?>

</body>

<?php include 'footer.php'; ?>

