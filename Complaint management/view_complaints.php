<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Complaints</title>
    <style>
        .complaint {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 15px;
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.complaints-container {
    width: 80%;
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
    </style>
</head>
<body>
    <h2 style="text-align: center;">All Complaints</h2>
     <div class="container">
        <div class="complaints-container">

      
    <?php
    // Establish database connection
    $conn = new mysqli("localhost", "root", "", "complaint");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch complaints
    $sql = "SELECT * FROM complainttbl";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='complaint'>";
                        echo "<p><strong>Student Name:</strong> " . $row["name"] . "</p>";
                        echo "<p><strong>Student Email:</strong> " . $row["email"] . "</p>";
                        echo "<p><strong>Department:</strong> " . $row["department"] . "</p>";
                        echo "<p><strong>Category:</strong> " . $row["category"] . "</p>";
                        echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
                        echo "<p><strong>Status:</strong> " . $row["status"] . "</p>";

                        echo "</div>";
        }
    } else {
        echo "No complaints found.";
    }

    mysqli_close($conn);
    ?>
      </div>
        
     </div>
</body>
</html>
