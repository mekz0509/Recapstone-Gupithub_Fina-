<?php
include 'includes/dbconnect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname =  $_SESSION["uname"];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['Services'];
    $barber = $_POST['Barber'];


    $sql = "INSERT INTO booking (user, date, time, service, barber) VALUES (?, ?, ?, ?, ?)";


    $stmt = $conn->prepare($sql);

    // Check for errors  prep
    if ($stmt === false) {
        echo "Error in prepare statement: " . $conn->error;
        exit();
    }

    // Bind parameters
    $stmt->bind_param("sssss", $uname, $date, $time, $service, $barber);

    // Check for errors sa bind
    if ($stmt === false) {
        echo "Error in bind_param: " . $conn->error;
        exit();
    }

    // Execute the statement
    if ($stmt->execute()) {
        echo "Booked successfully!";
        // Redirect to the dashboard or another appropriate page
        header("Location: /gupithub/main.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // Handle the case where the request method is not POST
    echo "Invalid request method";
}

// Close the connection
$conn->close();
?>
