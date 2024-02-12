<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes And Password Manager</title>
    <link rel="stylesheet" href="styles.css">
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
                    <a href="logout.php"><button>LOG OUT</button></a>
                </ul>
            </nav>
        </div>
    </header>
    
    <section>
        <div class="devpic">
            <img src="6.webp" alt="click here">
        </div>
        <div class="main">
            <h1 class="block-effect" style="--td: 1.2s">
                <div class="block-reveal" style="--bc: #a19cef; --d: .5s">
                    Password Manager!!!
                </div>
            </h1>
            <div class="readmore">
                <a href="create.php"><button>Create</button></a>
            </div> 
            <div class="password">
                <h2>
                    Defend your data: Your password is the frontline of the digital battle.
                </h2>
            </div>
        </div>
        <script src="script.js"></script>
    </section>
    
    <footer>
        <div class="footer">
            <p>&copy; <?php echo date("Y"); ?> NotesAndPasswordManager.com</p>
        </div>
    </footer>

</body>
</html>
