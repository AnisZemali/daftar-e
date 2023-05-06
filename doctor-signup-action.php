<?php

/* 
 * Copyright (C) 2013 peter
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include_once 'db_connection.php';


$error_msg = "";

if (isset($_POST['username'], $_POST['email'], $_POST['address'], $_POST['speciality'],  $_POST['password'])) {
    // Sanitize and validate the data passed in
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $speciality = $_POST['speciality'];
    $password = $_POST['password'];

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
    
  
    		
	$password=password_hash($password, PASSWORD_DEFAULT);

    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
    
    $prep_stmt = "SELECT doctor_id FROM doctor WHERE doctor_email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
    
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">A user with this email address already exists.</p>';
        }
    } else {
        $error_msg .= '<p class="error">Database error</p>';
    }
    
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.

        // Insert the new user into the database 
       
        $stmt = mysqli_prepare($mysqli, "INSERT INTO doctor (doctor_username, doctor_email, doctor_address, doctor_password, doctor_speciality) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sssss',$username, $email, $address, $password, $speciality);

if (mysqli_stmt_execute($stmt)) {
    echo "hi";
    die;
} else {
    echo "Error: " . mysqli_error($mysqli);
}
 }
       
