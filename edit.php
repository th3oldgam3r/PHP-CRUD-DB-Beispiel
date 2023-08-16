<?php
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $task = $_POST['task'];

    // Datensatz in der Datenbank aktualisieren
    $sql = "UPDATE tasks SET task = '$task' WHERE id = $id";
    $conn->query($sql);

    header("Location: index.php");
}

$id = $_GET['id'];
$sql = "SELECT * FROM tasks WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h2>Edit Task</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="task" value="<?php echo $row['task']; ?>">
        <button type="submit">Save</button>
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>
