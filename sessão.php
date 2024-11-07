<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<form action="sessão.php" method="GET">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
  <input type="submit" >
</form>

<?php
$fname = $_GET["fname"];
$lname = $_GET["lname"];

echo $fname;
?>

</body>
</html>