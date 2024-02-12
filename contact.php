<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="create.php">Create</a></li>
                <li><a href="contact.php">Contact</a></li>
                <a href="login.php"><button>LOGIN</button></a>
                <a href="signup.php"><button>SIGNUP</button></a>
                <a href="logout.php"><button>LOG OUT</button></a>
            </ul>
        </nav>
    </header>
    <div class="contactform">
        <h1>CONTACT FORM</h1><hr>
        <form>
            <div class="hi">
                <label for="clientname" class="form-label">NAME:</label>
                <input type="text" class="form-control" id="clientname" name="clientname">
            </div>
            <div class="this">
                <label for="clientemail" class="form-label">Email address:</label>
                <input type="email" class="form-control" id="clientemail" name="clientemail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="how">
                <label for="clientphone" class="form-label">Phone:</label>
                <input type="phone" class="form-control" id="clientphone" name="clientphone">
            </div>
            <div class="I">
                <label for="enquiry" class="form-label">Enquiry:</label>
                <input type="text" class="form-control" id="enquiry" name="enquiry">
            </div>
            <div class="areyou">
                <input type="checkbox" class="form-check-input" id="form" name="isclient">
                <label class="form-check-label" for="isclient">Check me out</label>
            </div>
            <div class="f1">
                <button type="submit" class="white">Submit</button>
            </div>
            <div class="f2">
                <button type="reset" class="black">Reset</button>
            </div>
        </form>
    </div>

    <script src="index.js"></script>
</body>
</html>
