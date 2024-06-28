<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Calendar</title>
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/style.css">
</head>
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
    
    <div id="calendar"> <div id="calendar-header"> <span id="month-prev" class="change-month">&lt;</span> <h1 id="month"></h1> <span id="month-next" class="change-month">&gt;</span> </div> 
    <div id="days"></div>
    
    <div id="calendar-body">
    
    
    </div>
    
    
    
     </div>
    
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
        
    <script>
    let date = new Date();

    function renderCalendar() {
    date.setDate(1);

    const monthDays = document.getElementById('calendar-body');
    const month = document.getElementById('month');
    const daysElement = document.getElementById('days');

    const lastDay = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDate();

    const prevLastDay = new Date(
        date.getFullYear(),
        date.getMonth(),
        0
    ).getDate();

    const firstDayIndex = date.getDay();

    const lastDayIndex = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDay();

    const nextDays = 7 - lastDayIndex - 1;

    const months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];

    const days = [
        'S',
        'M',
        'T',
        'W',
        'T',
        'F',
        'S'
    ];

    month.innerText = `${months[date.getMonth()]} ${date.getFullYear()}`;
    daysElement.innerHTML = days.map(day => `<div>${day}</div>`).join('');

    let dates = '';

    for (let x = firstDayIndex; x > 0; x--) {
        dates += `<div class='prev-date'>${prevLastDay - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        if (
            i === new Date().getDate() &&
            date.getMonth() === new Date().getMonth() &&
            date.getFullYear() === new Date().getFullYear()
        ) {
            dates += `<div class='today'>${i}</div>`;
        } else {
            dates += `<div>${i}</div>`;
        }
    }

    for (let j = 1; j <= nextDays; j++) {
        dates += `<div class='next-date'>${j}</div>`;
    }
    monthDays.innerHTML = dates;
}

document.getElementById('month-prev').addEventListener('click', () => {
    document.getElementById('calendar-body').classList.add('fade-out');
    setTimeout(() => {
        date.setMonth(date.getMonth() - 1);
        renderCalendar();
        document.getElementById('calendar-body').classList.remove('fade-out');
    }, 500);
});

document.getElementById('month-next').addEventListener('click', () => {
    document.getElementById('calendar-body').classList.add('fade-out');
    setTimeout(() => {
        date.setMonth(date.getMonth() + 1);
        renderCalendar();
        document.getElementById('calendar-body').classList.remove('fade-out');
    }, 500);
});

renderCalendar();


     </script>
</body>
</html>