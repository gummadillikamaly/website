<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassX - Your Personal Password Manager</title>
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
    <div class="container">
        <h1>Password Manager</h1>
        <p>We're thrilled to have you here. Your digital life contains a myriad of passwords, and we know how
            challenging it can be to manage them all. That's why we're here to make it easy for you.</p>
        <h2>Your Passwords <span id="alert">(Copied!)</span></h2> 
        <table>
            <tr>
                <th>Website</th>
                <th>Username</th>
                <th>Password</th>
                <th>Delete</th>
            </tr> 
            <tr>
                <td>url</td>
                <td>gmail or phone no</td>
                <td>Password</td>
                <td>Delete</td>
            </tr> 
        </table>

        <h2>Add a Password</h2>
        <form action="/submit" method="post">

            <!-- Text input for website -->
            <label for="website">Website:</label>
            <input type="text" id="website" name="website" required>
            <br><br>

            <!-- Text input for username -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br><br>

            <!-- Password input -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <!-- Submit button -->
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>