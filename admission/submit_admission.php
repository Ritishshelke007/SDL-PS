<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    $conn = new mysqli("localhost", "root", "", "admission");

    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        die("Connection failed" . $conn->connect_error);
    }

    // Retrieve form data
    $course = $_POST["course"];
    $full_name = $_POST["full_name"];
    $dob = $_POST["dob"];
    $nationality = $_POST["nationality"];
    $gender = $_POST["gender"];
    $caste = $_POST["caste"];
    echo $caste;
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $board_10th = $_POST["board_10th"];
    $year_10th = $_POST["year_10th"];
    $percentage_10th = $_POST["percentage_10th"];
    $board_12th = $_POST["board_12th"];
    $year_12th = $_POST["year_12th"];
    $percentage_12th = $_POST["percentage_12th"];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO admissions (course, full_name, dob, nationality, gender, caste_category, address, city, state, 10th_board, 10th_year, 10th_percentage, 12th_board, 12th_year, 12th_percentage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssdssd", $course, $full_name, $dob, $nationality, $gender, $caste, $address, $city, $state, $board_10th, $year_10th, $percentage_10th, $board_12th, $year_12th, $percentage_12th);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Admission details added successfully!');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.php");
}
?>
