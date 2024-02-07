<?php

$title = "Exercise 4: Control flow and loops";

include "header.php" ?>

<h3>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting.
     (18 or more than 18 years is eligible for voting, use form to get user input).</h3>

<?php
$name = $_POST['name'];
$age = $_POST['age'];
?>
    <title> Form </title>

    <form action="ex4.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" value=""/>

        <label for="age">Age:</label>
        <input type="text" name="age" value=""/>

        <input type="submit" value="Submit"/>
    </form>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user inputs
        $name = $_POST['name'];
        $age = $_POST['age'];

        // Check if age is 18 or older
        if ($age >= 18) {
            echo "<p>Congratulations, $name! You are eligible for voting.</p>";
        } else {
            echo "<p>Sorry, $name. You are not eligible for voting.</p>";
        }
    }
    ?>

<h3>3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>


<?php
// Get the current month name
$Month = date('F');

// Check if it's August using a switch case
switch ($Month) {
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $Month so I don't have any holidays.";
        break;
}
?>
<h3>4. For Loop: Write a PHP script that will print the multiplication table of a number (n, 
    use form to get user input).</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a number: <input type="number" name="number"><br><br>
        <input type="submit" name="submit" value="Get Multiplication Table">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from the form
        $number = $_POST['number'];

        // Print the multiplication table
        echo "<h3>Multiplication Table of $number:</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$number x $i</td>";
            echo "<td>" . ($number * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

<h3>6. Foreach Loop: Write a PHP script that will print all the elements of an array. 
    $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>


<?php
// Define the array
$myarray = array("HTML", "CSS", "PHP", "JavaScript");

// Print all elements of the array using foreach loop
echo "Elements of the array:<br>";
echo "<ul>";
foreach ($myarray as $element) {
    echo "<li>$element</li>";
}
echo "</ul>";
?>

<?php include "footer.php"; ?>
