<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emailverification";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Process registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $verification_code = uniqid();
    $verification_url = "http://localhost/email/verify.php?code=" . $verification_code;
  
    $sql = "INSERT INTO users (username, email, password,verification_code,verification_url) VALUES ('$username','$email','$password','$verification_code', '$verification_url');";
  
  if ($conn->query($sql) === TRUE) {  
    echo "Verification email sent. Please check your inbox.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
