<?php
include 'dashboard.php';
$id = $_GET['id'];
$conn->query("DELETE FROM musik WHERE id=$id");
header("Location: LaundryKu.html");
?>