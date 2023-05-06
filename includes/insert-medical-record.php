<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('db_connect.php');

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security

$responsive_doctor = $mysqli->real_escape_string($_REQUEST['responsive_doctor']);
$diagnosis = $mysqli->real_escape_string($_REQUEST['diagnosis']);







//FOR UPLOAD FILES
//$upload_files = $mysqli->real_escape_string($_REQUEST['upload_files']);

$upload_folder = '../uploads/'; //The Upload directory
$filename = pathinfo($_FILES['datei']['name'], PATHINFO_FILENAME);
$extension = strtolower(pathinfo($_FILES['datei']['name'], PATHINFO_EXTENSION));
$upload_files = $_FILES['datei']['name'];
 
 
//Check file extension
$allowed_extensions = array('png', 'jpg', 'jpeg', 'gif', 'pdf');
if(!in_array($extension, $allowed_extensions)) {
 die("not allowed file extension. Only PNG, JPG, JPEG and GIF are allowed");
}
 
//Check file size
$max_size = 5000*1024; //500 KB
if($_FILES['datei']['size'] > $max_size) {
 die("Please dont upload files larger than 500kb");
}
 

 
//Path to upload location
$new_path = $upload_folder.$filename.'.'.$extension;
 
//New file name, if file already exist
 $id = 1;
if(file_exists($new_path)) { //If file exists, add number to the file name
 do {
 $new_path = $upload_folder.$filename.'_'.$id.'.'.$extension;
 $id++;
 } while(file_exists($new_path));
}
 
//If everything fine, move file to new location
move_uploaded_file($_FILES['datei']['tmp_name'], $new_path);
echo 'Image uploaded successfully to: <a href="'.$new_path.'">'.$new_path.'</a>';




//











// Attempt insert query execution
$sql = "INSERT INTO medicalrecords ( responsive_doctor,  diagnosis, upload_files , speciality_id) VALUES ( AES_ENCRYPT('$responsive_doctor','$SECRET'),  AES_ENCRYPT('$diagnosis','$SECRET'), '$upload_files', '1')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header('Location: ../medical/medical-record.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>