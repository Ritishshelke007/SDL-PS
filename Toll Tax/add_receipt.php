<?php
// Include database connection
$conn = new mysqli("localhost","root","","tolltax");

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    die("Connection failed" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $vehicle_category = $_POST['vehicle_category'];
    $vehicle_name = $_POST['vehicle_name'];
    $owner_name = $_POST['owner_name'];
    $vehicle_number = $_POST['vehicle_number'];
    $trip = $_POST['trip'];
    $cost = $_POST['cost'];

    // Calculate cost based on trip
    // $cost = ($trip == 'one_way') ? 100 : 200;

    // Insert receipt into database
    $sql = "INSERT INTO toll_receipts (vehicle_category, vehicle_name, owner_name, vehicle_number, trip, cost) VALUES ('$vehicle_category', '$vehicle_name', '$owner_name', '$vehicle_number', '$trip', '$cost')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to success page
        echo "Receipt added successfully";
       
    } else {
        // Error inserting receipt
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
$conn->close();

/*
	#	Name	Type	Collation	Attributes	Null	Default		
	1	id Primary	int(10)			No	None		AUTO_INCREMENT		
	2	vehicle_category	varchar(50)		
	3	vehicle_name	varchar(50)		
	4	owner_name	varchar(100)	
	5	vehicle_number	varchar(20)	u	
	6	trip	varchar(50)			
	7	cost	int(3)			No	None				
	8	created_at	timestamp			No	current_timestamp()			

*/
?>

