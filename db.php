<?php
$host = "localhost";
$dbname = "careerhub";
$username = "root";
$password = ""; // WAMP default password is blank

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
