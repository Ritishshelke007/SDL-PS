    <?php
    	session_start();
    	include('conn.php');
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Login Using Cookie with Logout</title>
	 <link rel="stylesheet" href="style3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>

  <div class="container">    
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
         <form method="POST" action="login.php">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                 <input type="text" placeholder="Enter username" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter Password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password">
              </div>
           <div class="policy">
       <input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> <p class="remember">Remember me</p>
      </div>
              <div class="button input-box">
                  <input type="submit" value="Login" name="login">
              </div>
            </div>
        </form>
      </div>
        
          
      </form>
    </div>
    </div>
    </div>
  </div>
    

		 <!-- <div class="wrapper">
    <h2>Login</h2>
    <form method="POST" action="login.php">
      <div class="input-box">
        <input type="text" placeholder="Enter username" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
      </div>
      <div class="input-box">
       <input type="password" placeholder="Enter Password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password">
      </div>
      <div class="policy">
       <input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> <h3>Remember me</h3>
      </div>
      <div class="input-box button">
       <input type="submit" value="Login" name="login">
      </div>
    </form>
  </div> -->
     
    	<span>
    	<?php
    		if (isset($_SESSION['message'])){
    			echo $_SESSION['message'];
    		}
    		unset($_SESSION['message']);
    	?>
    </span>
    </body>
    </html>