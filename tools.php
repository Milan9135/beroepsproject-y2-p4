<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tools.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Web-Essentials</div>
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./tools.php">Tools</a></li>
                    <li><a href="./schedule.php">Calendar</a></li>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href=".registration.php">Sign Up</a></li>
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
                        <li><a href="./logout.php">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="contact-info">
                Phone: +123-456-7890 | Email: info@Web-Essentials.com
            </div>
        </div>
    </header>
    <main>
        <section class="tools">
            <div class="container">
                <h2>Our Tools</h2>
                <div class="tool">
                    <h3>Calculator</h3>
                    <p>Accurate and easy-to-use calculator for all your math needs.</p>
                    <ul>
                        <li>Basic and advanced functions</li>
                        <li>Instantanious response</li>
                    </ul>
                    <a href="./calculator.php">Try out</a>
                </div>
                <div class="tool">
                    <h3>Calendar</h3>
                    <p>Stay organized and never miss an appointment with our calendar.</p>
                    <ul>
                        <li>Daily, weekly, monthly views</li>
                        <li>Event reminders</li>
                    </ul>
                    <a href="./schedule.php">Try out</a>
                </div>
                <div class="tool">
                    <h3>To-Do List</h3>
                    <p>Efficiently manage your tasks and to-dos with our intuitive list.</p>
                    <ul>
                        <li>Task prioritization</li>
                        <li>Deadlines</li>
                        <li>Progress tracking</li>
                    </ul>
                    <a href="./todo.php">Try out</a>
                </div>
            </div>
        </section>
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