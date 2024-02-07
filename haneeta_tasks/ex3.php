<?php

$title = "Exercise 3: Variable, Strings & Operators";

include "header.php" ?>

<h3>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag. </h2>
<h3>3.Bootstrap Styling: Apply Bootstrap styles to the form. 
    Make sure to include the Bootstrap CSS link in your head tag.</h3>

  
<form method="POST">
    <div class="mb-3">
    <label for="fname" class="form-label">Firstname:</label>
    <input type="text" class="form-control" id="fname" name="fname">
    </div>

    <div class="mb-3">
        <label for="fname" class="form-label">Lastname:</label>
        <input type="text" class="form-control" id="lname" name="lname"><br><br>
        <input type="submit" value="Submit">
    </div>
    <?php
      
    if (isset($_POST['submit'])) { 
        $fname = $_POST['fname']; 
        $lname = $_POST['lname']; 
  
        echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>"; 
    } 
?>

<h2>4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. 
    If you wish, you can use the same table.</h2>

    <?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>


    <table class="table table-danger table-bordered">
<tr><th>S.n</th><th>Name</th><th>Grade</th></tr>
<tr>
    <td>1</td>
    <td>John</td>
    <td><?php echo $g1 ?></td>

</tr>

<tr>
    <td>2</td>
    <td>Alice</td>
    <td><?php echo $g2 ?></td>

</tr>

<tr>
    <td>3</td>
    <td>Bob</td>
    <td><?php echo $g3 ?></td>

</tr>
</table>


<h2>5. String Variables: Write a PHP script with two string variables 
    ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h2>
    <?php
// Define the string variables
$txt1 = "Hello";
$txt2 = "World";

// Join the strings together
$jointxt = $txt1 . $txt2;

// Print the length of the joined string
echo "Joined String: " . $jointxt . "<br>";
echo "Length of Joined String: " . strlen($jointxt);
?>

<h2>6. Number Addition: Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and an echo statement to output your answer.</h2>

    <?php

$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;

echo "The sum of $num1, $num2, and $num3 is: $sum";

?>

<h2>7. Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
    Hint: Use predefined variables: $_SERVER). Predefined Variables</h2>

    <?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];


if (strpos($user_agent, 'MSIE') !== false) {
    $browser = 'Internet Explorer';
} elseif (strpos($user_agent, 'Firefox') !== false) {
    $browser = 'Mozilla Firefox';
} elseif (strpos($user_agent, 'Chrome') !== false) {
    $browser = 'Google Chrome';
} elseif (strpos($user_agent, 'Safari') !== false) {
    $browser = 'Safari';
} elseif (strpos($user_agent, 'Opera') !== false) {
    $browser = 'Opera';
} else {
    $browser = 'Unknown';
}


echo "Your browser: $browser";
?>

<h2>8. File Modification Time: Write a PHP script in the footer section of your universal footer to 
    display the last modification time of a file. 
    Hint: Use predefined variable $_SERVER, basename function  to get the filename , 
    filetime function to get the last modified time & date function to print the date and time</h2>
    

   


<?php include "footer.php" ?>