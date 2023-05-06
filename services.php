<?php 
if (!isset($_SESSION)) { session_start(); }
// print_r($_SESSION);
// exit;

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Our services</title>
	<!-- <link rel="stylesheet" href="css/normalize.css"> -->
	<!-- <link rel="stylesheet" href="css/styles.css"> -->
	<link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <div class="navbar">
        <div class="container navbar-container">
            <a href="index_patient.html">
                <img class="logo" src="logo.png" width="160" height="80" alt="Trafalgar logo">
            </a>
            <ul class="navbar-list">
                <li class="active navbar-list__item"><a class="navbar-list__item-link" href="index_patient.php">Home</a></li>
                <li class="navbar-list__item"><a class="navbar-list__item-link" href="#">About</a></li>
                <li class="navbar-list__item"><a class="navbar-list__item-link" href="services.php">services </a></li>
                <a href="profile.php">
                    <img src="img/account.png" class="navbar-list__item" width="30" height="30">
                </a> 
            </ul>
        </div><!-- End of container -->
    </div><!-- End of navbar -->
    <div class="our-services-section">
		
        <div class="our-services-section-wrapper">
            <h3 class="our-services-section__heading">Our services</h3>
            <hr class="key-line">
            <p class="our-services-section__text">At our medical website, we offer a range of high-quality services to suit your health needs. Our highly qualified doctors are available to consult with you and help you choose the best treatment options. We pride ourselves on providing personalized care tailored to your individual needs.</p>
            <ul class="our-services-section__list">
                <li class="our-services-section__list-item">
                    <img class="oss-list__img" src="img/lupa.svg" alt="Searching icon" width="92" height="90">
                    <a href="record.html">
                    <h3 class="oss-list__heading">Search doctor</h3>
                    </a>
                    <p class="oss-list__text"> Find the right healthcare provider for you. </p>
                </li>
                <li class="our-services-section__list-item">
                    <img class="oss-list__img" src="img/record.PNG" alt="Bottle icon" width="100" height="">
                    <a href="record.html">
                    <h3 class="oss-list__heading" >Records</h3>
                    </a>
                    <p class="oss-list__text">Upload and store all your medical files and records in one secure place.</p>
                </li>
                <li class="our-services-section__list-item">
                    <img class="oss-list__img" src="img/card.svg" alt="Card icon" width="67" height="95">
                    <a href="record.html">
                    <h3 class="oss-list__heading">My Appointments</h3>
                    </a>
                    <p class="oss-list__text">Schedule appointments with healthcare providers online.</p>
                </li>
                <li class="our-services-section__list-item">
                    <img class="oss-list__img" src="img/blood-pressure.png" alt="Cardio tab icon" width="100" height="95">
                    <a href="./bloodpressure.php">
                    <h3 class="oss-list__heading">Blood Pressure</h3>
                    </a>
                    <p class="oss-list__text">Information on blood pressure</p>
                </li>
                <li class="our-services-section__list-item">
                    <img class="oss-list__img" src="img/bottle.svg" alt="Emergency kit icon" width="70" height="80">
                    <a href="record.html">
                    <h3 class="oss-list__heading">Drugs</h3>
                    </a>
                    <p class="oss-list__text">Information on different types of medications, their uses and potential side effects.</p>
                </li>
                <li class="our-services-section__list-item">
                    <img class="oss-list__img" src="img/suger.PNG" alt="Medical history icon" width="100" height="100">
                    <a href="sugarlevels.php">
                    <h3 class="oss-list__heading">Sugar Level</h3>
                    </a>
                    <p class="oss-list__text">Information on sugar level</p>
                </li>
            </ul>
        </div>
    </div>
        <div class="footer">
            <div class="container footer-container">
                <div class="footer-left">
                    <a class="footer-logo__link" href="index.html"><img class="footer-logo" src="img/daftar-e-low-resolution-logo-color-on-transparent-background.png" alt="White logo" width="150" height="80"></a>
                    <p class="footer-left__text">DAFTAR-E provides progressive, and affordable healthcare, accessible on mobile and online for everyone</p>
                    <p class="footer-left__copy">©DAFTAR-E PTY LTD 2023. All rights reserved</p>
                </div>
                
                <div class="footer-col">
                    <h3 class="footer-col__heading">Company</h3>
                    <ul class="footer-col__list">
                        <li class="footer-col__list-item"><a class="footer-col__list-link" href="index.html">Home</a></li>
                        <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">About Us</a></li>
                        <li class="footer-col__list-item"><a class="footer-col__list-link" href="services.html">services</a></li>
                        <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Register</a></li>
                    </ul>
                </div>
    
                
                <div class="footer-col">
                    <h3 class="footer-col__heading">Help</h3>
                    <ul class="footer-col__list">
                        <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Help center</a></li>
                        <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Contact support</a></li>
                        <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Instructions</a></li>
                        <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">How it works</a></li>
                    </ul>
                </div>
    
            </div><!-- End of container -->
        </div><!-- End of footer -->
    </body>
    </html>