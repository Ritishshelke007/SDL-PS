    <?php
    	session_start();
     
    	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    		header('index.php');
    		exit();
    	}
    	include('conn.php');
    	$query=mysqli_query($conn,"select * from users where userid='".$_SESSION['id']."'");
    	$row=mysqli_fetch_assoc($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
	<link rel="stylesheet" href="style2.css">
    <title>Setting Up Cookie on User Login</title>
    </head>
    <body>
		<div class="wrapper">
			<h2>
				<span>Logged In User : </span>
			<?php echo $row['fullname']; ?>
			</h2>
			<br>
			<a class="btn" href="logout.php">Logout</a>

		</div>
    </body>
    </html>