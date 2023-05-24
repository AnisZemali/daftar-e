<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftar-e";

$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $date = $_POST['date'];
    $rate = $_POST['rate'];
    $patientId = $_SESSION['patient_id'];

    // Perform necessary data validation and sanitization

    // Insert the data into the database
    $sql = "INSERT INTO sugar (sugar_level, sugar_date, patient_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $rate, $date, $patientId);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
