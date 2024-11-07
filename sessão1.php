<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>

<?php
// Echo session variables that were set on previous page
echo $_SESSION["fname"];
echo $_SESSION["lname"];
?>

</body>
</html>