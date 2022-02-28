<?php
session_unset();
session_destroy();
// Attach adminlogin in same folder
header('location:admin.php');

?>
