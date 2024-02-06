<?php 
$title = "Exercise 3 : Variable, Strings & Operators"; 
include 'header.php';
?>

<h1>Question 2: Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag. </h1>

<form class="row" method="POST" action="process1.php" id="nameform">
  <div class="col">
    <label for="etunimi" class="form-label">First Name:</label>
    <input type="text" class="form-control" name="etunimi" id="etunimi" required>
  </div>
  <div class="col">
    <label for="sukunimi" class="form-label">Last Name:</label>
    <input type="text" class="form-control" name="sukunimi" id="sukunimi" required>
  </div>
  <div class="col-12 mt-3">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<br>
<hr>


<h1>Question 3: Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your head tag. BootStrap Guide</h1>

<br>
<hr>

<h1>Question 4: HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table. BootStrap Cheatsheet</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Etunimi</th>
      <th scope="col">Sukunimi</th>
    </tr>
  </thead>
  <tbody>

    <tr class="table-primary">
      <th scope="row">1</th>
      <td>Attila</td>
      <td>Vegh</td>
    </tr>
    <tr class="table-secondary">
      <th scope="row">2</th>
      <td>Hongqian</td>
      <td>Li</td>
    </tr>
    <tr class="table-success">
      <th scope="row">3</th>
      <td>Julian</td>
      <td>Hack</td>
    </tr>
    <tr class="table-info">
      <th scope="row">4</th>
      <td>Richard</td>
      <td>Svajdlenka</td>
    </tr>

  </tbody>
</table>
<br>
<hr>

<h1>Question 5: String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h1>
<br>
<?php
$str1 = "Hello";
$str2 = "World";
$combinedString = $str1 . " " . $str2;
echo "Combined String: " . $combinedString . "<br>";
$length = strlen($combinedString);
echo "Length of the Combined String: " . $length;
?>
<br>
<br>
<hr>

<h1>Question 6: Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h1>
<?php
$a = 298;
$b = 234;
$c = 46;
$sum = $a + $b + $c;
echo "The sum of $a, $b, and $c is: $sum";
?>
<br>
<br>
<hr>

<h1>Question 7: Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER. Predefined Variables</h1>
<?php
$user_agent = $_SERVER["HTTP_USER_AGENT"];
echo "Your browser is: $user_agent";
?>
<br>
<br>
<hr>

<h1>Question 8: File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time Predefined Variables</h1>



<?php include 'footer.php'; ?>
