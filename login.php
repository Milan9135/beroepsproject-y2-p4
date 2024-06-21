<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Essentials</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Web-Essentials</div>
            <nav>
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./tools.html">Tools</a></li>
                    <li><a href="./login.html">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <!-- make logout appear and login dissapear when logged in -->
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
            <div class="contact-info">
                Phone: +123-456-7890 | Email: info@Web-Essentials.com
            </div>
        </div>
    </header>

    <main>
        <legend>
            <form method="POST">
                <label for="username">Naam</label>
                <input type="text" name="username" id="username" placeholder="username">

                <label for="password">Password</label>
                <input type="text" name="password" id="password" placeholder="password">

                <button value="submit">Log In</button>
            </form>
        </legend>
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
        session_start(); // Start the session
        
        // Dummy data for illustration (Replace this with your database query)
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            // Replace the following if condition with your database query for user authentication
            if ($username === $valid_username && $password === $valid_password) {
                // Set session variables
                $_SESSION['username'] = $username;
                $_SESSION['loggedin'] = true;
        
                // Redirect to a protected page
                header("index.html");
                exit();
            } else {
                // Login failed
                echo "F";
            }
        }
        ?>
    ?>
</body>
</html>