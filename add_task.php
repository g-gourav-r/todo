<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST["task"];

    // Open the SQLite database file "todo.db"
    $db = new SQLite3("todo.db");

    // Execute an SQL INSERT statement to add the new task
    $stmt = $db->prepare("INSERT INTO todo (name) VALUES (:task)");
    $stmt->bindValue(':task', $task, SQLITE3_TEXT);
    $stmt->execute();

    // Close the database connection
    $db->close();
}

// Redirect the user back to the index.php page
header("Location: index.php");
exit();
?>
