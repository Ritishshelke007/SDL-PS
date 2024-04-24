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

$verified = "verified";

if (isset($_GET["code"])) {
  $verification_code = $_GET["code"];
  $sql = "UPDATE users SET status = '$verified'  WHERE verification_code = ?;";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $verification_code);
  $stmt->execute();

  $user = $stmt->affected_rows;
  $stmt->close();


  if ($user > 0) {
    echo "Email verified successfully.";
  }
  else {
    echo "Invalid verification code.";
  }


  // if ($conn->query($sql) === TRUE) {
  //   echo "Email verified successfully.";
  // } else {
  //   echo "Error updating record: " . $conn->error;
  // }
} else {
  echo "Invalid verification code.";
}

$conn->close();
?>
