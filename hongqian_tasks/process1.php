<?php 
$title = "Welcome"; 
include 'header.php';
?>

<?php
// what to do with the form data

if(isset($_POST['submit'])) {
    $firstname = $_POST['etunimi'];
    $lastname = $_POST['sukunimi'];
    echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
}
?>

<?php include 'footer.php'; ?>
