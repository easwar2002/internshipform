<?php
include 'db.php';
$conn->query("DELETE FROM applications WHERE id=$_GET[id]");
header("Location:view.php");
?>