<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Complaint Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Submit Complaint</h2>
            <form action="submit_complaint.php" method="post">
                <label for="student_name">Your Name:</label>
                <input type="text" name="student_name" required>
                
                <label for="student_email">Your Email:</label>
                <input type="email" name="student_email" required>
                
                <label for="department">Select Department:</label>
                <select name="department" required>
                    <option value="Computer">Computer</option>
                    <option value="IT">IT</option>
                    <option value="Civil">Civil</option>
                    <option value="EnTC">EnTC</option>
                </select>

                <label for="complaint_category">Complaint Category:</label>
                <select name="complaint_category" required>
                    <option value="Academic">Academic</option>
                    <option value="Facilities">Facilities</option>
                    <option value="Administrative">Administrative</option>
                    <option value="Other">Other</option>
                </select>
                
                <label for="complaint_description">Complaint Description:</label>
                <textarea name="complaint_description" rows="5" required></textarea>
                
                <input type="submit" value="Submit Complaint" style="margin-top: 10px;">
            </form>
        </div>
    </div>
</body>
</html>
