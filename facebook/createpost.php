<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.sidebar {
    width: 200px;
    padding: 20px;
    background-color: #f0f2f5;
    border-right: 1px solid #ccc;
}

.welcome-message {
    font-size: 16px;
    margin-bottom: 20px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

li a {
    text-decoration: none;
    color: #333;
}

.main-content {
    padding: 20px;
}

h2 {
    margin-bottom: 20px;
}

form {
    width: 400px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    font-weight: bold;
}

textarea, input[type="text"], input[type="file"], input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="welcome-message">Welcome, <?php echo $_SESSION['username']; ?></div>
            <ul>
                <li><a href="dashboard.php">Profile</a></li>
                <li><a href="#">Create Post</a></li>
                <li><a href="#">Feed</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Requests</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h2>Create Post</h2>
            <form action="createpost_process.php" method="POST" enctype="multipart/form-data">
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
                <label for="location">Location:</label><br>
                <input type="text" id="location" name="location" required><br><br>
                <label for="image">Image:</label><br>
                <input type="file" id="image" name="image"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
