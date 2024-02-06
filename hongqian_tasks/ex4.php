<?php 
$title = "Exercise 4: Control flow and loops"; 
include 'header.php';
?>

<h1>Question 2: If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h1>
<form class="row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="col">
    <label for="name" class="form-label">Enter your name:</label>
    <input type="text" class="form-control" name="name" id="name" required>
  </div>
  <div class="col">
    <label for="age" class="form-label">Enter your age:</label>
    <input type="number" class="form-control" name="age" id="age" required>
  </div>
  <div class="col-12 mt-3">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if (is_numeric($age) && $age >= 18) {
            echo "<p class='mt-3'>$name, you are eligible for voting!</p>";
        } else {
            echo "<p class='mt-3'>$name, you are not eligible for voting yet.</p>";
        }
    } else {
        echo "<p class='mt-3'>Please provide both name and age.</p>";
    }
}
?>

<br>
<hr>

<h1>Question 3: Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not:
    It's August, so it's still holiday.
    Not August, this is Month-name so I don't have any holidays
    Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h1>
<?php
$month = date("F");

switch ($month) {
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $month so I don't have any holidays.";
}
?>

<br>
<hr>

<h1>Question 4: For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h1>

<form class="row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="col-3">
    <label for="number" class="form-label">Enter a number:</label>
    <input type="number" class="form-control" name="number" id="number" required>
  </div>
  <div class="col-12 mt-3">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $number = $_POST['number'];

    echo "<h2 class='mt-3'>Multiplication Table of $number:</h2>";
    echo "<div class='row'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<div class='col-2'>$number x $i = " . ($number * $i) . "</div>";
    }
    echo "</div>";
}
?>

<br>
<hr>

<h1>Question 5: While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h1>
<form class="row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="col-3">
    <label for="number" class="form-label">Enter a number:</label>
    <input type="number" class="form-control" name="number" id="number" required>
  </div>
  <div class="col-12 mt-3">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $i = 1;

    echo "<h2 class='mt-3'>Numbers from 1 to $number:</h2>";
    echo "<div class='row'>";
    while ($i <= $number) {
        echo "<div class='col-2'>$i</div>";
        $i++;
    }
    echo "</div>";
}
?>

<br>
<hr>

<h1>Question 6: Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h1>
<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");

echo "<h2>Elements of the array:</h2>";
foreach ($myarray as $element) {
    echo "$element <br>";
}
?>

<?php include 'footer.php'; ?>
