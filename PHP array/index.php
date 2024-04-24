<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search by PRN Number</title>
    <style>
        /* Professional level CSS styles */
        body {
            font-family: Arial, sans-serif;
        }
        input[type="text"], input[type="submit"] {
            padding: 8px;
            margin-right: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Search by PRN Number</h1>
    <form method="post">
        <label for="prn">Enter PRN Number:</label>
        <input type="text" id="prn" name="prn">
        <input type="submit" name="search" value="Search">
        <input type="submit" name="displayAll" value="Display All">
    </form>

    <?php
    // Data array
    $data = array(
        array('PRN No' => '123', 'Student Name' => 'John Doe', 'Exam Name' => 'Math', 'Tab Switch Count' => 5, 'Copy Paste Count' => 2, 'Hardware Detection' => 'Yes', 'Full Screen Mode Count' => 3),
        array('PRN No' => '456', 'Student Name' => 'Jane Smith', 'Exam Name' => 'Science', 'Tab Switch Count' => 7, 'Copy Paste Count' => 1, 'Hardware Detection' => 'No', 'Full Screen Mode Count' => 1),
        // Add more data entries as needed
    );

    // Function to display data in table format
    function displayData($data) {
        echo '<table>';
        echo '<tr>';
        foreach ($data[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '</tr>';
        foreach ($data as $entry) {
            echo '<tr>';
            foreach ($entry as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    if (isset($_POST['search']) && !empty($_POST['prn'])) {
        $prn = $_POST['prn'];
        $result = array_filter($data, function ($item) use ($prn) {
            return $item['PRN No'] == $prn;
        });
        if (!empty($result)) {
            echo '<h2>Search Result for PRN No: ' . $prn . '</h2>';
            displayData($result);
        } else {
            echo '<p>No data found for PRN No: ' . $prn . '</p>';
        }
    }

    if (isset($_POST['displayAll'])) {
        echo '<h2>All Data</h2>';
        displayData($data);
    }
    ?>

</body>
</html>