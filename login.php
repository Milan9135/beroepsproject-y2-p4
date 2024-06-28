<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Essentials</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<?php

if (isset($_POST["login"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];
    require_once "db.php"; // Assuming this file contains your Database class and initializes $db

    // Use the run method of the Database class to safely execute the query
    $sql = "SELECT * FROM users WHERE username = :name";
    $stmt = $db->run($sql, ['name' => $name]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user["password"])) {
            $_SESSION["username"] = $user; // Store user details in the session
            header("Location: index.php"); // Proper redirection
            echo"je bent succesvol ingelogd";
            exit(); // Ensure no further code is executed
        } else {
            $error = "Incorrect password";
        }
    } else {
        $error = "name is not found";
    }
}
    
?>

<body>
    <header>
        <div class="container">
            <div class="logo">Web-Essentials</div>
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./tools.php">Tools</a></li>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./registration.php">Sign Up</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="contact-info">
                Phone: +123-456-7890 | Email: info@Web-Essentials.com
            </div>
        </div>
    </header>

    <main>
        <div class="form">
        <form action="login.php" method="POST">
            <fieldset>
                <legend>Login</legend>
                <label for="name">Naam</label>
                <input type="text" name="name" placeholder="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" required>

                <input type="submit" value="login" name="login">

                <?php if (!empty($error)) { ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php } ?>
            </fieldset>
        </form>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="about">
                <h2>About Web-Essentials</h2>
                <p><strong>Company Mission:</strong> Our mission is to help individuals and businesses achieve their productivity goals with simple yet powerful tools.</p>
                <p><strong>Company Vision:</strong> We envision a world where managing tasks and time is effortless and efficient for everyone.</p>
                <p><strong>Team Introduction:</strong> Meet our team of dedicated professionals committed to providing the best productivity solutions.</p>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Help Center</a></li>
                </ul>
            </div>
            <div class="social-media">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">LinkedIn</a>
                <a href="#">Instagram</a>
            </div>
            <div class="newsletter">
                <h2>Subscribe to Our Newsletter</h2>
                <form>
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <div class="contact-info">
                Address: 123 Productivity Lane, Tech City, TX 12345 | Phone: +123-456-7890 | Email: support@Web-Essentials.com
            </div>
        </div>
    </footer>
    
    <?php

    ?>
</body>
</html>