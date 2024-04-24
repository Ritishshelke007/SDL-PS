<?php
// Include database connection file
include "config.php";

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

// Perform password validation
if ($password !== $confirm_password) {
    header("Location: signup.php?error=Passwords do not match");
    exit();
}

// Perform database insertion
$sql = "INSERT INTO users (name, email, password, dob, gender) 
        VALUES ('$name', '$email', '$password', '$dob', '$gender')";
if (mysqli_query($conn, $sql)) {
    header("Location: login.php?success=Signup successful. Please login.");
    exit();
} else {
    header("Location: signup.php?error=Error: " . mysqli_error($conn));
    exit();
}

// Close connection

?>
