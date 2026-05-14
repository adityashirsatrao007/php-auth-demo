<?php
/**
 * Logout script to destroy session
 */
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session cookie if it exists
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: index.php");
exit();
