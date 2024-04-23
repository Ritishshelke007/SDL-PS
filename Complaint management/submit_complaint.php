<?php
$conn = new mysqli("localhost", "root", "", "complaint");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";
}

$student_name = $_POST['student_name'];
$student_email = $_POST['student_email'];
$department = $_POST['department'];
$complaint_category = $_POST['complaint_category'];
$complaint_description = $_POST['complaint_description'];

echo $student_name;
echo $student_email;
echo $department;
echo $complaint_category;
echo $complaint_description;


$sql = "INSERT INTO complainttbl (name,email,department,category,description) VALUES ('$student_name','$student_email','$department','$complaint_category','$complaint_description')";

if ($conn->query($sql) === TRUE) {
    echo "Complaint submitted successfully!";
}
else {
    echo "Error: ";
}

$conn->close();
?>
