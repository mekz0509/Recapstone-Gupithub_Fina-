<?php
$servername = "localhost";
$username   = "gupit.hub_admin";
$password   = "N3tj8SayGLD6dTWFmZYKhv";
$dbname     = "php_gupithub";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>