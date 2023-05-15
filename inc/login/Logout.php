<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the desired page
header('Location: index.php');
exit(); // Ensure no further code is executed after the redirect
?>