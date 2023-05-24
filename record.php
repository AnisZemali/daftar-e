<?php 
if (!isset($_SESSION)) { session_start(); }

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Our Specialities </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/upload.css">


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
                <a href="profile.html">
                    <img src="img/account.png" class="navbar-list__item" width="24" height="20">
                </a>
			</ul>
		</div><!-- End of container -->
	</div><!-- End of navbar -->

<!-- partial:index.partial.html -->
<main class="containerr">
    <h3 class="our-services-section__heading">Our Specialities</h3>
  <section class="card">
    <div class="product-image">
      <img src="img/heart.png" alt="OFF-white Red Edition" draggable="false" />
    </div>
    <div class="product-info">
      <h2>Cardiology</h2>
      <p style="color:black">Upload heart-related files</p>
    </div>
    <div class="btn">
      <button class="buy-btn">Upload</button>
      </button>
    </div>
  </section>
  <section class="card">
    <div class="product-image">
      <img src="img/blood-test.png" alt="OFF-white Red Edition" draggable="false" />
    </div>
    <div class="product-info">
      <h2>Blood Test </h2>
      <p style="color:black"> Upload your blood test results</p>
    </div>
    <div class="btn">
      <button class="buy-btn">Upload</button>
      </button>
    </div>
  </section>
  <section class="card">
    <div class="product-image">
      <img src="img/stomach.png" alt="OFF-white Red Edition" draggable="false" />
    </div>
    <div class="product-info">
      <h2>Gastroenterology</h2>
      <p style="color:black"> Upload digestive system-related files</p>
    </div>
    <div class="btn">
      <button class="buy-btn">Upload</button>
      </button>
    </div>
  </section>

  <section class="card">
    <div class="product-image">
      <img src="img/dermis.png" alt="OFF-white Red Edition" draggable="false" />
    </div>
    <div class="product-info">
      <h2>Dermatology </h2>
      <p style="color:black" >Upload skin-related files</p>
    </div>
    <div class="btn">
      <button class="buy-btn">Upload</button>
      </button>
    </div>
  </section>
  <section class="card">
    <div class="product-image">
      <img src="img/artificial-intelligence.png" alt="OFF-white Red Edition" draggable="false" />
    </div>
    <div class="product-info">
      <h2>Neurology</h2>
      <p style="color:black">Upload nervous system-related files</p>
    </div>
    <div class="btn">
      <button class="buy-btn">Upload</button>
      </button>
    </div>
  </section>
  <section class="card">
    <div class="product-image">
      <img src="img/fracture.png" alt="OFF-white Red Edition" draggable="false" />
    </div>
    <div class="product-info">
      <h2>Orthopedics</h2>
      <p style="color:black"> Upload musculoskeletal system-related files</p>
    </div>
    <div class="btn">
      <button class="buy-btn">Upload</button>
      </button>
    </div>
  </section>

  
</main>
<div class="footer">
    <div class="container footer-container">
        <div class="footer-left">
            <a class="footer-logo__link" href="index.html"><img class="footer-logo" src="img/daftar-e-low-resolution-logo-color-on-transparent-background.png"
                    alt="White logo" width="150" height="80"></a><br><br>
            <p class="footer-left__text">DAFTAR-E provides progressive, and affordable healthcare, accessible on
                mobile and online for everyone</p>
            <p class="footer-left__copy">©DAFTAR-E PTY LTD 2023. All rights reserved</p>
        </div>

        <div class="footer-col">
            <h3 class="footer-col__heading">Company</h3>
            <ul class="footer-col__list">
                <li class="footer-col__list-item"><a class="footer-col__list-link" href="index.html">Home</a></li>
                <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">About Us</a></li>
                <li class="footer-col__list-item"><a class="footer-col__list-link" href="services.html">services</a>
                </li>
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
<!-- partial -->
  
</body>
</html>
