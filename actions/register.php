<?php
include 'includes/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname    = $_POST['firstname'];
    $lastname     = $_POST['lastname'];
    $address      = $_POST['address'];
    $contact      = $_POST['contacts'];
    $emailaddress = $_POST['emailaddress'];
    $password     = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $newsletter   = 0;
    IF(isset($_POST['radio-group']) && $_POST['radio-group'] == "newsLetterAccepter"){
        $newsletter = 1;
    }

    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (firstname, lastname, address, contacts, email, password, newsletter) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $firstname, $lastname, $address, $contact, $emailaddress, $hashedPassword, $newsletter);

    if ($stmt->execute()) {
        echo "Registered successfully!";
        header("Location: /gupithub/login.php");
        die();
    } else {
        echo "Error: " . $stmt->error;
    }
}

$conn->close();
?>
