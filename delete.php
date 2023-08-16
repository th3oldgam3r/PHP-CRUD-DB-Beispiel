<?php
require_once 'db_connect.php';

$id = $_GET['id'];

// Datensatz aus der Datenbank löschen
$sql = "DELETE FROM tasks WHERE id = $id";
$conn->query($sql);

header("Location: index.php");
?>