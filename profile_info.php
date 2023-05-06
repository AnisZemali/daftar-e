<?php

include ('connection.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Extract the data from the form submission
    $bio = $_POST['bio'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];

    // Construct the SQL INSERT statement
    $sql = "INSERT INTO users (bio, gender, birthdate, country, phone) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$bio, $gender, $birthdate, $country, $phone]);

    // Inform the user that their profile information has been saved
    echo "Your profile information has been saved!";
}

?>
