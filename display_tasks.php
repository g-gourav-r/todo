<?php

// Open the SQLite database file "todo.db"
$db = new SQLite3("todo.db");

// Execute a query to select all records from the "todo" table
$result = $db->query("SELECT * FROM todo");

// Create an unordered list to display the tasks
echo "<ul>";

// Loop through the results and display each task
while ($row = $result->fetchArray()) {
    echo "<li>" . htmlspecialchars($row["name"]) . "</li>";
}

// Close the unordered list
echo "</ul>";

// Close the database connection
$db->close();
?>
