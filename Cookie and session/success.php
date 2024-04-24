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
		<div class="wrapper" style="display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">
			<h2>
				<span>Logged In User : </span>
			<?php echo $row['fullname']; ?>
			</h2>
			<br>
			<a class="btn" href="logout.php" style="color: black;  display: inline-block;
  padding: 10px 30px;
  margin-top: 20px;
  color: white;
  font-size: 18px;
  font-weight: 500;
  border-radius: 6px;
  text-decoration: none;
	background-color: blue;
  ">Logout</a>

		</div>
    </body>
    </html>