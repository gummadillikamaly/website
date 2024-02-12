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
  	<h2>Login</h2>
  </div>
  <div class="server">
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    </div>
  </form>
</body>
</html>