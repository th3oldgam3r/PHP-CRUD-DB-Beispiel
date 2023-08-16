<?php
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];

    // Datensatz in die Datenbank einfügen
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    $conn->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Task</title>
</head>

<body>
    <h2>Add Task</h2>
    <form method="post" action="">
        <input type="text" name="task" placeholder="Enter Task">
        <button type="submit">Add</button>
    </form>
    <a href="index.php">Back to List</a>
</body>

</html>