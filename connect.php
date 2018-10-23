<?php
 session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="tour";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    // echo 'hebed';
    die("Connection failed: " . $conn->connect_error);
}
?>
