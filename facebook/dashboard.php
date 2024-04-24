<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #f0f2f5;
    padding: 20px;
    text-align: center;
}

.sidebar .welcome-message {
    margin-bottom: 20px;
    font-weight: bold;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    color: #385898;
    text-decoration: none;
}

.sidebar ul li a:hover {
    color: #2e4a88;
}

</style>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="welcome-message">Welcome, <?php echo $_SESSION['username']; ?></div>
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Create Post</a></li>
                <li><a href="#">Feed</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Requests</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <!-- Main content goes here -->
        </div>
    </div>
</body>
</html>
