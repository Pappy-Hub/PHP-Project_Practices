<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <h1>HEllo WOrld</h1>
    <?php
// Set session variables
session_unset();
$_SESSION["username"] = "Pappy";
$_SESSION["role"] = "admin";

//modify the session variables
session_unset();
$_SESSION["username"] = "Pappy";
$_SESSION["role"] = "admin";

session_unset();
$_SESSION["username"] = "James";
$_SESSION["role"] = "admin";
 


?>
</body>

</html>