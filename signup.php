<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
      <div class="header">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="create.php">Create</a></li>
                <li><a href="contact.php">Contact</a></li>
                <a href="login.php"><button>LOGIN</button></a>
                <a href="signup.php"><button>SIGNUP</button></a>
                <a href="logout.html"><button>LOG OUT</button></a>
            </ul>
        </nav>
      </div>
    </header>
  <div class="header">
  	<h2>Register</h2>
  </div>
	<div class="server">
  <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
	  </div>
  </form>
</body>
</html>