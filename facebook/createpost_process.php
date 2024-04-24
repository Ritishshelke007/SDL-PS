<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Include database connection
include 'config.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $description = $_POST['description'];
    $location = $_POST['location'];

    // Insert data into the database
    $sql = "INSERT INTO posts (description, location, user_id) VALUES (?, ?, ?)";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ssi", $description, $location, $_SESSION['user_id']);
        if ($stmt->execute()) {
            echo "Post created successfully!";
        } else {
            echo "Error: " ;
        }
        $stmt->close();
    }
    $mysqli->close();
}
?>
