<?php
session_start();

include 'includes/dbconnect.php';

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM users WHERE email = '$username'";

    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            

            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["email"];
            $_SESSION["uname"] = $row["firstname"] . ' ' . $row["lastname"];

            header("Location: /gupithub/main.php");
        } else {

            echo "Incorrect password";
        }
    } else {

        echo "User not found";
    }
}

$conn->close();
?>
