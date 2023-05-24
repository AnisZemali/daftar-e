<?php


// include_once 'includes/register.inc.php';
// include_once 'includes/functions.php';
// include_once './login-patient.php';


if (!isset($_SESSION)) {
    session_start();
}


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


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Daftar-E</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="./assets/css/animate.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="./assets/css/paper-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="./assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="./assets/css/themify-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.0/css/all.css">


    <style>
        body {
            background-color: #2B62AFFF;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;

            font-family: Muli, Arial, sans-serif;
            font-weight: 300;
            font-size: 16px;
            line-height: 28px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: #FFF;
            color: #fff;
            text-align: center;
            line-height: 60px;
            box-shadow: 0px -5px 5px rgba(0, 0, 0, 0.25);

        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            background-color: #333;
            width: 100%;
        }

        .footer-left {
            width: 40%;
        }

        .footer-left__text {
            font-size: 18px;
            line-height: 28px;
        }

        .footer-left__copy {
            font-size: 16px;
            line-height: 28px;
        }

        .footer-col ul {
            margin: 0;
            padding: 0;
        }

        .footer-col__heading {
            font-size: 15px;
            line-height: 30px;
            margin: 0;
            margin-bottom: 1px;
            font-size: 15px;
            line-height: 30px;
            color: #FFF;
        }

        .footer-col__list {
            font-size: 18px;
            line-height: 38px;
            list-style-type: none;
        }

        .footer-col__list-link {
            text-decoration: none;
            color: #FFF;
        }

        .footer-col__list-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <!-- sidebar-wrapper
    <div class="sidebar" data-background-color="white" data-active-color="danger">


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <?php echo htmlentities($_SESSION['username']); ?> <br> Medical Record
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ti-user"></i>
                        <p>Patient</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="ti-view-list-alt"></i>
                        <p>Medical Record</p>
                    </a>
                </li>
                <li>
                    <a href="doctors-list.php">
                        <i class="fas fa-user-md"></i>
                        <p>Doctor List</p>
                    </a>
                </li>				
                <li>
                    <a href="fitness.php">
                        <i class="far fa-heart"></i>
                        <p>Fitness Data</p>
                    </a>
                </li>
                <li>
                    <a href="medicine.php">
                        <i class="fas fa-pills"></i>
                        <p>Medicine</p>
                    </a>
                </li>
                <li>
                    <a href="allergies.php">
                        <i class="fas fa-allergies"></i>
                        <p>Allergies</p>
                    </a>
                </li>				
                <li>
                    <a href="vaccination.php">
                        <i class="fas fa-syringe"></i>
                        <p>Vaccinations</p>
                    </a>
                </li>
                <li>
                    <a href="sleep.php">
                        <i class="fas fa-bed"></i>
                        <p>Sleep Data</p>
                    </a>
                </li>
                <li>
                    <a href="medical-documents.php">
                        <i class="fas fa-file-upload"></i>
                        <p>Medical Documents</p>
                    </a>
                </li>				
            </ul>
        </div>

    </div>
-->
        <div class="record" style="   min-height: 100vh;
">
            <nav class="navbar " style=" margin-bottom:80px; background-color: #FFFFFF; position: fixed;
    top: 0;
    width: 100%;
    background-color: #fff;
    z-index: 1000;
    border-bottom: 1px solid #eee; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                <div class="container-fluid">
                    <div class="navbar-header" style="display:flex;  ">

                        <a class="navbar-brand" href="#"><img src="./img/logo.png" margin-top=0px width=90px
                                height=50px></a>
                        <div class="logo" style="padding-top: 20px; margin-left:20px;">
                            <a href="#" class="my-5"
                                style="font-size: 30px;  margin-bottom:30px; font-weight:40px; color:black;">
                                Hello ,
                                <?php echo htmlentities($_SESSION['username']); ?> !<br>
                            </a>
                        </div>
                    </div>
                    <div class="navi">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                    <i style="color: #458ff6;"></i>
                                    <p style="color: #458ff6;">Home</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i style="color: #458ff6;"></i>
                                    <p style="color: #458ff6;">About</p>
                                    <b></b>
                                </a>

                            </li>
                            <li>
                                <a href="#">
                                    <i style="color: #458ff6;"></i>
                                    <p style="color: #458ff6;">Services</p>
                                    <b></b>
                                </a>

                            </li>
                            <li>
                                <a href="./includes/logout.php">
                                    <i style="color: #458ff6;"></i>
                                    <p style="color: #458ff6;">logout</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


            <div class="content" style="margin-right: 20px; margin-left:20px; margin-top: 99px">
                <div class="container-fluid" style="    display: block;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="border:1px solid black;">
                                <div class="header" style="background-color:#66a6ff; height:60px;">
                                    <h4 style="margin-top:0px; font-weight:20px;">Your Sugar Levels</h4>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <th>Date</th>
                                        <th>Rate</th>



                                    </thead>
                                    <tbody>
                                        <tr>
                                            <form action="./insert_blood_pressure/insert_sugar.php" method="post"
                                                style=" border-radius : 3px">

                                                <td><input type="text" class="form-control" name="date"
                                                        placeholder="Date"></td>
                                                <td><textarea id="note" class="form-control" name="rate"
                                                        placeholder="Rate"></textarea></td>

                                                <td><button type="submit" class="btn btn-primary"
                                                        style="border:2px solid #458ff6;">Save</button></td>
                                                <!-- CSRF Protection -->
                                                <input type="hidden" name="csrf" value="'.$_SESSION['csrf_token'].'">
                                            </form>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!--  </div> -->







                <!--   <div class="content"> -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="border:1px solid black;">
                                <div class="header" style="background-color:#66a6ff; height:60px;">
                                    <h4 style="margin-top:0px; font-weight:20px;">History</h4>

                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Date</th>
                                            <th>Rate</th>

                                        </thead>

                                </div>

                                <?php

                                require "./includes/db_connect.php";
                                include_once './includes/functions.php';

                                include_once './includes/psl-config.php';

                                if (!isset($_SESSION)) {
                                    session_start();
                                }
                                $patientId = $_SESSION['patient_id'];

                                $query = "SELECT sugar_date, sugar_level FROM sugar WHERE patient_id = ?"; //You don't need a ; like you do in SQL
                                $stmt = $connection->prepare($query);
                                $stmt->bind_param("s", $patientId);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td>" . XSSdisarm($row['sugar_date']) . "</td>";
                                    echo "<td>" . XSSdisarm($row['sugar_level']) . "</td>";
                                    echo "</tr>";
                                    echo "</tbody>";
                                }
                                $stmt->close();
                                mysqli_close($connection); //Make sure to close out the database connection
                                ?>

                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="container footer-container">
                    <div class="footer-left">
                        <a class="footer-logo__link" href="index.html"><img class="footer-logo" src="logo.PNG"
                                alt="White logo" width="159" height="41" style=" margin-left: 2px; "></a>
                        <p class="footer-left__text">DAFTAR-E provides progressive, and affordable healthcare,
                            accessible on mobile and online for everyone</p>
                        <p class="footer-left__copy">©DAFTAR-E PTY LTD 2023. All rights reserved</p>
                    </div>

                    <div class="footer-col">
                        <h3 class="footer-col__heading">Company</h3>
                        <ul class="footer-col__list">
                            <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Home</a></li>
                            <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">About Us</a>
                            </li>
                            <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">services</a>
                            </li>
                            <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Register</a>
                            </li>
                        </ul>
                    </div>


                    <div class="footer-col">
                        <h3 class="footer-col__heading">Help</h3>
                        <ul class="footer-col__list">
                            <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Help center</a>
                            </li>
                            <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Contact
                                    support</a></li>
                            <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">Instructions</a>
                            </li>
                            <li class="footer-col__list-item"><a class="footer-col__list-link" href="#">How it works</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- End of container -->
    </div><!-- End of footer -->
    </footer>

    </div>


    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="../index.php">login</a>.
    </p>


</body>

<!--   Core JS Files   -->
<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="../assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="../assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>


<script>
    autosize(document.getElementById("note"));


</script>

</html>