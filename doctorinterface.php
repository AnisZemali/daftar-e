<?php

if (!isset($_SESSION)) {
    session_start();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daftar-e";

$conn = new mysqli($servername, $username, $password, $dbname);


// Prepare the SQL statement with a placeholder
$sql = "SELECT  doctor_username, doctor_email, doctor_address FROM doctor WHERE doctor_id = ?";

// Bind a value to the placeholder using mysqli_stmt_bind_param()
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_SESSION['doctor_id']);
$stmt->execute();

// Fetch the result as an associative array
$doctor = $stmt->get_result()->fetch_assoc();


?>

<!DOCTYPE html>
<html>

<head>
    <title>DAFTAR-E</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.min.css">


    <link rel="stylesheet" type="text/css" href="css/DocDashboard.css">
    <style>
        #button {
            background-color: #56baed;
            border: none;
            color: white;
            padding: 15px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 80px 50px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="container navbar-container">
            <a href="DocDashboard.php">
                <img class="logo" src="img\logo.png" width="150" height="88" alt="DAFTAR-E logo">
            </a>
            <ul class="navbar-list">
                <li class="active navbar-list__item"><a class="navbar-list__item-link" href="#">Home</a></li>
                <li class="navbar-list__item"><a class="navbar-list__item-link" href="#">About</a></li>
                <li class="navbar-list__item"><a class="navbar-list__item-link" href="#">services</a></li>
                <li class="navbar-list__item"><a class="navbar-list__item-link" href="includes/logout.php">Log out</a>
                </li>
                <a href="doctor_profile.php">
                    <img src="img/account.png" class="navbar-list__item" width="30" height="30">
                </a>
            </ul>
        </div><!-- End of container -->
    </div><!-- End of navbar -->

    <div class="container emp-profile" style="height: 600px;">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <div class="upload-image">
                        <div class="upload-image-preview">
                            <div class="profile-head">
                                <h5 style="line-height: 2em;">Dr.
                                    <?php echo $doctor["doctor_username"]; ?>
                                </h5>
                                <h6 style="line-height: 2.5em;">
                                    <!-- <?php echo $doctor_speciality ?> -->
                                </h6>
                                <img src="img/registerdoctor-Image.png" style="margin-buttom:50px">
                                <!-- <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($login_session_Image) . '"/>'; ?>  -->
                                <h6 style="line-height: 2.5em;color:black; margin-top:20px">
                                    <?php echo $doctor["doctor_email"]; ?>
                                </h6>
                                <h6 style="line-height: 2.5em; color:black">
                                    <?php echo $doctor["doctor_address"]; ?>
                                </h6>
                                <!-- <a href=""><input type="button" value="Edit Profile" id="button" /> </a> -->



                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-6 listofpatients">
                <div class="profile-head">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="tabsColor nav-item">
                            <a class="nav-link hover active" id="home-tab" aria-controls="home"
                                aria-selected="true">LIST OF PATIENTS</a>
                        </li>
                    </ul>
                    <div class="search_wrap search_wrap_3">
                        <div class="search_box">
                            <input type="text" class="input" placeholder="search name">
                            <div class="btn btn_common">
                                <img src="img/search.png" style=""></img>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!--  <div class="col-md-2">
                        <a href="register_clinic.php"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Add Clinic"/></a>
                    </div>
                    -->
        </div>
        <div class="row">
            <div class="col-md-4 d-flex justify-content-start">

            </div>
            <div class="col-md-8">

                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <!--   <div class="content"> -->

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card" style="margin-top:-70px ">
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover">
                                                <thead>
                                                    <th>Patient Name</th>
                                                    <th>Date</th>
                                                    <!-- <th>Location</th> -->

                                                    <th>Diagnosis</th>

                                                    <th>Uploads</th>
                                                </thead>


                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    
    <div class="footer">
        <div class="container footer-container">
            <div class="footer-left">
                <a class="footer-logo__link" href="index.html"><img class="footer-logo" src="img/logo.PNG"
                        alt="White logo" width="159" height="41"></a>
                <p class="footer-left__text">DAFTAR-E provides progressive, and affordable healthcare, accessible on
                    mobile and online for everyone</p>
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>
<?php


// echo "hi";
$errors = array();
if (isset($_POST['Story'])) {
    # code...
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["subject"])) {
            $subject = $_POST["subject"];
            echo $subject;

        } else {
            $errors['subject'] = "Only letters and white space allowed";

        }
        if (isset($_POST["description"])) {
            $description = $_POST["description"];
            echo $description;
        } else {
            $errors['description'] = "Only letters and white space allowed";

        }

        if (!$errors) {

            $sql = "INSERT INTO remedies ( Subject , Description, D_Id )
            VALUES ('" . $subject . "', '" . $description . "', '" . $login_session_Id . "')";
            $result = mysqli_query($con, $sql);
            // include "welcome.php";
            // <!-- header("location:homepage.html"); -->


        }

    }
}

?>
<!--                               
                                    
require "../includes/db_connect.php";
include_once '../includes/functions.php';

$query = "SELECT date,location, AES_DECRYPT(location, $SECRET),responsive_doctor, AES_DECRYPT(responsive_doctor, $SECRET),issue_description, AES_DECRYPT(issue_description, $SECRET),diagnosis, AES_DECRYPT(diagnosis, $SECRET),prescribed_solution,AES_DECRYPT(prescribed_solution, $SECRET) FROM medicalrecords"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);					
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                        echo "<tbody>";
                                        echo "<tr>";
                                        echo "<td>" . XSSdisarm($row['date']) . "</td>";
                                        echo "<td>" . XSSdisarm($row["AES_DECRYPT(location, $SECRET)"]) . "</td>";
                                        echo "<td>" . XSSdisarm($row["AES_DECRYPT(responsive_doctor, $SECRET)"]) . "</td>";
                                        echo "<td>" . XSSdisarm($row["AES_DECRYPT(issue_description, $SECRET)"]) . "</td>";
                                        echo "<td>" . XSSdisarm($row["AES_DECRYPT(diagnosis, $SECRET)"]) . "</td>";
                                        echo "<td>" . XSSdisarm($row["AES_DECRYPT(prescribed_solution, $SECRET)"]) . "</td>";
                                        echo "</tr>";
                                        echo "</tbody>";
                                        }
mysqli_close ($connection); //Make sure to close out the database connection
?>										
      -->