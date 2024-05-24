<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <form method="POST" action="">
        <input type="text" name="task" placeholder="Enter a task">
        <button type="submit">Add Task</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the task from the form
        $task = $_POST['task'];

        // Add the task to the to-do list
        $todoList = file_get_contents('todo.txt');
        $todoList .= $task . PHP_EOL;
        file_put_contents('todo.txt', $todoList);
    }

    // Display the to-do list
    $todoList = file_get_contents('todo.txt');
    $tasks = explode(PHP_EOL, $todoList);
    foreach ($tasks as $task) {
        if (!empty($task)) {
            echo "<p>$task</p>";
        }
    }
    ?>
</body>
</html>