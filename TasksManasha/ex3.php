<?php $title = "Exercise 03";

include 'header.php'; ?>


<body>
    <br>

<h3>2.Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname.
     Use the echo statement to print “Hello [Firstname] [Lastname],
     You are welcome to my site.” inside an h3 </h3>


<form method="post" action="process.php">

    <div class="mb-3">   
        First Name : <input type="text" name="Firstname"  class="form-control" required> 
    </div>
    <div class="mb-3">
        Last Name : <input type="text" name="Lastname" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<h3><br>4.HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h3>

    
    <table class="table table-danger">
  <thead>
    <tr>
      <th scope="col">S.n</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>John</td>
      <td>2</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Alice</td>
      <td>3</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Bob</td>
      <td>5</td>
    </tr>
  </tbody>
</table>   

<h3><br>5.String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
    Join them together and print the length of the string.</h3>

    <?php

    $str1 = "Hello";
    $str2 = "World";

    $Joinword = $str1 ." " . $str2 ;

    echo "Joinword = " . " " . $Joinword . "<br>"  ; 

    echo "Length of the joinword = " . strlen($Joinword) ;

    ?>

<h3><br>6.Number Addition: Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and an echo statement to output your answer.</h3>

    <?php

    $num1 = 298;
    $num2 = 234;
    $num3 = 46;

    $Total = $num1 + $num2 + $num3 ;

    echo "Total = ". $Total ;

    ?>


<h3><br>7.Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
Hint: Use predefined variables: $_SERVER</h3>


<?php
    echo "Server is : " . $_SERVER['SERVER_NAME'];
?>


</body>

<?php include 'footer.php'; ?>

