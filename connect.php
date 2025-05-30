<?php
// Change 'local' to 'localhost'
$conn = new mysqli("localhost", "root", "", "tubephp");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
