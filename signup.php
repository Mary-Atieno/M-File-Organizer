<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password == $confirm_password) {
    // Save the user to the database
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
} else {
    echo "Passwords do not match";
}
?>