<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreer</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

#DB locatie dingen

#registreer query 
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $errors = array();
    if (empty($name) OR empty($password)) {
        array_push($errors, "Alle velden zijn nodig om verder te gaan");
    }
    if (strlen($password)<4) {
        array_push($errors, "Wachtwoord moet minimaal 4 karakters lang zijn.");
    }

    if (count($errors)>0) {
        foreach ($errors as $error) {
            echo "<div class='alert'>$error</div>";
        }
    } else {
        require_once "db.php";
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        // Create an instance of the Database class
        $db = new Database("bp24");
        
        // Prepare and execute the statement with the provided parameters
        $name = 'name';
        $password = 'password'; // You should hash the password before storing it
        
        $stmt = $db->run($sql, [$name, $password]);
        
        // Check if the statement executed successfully
        if ($stmt) {
            echo "<div class='goed'>registratie compleet</div>";
        } else {
            echo "<div class='fout'>Registratie mislukt</div>";
        }
    }
}
?>

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
                    <li><a href="./logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="contact-info">
                Phone: +123-456-7890 | Email: info@Web-Essentials.com
            </div>
        </div>
    </header>

    <main>
        <fieldset>
            <form action="registration.php" method="POST">
                <legend>Registreer</legend>

                <label for="name">Naam</label>
                <input type="text" name="name">
                
                <label for="password">Wachtwoord</label>
                <input type="text" name="password">

                <input type="submit" value="Registreer" name="submit">
            </form>
        </fieldset>
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
</body>
</html>