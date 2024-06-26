<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Essentials</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

?> 

<body>
    <header>
        <div class="container">
            <div class="logo">Web-Essentials</div>
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./tools.html">Tools</a></li>
                    <li><a href="./schedule.php">Calendar</a></li>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./registration.php">Sign Up</a></li>
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

    <section class="hero">
        <div class="container">
            <h1>Maximize Your Productivity with Our All-In-One Tool Suite</h1>
            <a href="#" class="cta-button">Get Started Now</a>
        </div>
    </section>

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
                <h3>Schedule</h3>
                <p>Stay organized and never miss an appointment with our schedule.</p>
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

    <section class="benefits">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <ul>
                <li><strong>All-In-One Solution:</strong> Combine multiple productivity tools into one seamless experience.</li>
                <li><strong>User-Friendly Interface:</strong> Intuitive design that makes task management simple.</li>
                <li><strong>Cross-Platform Sync:</strong> Access your tools from any device, anytime, anywhere.</li>
            </ul>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2>What Our Users Say</h2>
            <div class="testimonial">
                <p>"These tools have transformed the way I manage my day. Highly recommended!" – John Doe</p>
            </div>
            <div class="testimonial">
                <p>"The schedule and to-do list features are exactly what I needed to stay on top of my work." – Jane Smith</p>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <h2>Latest News</h2>
            <ul>
                <li><a href="#">How to Maximize Your Productivity with Our All-In-One Tool Suite</a></li>
                <li><a href="#">Top 5 Features of Our Advanced Calculator</a></li>
                <li><a href="#">Stay Organized: Tips for Using Our schedule Effectively</a></li>
            </ul>
        </div>
    </section>

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
