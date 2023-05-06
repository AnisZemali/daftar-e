<?php 
if (!isset($_SESSION)) { session_start(); }


include_once("profile_info.php");

$sql = "SELECT * from patient  WHERE patient_id =" . $_SESSION['patient_id'];
$user = $conn->query($sql)->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>account settings </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style.min.css">

</head>

<body>
    <div class="navbar">
        <div class="container navbar-container">
            <a href="index.html">
                <img class="logo" src="img/logo.png" width="160" height="80" alt="Trafalgar logo">
            </a>
            <ul class="navbar-list">
                <li class="active navbar-list__item"><a class="navbar-list__item-link" href="./index_patient.php">Home</a></li>
                <li class="navbar-list__item"><a class="navbar-list__item-link" href="#">About</a></li>
                <li class="navbar-list__item"><a class="navbar-list__item-link" href="./services.php">services </a></li>
                <li class="navbar-list__item"><a class="navbar-list__item-link" href="./includes/logout.php">Logout</a></li>
                <a href="profile.html">
                    <img src="img/account.png" class="navbar-list__item" width="30" height="30">
                </a>
            </ul>
        </div><!-- End of container -->
    </div><!-- End of navbar -->

    <div class="container light-style flex-grow-1 container-p-y">
        <h3>Account Settings</h3>
        <form action="profile_info.php" method="post">
        <fieldset>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list"
                                href="#account-general">General</a>
                            <!-- <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-change-password">Change password</a> -->
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-info">Info</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-connections">Basic Health Information</a>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <div class="card-body media align-items-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                        class="d-block ui-w-80">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput">
                                        </label> &nbsp;
                                        <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                        <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="username" class="form-label"></label>
                                        <input name="username" type="text" class="form-control mb-1"
                                            name="Username" placeholder="<?php echo $user["patient_username"]; ?>">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="Name" placeholder="enter your name...">
                                    </div> -->
                                    <div class="form-group">
                                        <label  for="email" class="form-label"></label>
                                        <input name="email" type="text" class="form-control mb-1" name="email" placeholder="<?php echo $user["patient_email"]; ?>">
                                        <!--<div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div>-->
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label for="password" class="form-label">Current password</label>
                                        <input name="password" type="password" class="form-control" name="password" placeholder="current password..">
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password" class="form-label">New password</label>
                                        <input name="new_password" type="password" class="form-control" placeholder="new password..">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password" class="form-label">Repeat new password</label>
                                        <input name="confirm_password" type="password" class="form-control" name="confirm" placeholder="confirm password">
                                    </div>
                                </div>
                            </div> -->
                            <div class="tab-pane fade" id="account-info">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea name="bio" class="form-control" rows="5" name="bio"
                                            placeholder=<?php echo $user["patient_bio"]; ?>></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="birthdate class="form-label">Birthdate</label>
                                        <input name="birthdate" placeholder="<?php echo $user["patient_birthdate"]; ?>" type="date" class="form-control" name="Birthdate">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select name="gender" aria-placeholder="<?php echo $user["patient_gender"]; ?>" class="custom-select" name="Gender">
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="country" class="form-label">Country</label>
                                        <input name="country" type="text" class="form-control" placeholder="<?php echo $user["patient_country"]; ?>" name="Country">
                                    </div>


                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input name="phone" type="text" class="form-control" placeholder="<?php echo $user["patient_phone"]; ?>" name="Phone">
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="account-connections">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label for="height" class="form-label">Height</label>
                                        <input name="height" placeholder="<?php echo $user["patient_height"]; ?>" type="text" class="form-control" name="Height">
                                    </div>

                                    <div class="form-group">
                                        <label for="weight" class="form-label">Weight</label>
                                        <input name="weight" placeholder="<?php echo $user["patient_weight"]; ?>" type="text" class="form-control" name="Weight">
                                    </div>

                                    <div class="form-group">
                                        <label for="blood" class="form-label">Blood Type</label>
                                        <select name="blood" aria-placeholder="<?php echo $user["patient_blood"]; ?>" class="custom-select" name="Blood">
                                            <option selected="">choose..</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <input type="submit" value="Save Changes" class="btn btn-primary">&nbsp;
                    <!-- <button type="button" class="btn btn-default">Cancel</button> -->
                </div>
                </fildset>
                </form>
            </div>

    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>


    <div class="footer">
        <div class="container footer-container">
            <div class="footer-left">
                <a class="footer-logo__link" href="index.html"><img class="footer-logo" src="img/logo.png"
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
</body>

</html>