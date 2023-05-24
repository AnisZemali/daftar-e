<?php


// include_once 'includes/register.inc.php';
// include_once 'includes/functions.php';
// include_once './login-patient.php';


if (!isset($_SESSION)) {
    session_start();
}


// Check if the user is logged in
if (!isset($_SESSION['doctor_id'])) {
    header('Location: ./login-doctor.php');
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftar-e";

$conn = new mysqli($servername, $username, $password, $dbname);

// Establish a connection to the database
// Retrieve patient information from the database
$doctor_id = $_SESSION['doctor_id']; // assuming the patient is already logged in
$sql = "SELECT * FROM doctor WHERE doctor_id = $doctor_id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Include the form HTML file
    include 'doctor_profile.php';

} else {
    echo "Doctor not found.";
}

// Handle form submission to update the patient information
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $bio = $_POST['bio'];




    $sql = "UPDATE doctor SET ";


    if ($username != "") {
        $sql .= "doctor_username = '$username', ";
    }

    if ($email != "") {
        $sql .= "dcotor_email = '$email', ";
    }

    if ($address != "") {
        $sql .= "doctor_address = '$address', ";
    }

    if ($birthdate != "") {
        $sql .= "doctor_bd = '$birthdate', ";
    }

    if ($phone != "") {
        $sql .= "doctor_phone = '$phone', ";
    }

    if ($bio != "") {
        $sql .= "doctor_bio = '$bio', ";
    }

    $sql = rtrim($sql, ", ");


    $sql .= " WHERE doctor_id=$doctor_id";



    // $sql = "UPDATE patient SET patient_username='$username', patient_email='$email', patient_password='$password',patient_birthdate='$birthdate', patient_bio='$bio', patient_gender='$gender', patient_country ='$country',patient_phone = '$phone',patient_height = '$height' , patient_weight='$weight' , patient_blood = '$blood'  WHERE patient_id=$patient_id";

    if ($conn->query($sql) === TRUE) {
        echo "Doctor information updated successfully.";
    } else {
        echo "Error updating doctor information: ";
    }
}

// session_destroy();

$conn->close();

?>