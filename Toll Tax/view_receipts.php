<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Toll Tax Receipts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #007bff;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>View Toll Tax Receipts</h1>
    <table>
        <tr>
            <th>Receipt ID</th>
            <th>Vehicle Category</th>
            <th>Vehicle Name</th>
            <th>Owner Name</th>
            <th>Vehicle Number</th>
            <th>Trip</th>
            <th>Cost</th>
        </tr>
        <?php
        // Include database connection
        $conn = new mysqli("localhost", "root", "", "tolltax");

        // Retrieve all receipts from database
        $sql = "SELECT * FROM toll_receipts";
        $result = $conn->query($sql);

        // Check if there are any receipts
        if ($result->num_rows > 0) {
            // Loop through each row and display data in table
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['vehicle_category'] . "</td>";
                echo "<td>" . $row['vehicle_name'] . "</td>";
                echo "<td>" . $row['owner_name'] . "</td>";
                echo "<td>" . $row['vehicle_number'] . "</td>";
                echo "<td>" . $row['trip'] . "</td>";
                echo "<td>" . $row['cost'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No receipts found.</td></tr>";
        }

        // Close database connection
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
