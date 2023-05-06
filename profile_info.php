<?php


// include_once 'includes/register.inc.php';
// include_once 'includes/functions.php';
// include_once './login-patient.php';


if (!isset($_SESSION)) { session_start(); }


// Check if the user is logged in
if (!isset($_SESSION['patient_id'])) {
  header('Location: ./login-patient.php');
  exit;
}

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "daftar-e";
 
$conn = new mysqli($servername, $username, $password, $dbname);

// Establish a connection to the database
// Retrieve patient information from the database
$patient_id = $_SESSION['patient_id']; // assuming the patient is already logged in
$sql = "SELECT * FROM patient WHERE patient_id = $patient_id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();

  // Include the form HTML file
  include 'profile.php';

} else {
  echo "Patient not found.";
}

// Handle form submission to update the patient information
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['new_password'];
  $birthdate = $_POST['birthdate'];
  $bio = $_POST['bio'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];
  $phone = $_POST['phone'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $blood = $_POST['blood'];



  
  $sql = "UPDATE patient SET ";


  if($username != "") {
    $sql .= "patient_username = '$username', ";
  }

  if($email != "") {
    $sql .= "patient_email = '$email', ";
  }

  if($password != "") {
    $sql .= "patient_password = " . hash("sha512", $password) . ', ';
  }


  if($birthdate != "") {
    $sql .= "patient_birthdate = '$birthdate', ";
  }

  if($bio != "") {
    $sql .= "patient_bio = '$bio', ";
  }

  if($gender != "") {
    $sql .= "patient_gender = '$gender', ";
  }

  if($country != "") {
    $sql .= "patient_country = '$country', ";
  }

  if($phone != "") {
    $sql .= "patient_phone = '$phone', ";
  }

  if($height != "") {
    $sql .= "patient_height = '$height', ";
  }

  if($weight != "") {
    $sql .= "patient_weight = '$weight', ";
  }

  if($blood != "") {
    $sql .= "patient_blood = '$blood', ";
  }


  $sql = rtrim($sql, ", ");


  $sql .= " WHERE patient_id=$patient_id";



  // $sql = "UPDATE patient SET patient_username='$username', patient_email='$email', patient_password='$password',patient_birthdate='$birthdate', patient_bio='$bio', patient_gender='$gender', patient_country ='$country',patient_phone = '$phone',patient_height = '$height' , patient_weight='$weight' , patient_blood = '$blood'  WHERE patient_id=$patient_id";

  if ($conn->query($sql) === TRUE) {
    echo "Patient information updated successfully.";
  } else {
    echo "Error updating patient information: " ;
  }
}

$conn->close();

?>
