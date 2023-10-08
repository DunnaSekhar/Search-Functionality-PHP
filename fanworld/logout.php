<?php
session_start();

# Unset all session variables
$_SESSION = array();

session_destroy();

echo "<script>" . "window.location.href='./login.php';" . "</script>";
exit;
