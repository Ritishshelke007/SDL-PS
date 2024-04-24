<?php
session_start();

// Include database connection file
include "config.php";

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Perform user authentication
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    // User authenticated, redirect to dashboard or home page
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
    exit();
} else {
    // Invalid credentials, redirect back to login page with error message
    header("Location: login.php?error=Invalid email or password");
    exit();
}

// Close connection

?>
