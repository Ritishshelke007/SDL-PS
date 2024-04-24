<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Toll Tax Receipt</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Add Toll Tax Receipt</h1>
            <form action="add_receipt.php" method="post">
               <label for="vehicle_category">Vehicle Category:</label>
                <select id="vehicle_category" name="vehicle_category" required>
                    <option value="Car">Car</option>
                    <option value="Truck">Truck</option>
                    <option value="Bus">Bus</option>
                </select>
                
                <label for="vehicle_name">Vehicle Name:</label>
                <input type="text" id="vehicle_name" name="vehicle_name" required>
                
                <label for="owner_name">Owner Name:</label>
                <input type="text" id="owner_name" name="owner_name" required>
                
                <label for="vehicle_number">Vehicle Number:</label>
                <input type="text" id="vehicle_number" name="vehicle_number" required>
                
                <label for="trip">Trip:</label>
                <select id="trip" name="trip">
                    <option value="one_way">One Way</option>
                    <option value="two_way">Two Way</option>
                </select>
                
                <label for="cost">Cost:</label>
                <input type="number" id="cost" name="cost" required>
                
                <input type="submit" value="Add Receipt">
            </form>
        </div>
    </div>
</body>
</html>
