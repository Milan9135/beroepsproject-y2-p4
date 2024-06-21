<!DOCTYPE html>
<html>

<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="todo.css">
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
                    <!-- make logout appear and login disappear when logged in -->
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
            <div class="contact-info">
                Phone: +123-456-7890 | Email: info@Web-Essentials.com
            </div>
        </div>
    </header>

    <div class="todo-container">
        <h1>To-Do List</h1>

        <form method="POST" action="">
            <input type="text" name="task" placeholder="Enter a task" required>
            <button type="submit" name="add">Add Task</button>
        </form>

        <?php
        // Handle form submissions
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Read the current to-do list
            $todoList = file_get_contents('todo.txt');
            $tasks = explode(PHP_EOL, $todoList);

            if (isset($_POST['add'])) {
                // Add a new task
                $task = htmlspecialchars($_POST['task']);
                $tasks[] = $task;
            } elseif (isset($_POST['delete'])) {
                // Delete a task
                $taskToDelete = $_POST['delete'];
                unset($tasks[$taskToDelete]);
            } elseif (isset($_POST['edit'])) {
                // Edit a task
                $taskToEdit = $_POST['edit'];
                $newTask = htmlspecialchars($_POST['newTask']);
                $tasks[$taskToEdit] = $newTask;
            } elseif (isset($_POST['toggle'])) {
                // Toggle the strikethrough effect
                $taskToToggle = $_POST['toggle'];
                $tasks[$taskToToggle] = (strpos($tasks[$taskToToggle], '~~') === 0) ?
                    substr($tasks[$taskToToggle], 2) :
                    '~~' . $tasks[$taskToToggle];
            }

            // Save the updated task list
            file_put_contents('todo.txt', implode(PHP_EOL, $tasks));
        }

        // Display the to-do list
        $todoList = file_get_contents('todo.txt');
        $tasks = explode(PHP_EOL, $todoList);
        ?>

        <ul>
            <?php foreach ($tasks as $index => $task) : ?>
                <?php if (!empty($task)) : ?>
                    <li>
                        <form method="POST" action="" class="task-form">
                            <span class="<?= (strpos($task, '~~') === 0) ? 'crossed' : '' ?>">
                                <?= htmlspecialchars(ltrim($task, '~~')) ?>
                            </span>
                            <div class="task-buttons">
                                <button type="submit" name="delete" value="<?= $index ?>">Delete</button>
                                <button type="button" onclick="editTask(<?= $index ?>, '<?= ltrim($task, '~~') ?>')">Edit</button>
                                <button type="submit" name="toggle" value="<?= $index ?>">
                                    <?= (strpos($task, '~~') === 0) ? 'Uncross' : 'Cross' ?>
                                </button>
                            </div>
                        </form>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>

    <script>
        function editTask(index, task) {
            let newTask = prompt("Edit Task:", task);
            if (newTask !== null && newTask.trim() !== "") {
                let form = document.createElement("form");
                form.method = "POST";
                form.action = "";
                form.style.display = "none";

                let editInput = document.createElement("input");
                editInput.type = "hidden";
                editInput.name = "edit";
                editInput.value = index;

                let newTaskInput = document.createElement("input");
                newTaskInput.type = "hidden";
                newTaskInput.name = "newTask";
                newTaskInput.value = newTask;

                form.appendChild(editInput);
                form.appendChild(newTaskInput);

                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>

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
