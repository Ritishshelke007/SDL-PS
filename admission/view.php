<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Admissions</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>

<?php
// Include database connection
$conn = new mysqli("localhost", "root", "", "admission");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve admissions data from the database
$sql = "SELECT * FROM admissions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output table header
    echo "<table>";
    echo "<tr><th>ID</th><th>Course</th><th>Name</th><th>DOB</th><th>Nationality</th><th>Gender</th><th>Caste Category</th><th>Address</th><th>City</th><th>State</th><th>10th Board</th><th>10th Year</th><th>10th Percentage</th><th>12th Board</th><th>12th Year</th><th>12th Percentage</th></tr>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["course"] . "</td>";
        echo "<td>" . $row["full_name"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["nationality"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["caste_category"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "<td>" . $row["state"] . "</td>";
        echo "<td>" . $row["10th_board"] . "</td>";
        echo "<td>" . $row["10th_year"] . "</td>";
        echo "<td>" . $row["10th_percentage"] . "</td>";
        echo "<td>" . $row["12th_board"] . "</td>";
        echo "<td>" . $row["12th_year"] . "</td>";
        echo "<td>" . $row["12th_percentage"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
