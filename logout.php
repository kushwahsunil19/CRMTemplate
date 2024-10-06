<?php
// Start session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to index.php (or any other page you want after logout)
header("Location: index.php");
exit; // Stop further execution
?>
