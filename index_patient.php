<?php
if (!isset($_SESSION)) { session_start(); }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftar-e";

$conn = new mysqli($servername, $username, $password, $dbname);




$sql = "SELECT * from patient  WHERE patient_id =" . $_SESSION['patient_id'];
$patient = $conn->query($sql)->fetch_assoc();

// $conn->close();


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DAFTAR-E</title>
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
				<li class="navbar-list__item"><a class="navbar-list__item-link" href="services.php">services</a></li>
				<a href="profile.php">
                    <img src="img/account.png" class="navbar-list__item" width="30" height="30">
                </a>
			</ul>
		</div><!-- End of container -->
	</div><!-- End of navbar -->


	<div class="main-body">
		<div class="virtual-healthcare-section-wrapper">
			<div class="container main-body-container">
				<div class="virtual-healthcare-section">
					<div class="virtual-healthcare-section__left">
						<h1 class="virtual-healthcare-section__heading">Welcome <?php echo $patient["patient_username"]; ?> in your health care provider</h1>
						<p class="virtual-healthcare-section__text">DAFTAR-E provides progressive, and affordable healthcare, accessible on mobile and online for everyone</p>
						<!-- <a class="virtual-healthcare-section__button button-blue" href="role.php">Register</a> -->
					</div>
					<img class="virtual-healthcare-section__img" src="img/trafalgar-app.png" srcset="img/trafalgar-header-illustration-1.png 1x, img/trafalgar-header-illustration-1.jpg 2x" width="693" height="598" alt="Doctor and patient are talking to each other.">
				</div><!-- End of virtual-healthcare-section -->
			</div><!-- End of container -->
		</div>

		<div class="container main-body-container">
			<div class="leading-helthcare">
				<img class="leading-helthcare__img" src="img/labaratory-injection.png" srcset="img/labaratory-injection.png 1x, img/labaratory-injection@2x.png 2x" alt="Labaratory and injection" width="650" height="477">
				<div class="leading-healthcare-right">
					<h2 class="leading-helthcare__heading">About Us</h2>
					<hr class="key-line stick-left">
					<p class="leading-helthcare__text">DAFTAR-E provides progressive, and affordable healthcare, accessible on mobile and online for everyone. To us, it’s not just work. We take pride in the solutions we deliver</p>
					<a class="leading-helthcare__button button-white" href="#">Learn more</a>
				</div><!-- End of leading-healthcare-right -->
			</div><!-- End of leading-helthcare -->

		<div class="our-services-section">
		
			<div class="our-services-section-wrapper">
				<h2 class="our-services-section__heading">Our services</h2>
				<hr class="key-line">
				<p class="our-services-section__text">At our medical website, we offer a range of high-quality services to suit your health needs. Our highly qualified doctors are available to consult with you and help you choose the best treatment options. We pride ourselves on providing personalized care tailored to your individual needs.</p>
				<ul class="our-services-section__list">
					<li class="our-services-section__list-item">
						<img class="oss-list__img" src="img/lupa.svg" alt="Searching icon" width="92" height="90">
						<h3 class="oss-list__heading">Search doctor</h3>
						<p class="oss-list__text"> Find the right healthcare provider for you. </p>
					</li>
					<li class="our-services-section__list-item">
						<img class="oss-list__img" src="img/record.PNG" alt="Bottle icon" width="100" height="">
						<h3 class="oss-list__heading">Records</h3>
						<p class="oss-list__text">Upload and store all your medical files and records in one secure place.</p>
					</li>
					<li class="our-services-section__list-item">
						<img class="oss-list__img" src="img/card.svg" alt="Card icon" width="67" height="95">
						<h3 class="oss-list__heading">Book Appointment</h3>
						<p class="oss-list__text">Schedule appointments with healthcare providers online.</p>
					</li>
					<li class="our-services-section__list-item">
						<img class="oss-list__img" src="img/blood-pressure.png" alt="Cardio tab icon" width="100" height="95">
						<h3 class="oss-list__heading">Blood Pressure</h3>
						<p class="oss-list__text">Information on blood pressure</p>
					</li>
					<li class="our-services-section__list-item">
						<img class="oss-list__img" src="img/bottle.svg" alt="Emergency kit icon" width="70" height="80">
						<h3 class="oss-list__heading">Drugs</h3>
						<p class="oss-list__text">Information on different types of medications, their uses and potential side effects.</p>
					</li>
					<li class="our-services-section__list-item">
						<img class="oss-list__img" src="img/suger.PNG" alt="Medical history icon" width="100" height="100">
						<h3 class="oss-list__heading">Sugar Level</h3>
						<p class="oss-list__text">Information on sugar level</p>
					</li>
				</ul>
				<div class="button-wrapper">
					<a class="our-services-section__button button-white" href="#">Learn more</a>
				</div>
			</div>
		</div><!-- End of our-services-section -->
		
		

			
			<div class="commnet-box">
				<div class="comment">
					<h2 class="comment-head__heading">What our customer are saying</h2>
					<hr class="key-white-line">
					<div class="comment-bottom">
						<img class="comment__img" src="img/edward.jpg" srcset="img/edward.jpg 1x, img/edward.jpg 2x" alt="Edward Newgate" width="141" height="141">
						<div class="person">
							<p class="comment__person">Edward Newgate</p>
							<p class="comment__business">Founder Circle</p>
						</div>
						<blockquote class="comment__saying">“Our dedicated patient engagement app and web portal allow you to access information instantaneously (no tedeous form, long calls, or administrative hassle) and securely”</blockquote>
					</div><!-- End of commnet-bottom -->
				</div><!-- End of comment -->
				
				<div class="arrows">
					<ol class="arrows-list">
						<li class="arrows-list__item">
							<button class="arrow-button" type="button">
								<img class="arrows__left" src="img/left-arrow.svg" width="31" height="20" alt="left icon">
							</button>
						</li>
						<li class="arrows-list__item"><button class="round-btn" type="button"></button></li>
						<li class="arrows-list__item"><button class="round-btn" type="button"></button></li>
						<li class="arrows-list__item"><button class="round-btn" type="button"></button></li>
						<li class="arrows-list__item"><button class="round-btn" type="button"></button></li>
						<li class="arrows-list__item">
							<button class="arrow-button" type="button">
								<img class="arrows__right" src="img/right-arrow.svg" width="31" height="20" alt="right icon">
							</button>
						</li>
					</ol>	
				</div><!-- End of arrows -->
			</div><!-- End of comment-box -->
			
			

		</div><!-- End of container -->
	</div><!-- End of main-body -->
	

	<div class="footer">
		<div class="container footer-container">
			<div class="footer-left">
				<a class="footer-logo__link" href="index.html"><img class="footer-logo" src="img/logo.png" alt="White logo" width="150" height="80"></a>
				<p class="footer-left__text">DAFTAR-E provides progressive, and affordable healthcare, accessible on mobile and online for everyone</p>
				<p class="footer-left__copy">©DAFTAR-E PTY LTD 2023. All rights reserved</p>
			</div>
			
			<div class="footer-col">
				<h3 class="footer-col__heading">Company</h3>
				<ul class="footer-col__list">
					<li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Home</a></li>
					<li class="footer-col__list-item"><a class="footer-col__list-link" href="#">About Us</a></li>
					<li class="footer-col__list-item"><a class="footer-col__list-link" href="#">services</a></li>
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