<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <form action="add_task.php" method="POST">
        <input type="text" name="task" placeholder="Add a new task">
        <button type="submit">Add Task</button>
    </form>
    <h2>Tasks</h2>
    <?php include 'display_tasks.php'; ?>
</body>
</html>
