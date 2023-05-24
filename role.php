<?php
/**
 * Copyright (C) 2013 peredur.net
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
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Secure Login: Log In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/styles/main.css" />
        <script type="text/JavaScript" src="assets/js/sha512.js"></script> 
        <script type="text/JavaScript" src="assets/js/forms.js"></script> 
    </head>
<link href="assets/css/login.css" rel="stylesheet" />
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Choose Your Role </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="logo.png" id="icon" alt="User Icon" style="width:200px" />
    </div>

    <!-- Login Form -->

            <a href="signup-doctor.php"><input type="button" 
                   value="Doctor" 
                    /> </a>
            <a href="signup-patient.php"><input type="button" 
                   value="Patient" 
                    /> </a>
        
		

    <!-- Remind Passowrd -->
    

  </div>
</div>
</html>