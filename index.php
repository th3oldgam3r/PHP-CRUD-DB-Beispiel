<?php
require_once 'db_connect.php';

// Datensätze aus der Datenbank abrufen
$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Task List</title>
</head>

<body>
    <h2>Task List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Task</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['task']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="create.php">Add New Task</a>
</body>

</html>