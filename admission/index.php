<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Admission Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>College Admission Form</h2>
        <form action="submit_admission.php" method="post">
            <label for="course">Course:</label>
            <select id="course" name="course" required>
                <option value="">Select Course</option>
                <option value="Computer">Computer</option>
                <option value="IT">IT</option>
                <option value="Civil">Civil</option>
                <option value="Mechanical">Mechanical</option>
                <!-- Add more options for other courses -->
            </select>

            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="nationality">Nationality:</label>
<select name="nationality" id="nationality" required>
    <option value="Indian">Indian</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
    <option value="Canada">Canada</option>
    <!-- Add more countries as needed -->
</select>


            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

           <label for="caste">Caste Category:</label>
<select name="caste" id="caste" required>
    <option value="Open">Open</option>
    <option value="EWS">EWS</option>
    <option value="SC">SC</option>
    <option value="ST">ST</option>
    <option value="OBC">OBC</option>
</select>



            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4"></textarea>

            <label for="city">City:</label>
<select name="city" id="city" required>
    <option value="Pune">Pune</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Delhi">Delhi</option>
    <option value="Bangalore">Bangalore</option>
    <!-- Add more Indian cities here -->
</select>

<label for="state">State:</label>
<select name="state" id="state" required>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Delhi">Delhi</option>
    <option value="Karnataka">Karnataka</option>
    <!-- Add more Indian states here -->
</select>


            <h3>Education Qualification</h3>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Board/University</th>
                        <th>Year</th>
                        <th>Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10th</td>
                        <td><input type="text" name="board_10th"></td>
                        <td><input type="text" name="year_10th"></td>
                        <td><input type="number" step="0.1" name="percentage_10th" min="0" max="100"></td>
                    </tr>
                    <tr>
                        <td>12th</td>
                        <td><input type="text" name="board_12th"></td>
                        <td><input type="text" name="year_12th"></td>
                        <td><input type="number" step="0.1" name="percentage_12th" min="0" max="100"></td>
                    </tr>
                    <!-- Add more rows for additional qualifications if needed -->
                </tbody>
            </table>

            <!-- Add more input fields for other student details -->

            <button type="submit">Submit Application</button>
        </form>
    </div>
</body>
</html>
