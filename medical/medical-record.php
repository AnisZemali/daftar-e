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
 include_once '../includes/functions.php';
 include_once '../includes/db_connect.php';



 // CSRF Protection
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}


sec_session_start();







?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Daftar-E</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="../assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.0/css/all.css">


	
</head>
<body>
<?php if (login_check($mysqli) == true) : ?>

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
    <div class="record">
		<nav class="navbar" style=" margin-bottom:80px;">
            <div class="container-fluid">
                <div class="navbar-header" style="display:flex;  " >
                    
                    <a class="navbar-brand" href="#"><img src="logo.png" margin-top= 0px width= 90px height=50px ></a>
                    <div class="logo" style="padding-top: 26px; margin-left:20px;">
                    <a href="#" class="my-5" style="font-size: 30px;  margin-bottom:30px; font-weight:40px; color:black;">
                    Hello , <?php echo htmlentities($_SESSION['username']); ?> !<br>
                    </a>
                    </div>
                </div>
                <div class="navi">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel" style="color: #458ff6;"></i>
								<p  style="color: #458ff6;">Statistics</p>
                            </a>
                        </li>
                        <li class="dropdown ">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell" style="color: #458ff6;"></i>
                                    <p class="notification">5</p>
									<p style="color: #458ff6;">Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="../includes/logout.php?csrf=$_SESSION['csrf_token']">
								<i class="ti-settings"  style="color: #458ff6;"></i>
								<p  style="color: #458ff6;">logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
       

        <div class="content" style="margin-right: 20px; margin-left:20px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="border:1px solid black;">
                            <div class="header" style="background-color:#66a6ff; height:60px;">
                                <h4  style="margin-top:0px; font-xeight:20px;" >New Record</h4>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                    	<th>Doctor Name</th>
										<th>Diagnosis</th>
										<th>Upload</th>
                                    </thead>
                                    <tbody>							
										<tr>
										<form action="../includes/insert-medical-record.php?csrf=$_SESSION['csrf_token']" method="post" enctype="multipart/form-data">
											
											<td><input type="text" class="form-control" name="responsive_doctor" placeholder="Doctor name"></td>
											<td><textarea id="note" class="form-control" name="diagnosis" placeholder="Diagnosis"></textarea></td>
											<td><!-- Upload -->
                                            
                                            <input class="btn btn-primary custom-file-input" type="file" name="datei" id="datei" required hidden style="border:2px solid #458ff6; ">
										    
                                            
									        </td>
											<td><button type="submit" class="btn btn-primary" style="border:2px solid #458ff6;"  >Save Record</button></td>

                                            
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
                                <h4 style="margin-top:0px; font-xeight:20px;">Medical Record</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Date</th>
                                    	
                                    	<th>Doctor Name</th>
										<th>Diagnosis</th>
										<th>Upload</th>
                                    </thead>
                                    
                                       
<?php

require "../includes/db_connect.php";
include_once '../includes/functions.php';





// Opens directory
$myDirectory=opendir("../uploads/");
        
// Gets each entry
while($entryName=readdir($myDirectory)) {
  $dirArray[]=$entryName;
}


// Closes directory
closedir($myDirectory);

// Counts elements in array
$indexCount=count($dirArray);
        
// Sorts files
sort($dirArray);

// Loops through the array of files
for($index=0; $index < $indexCount; $index++) {

  if($_SERVER['QUERY_STRING']=="hidden")
  {$hide="";
  $ahref="./";
  $atext="Hide";}
  else
  {$hide=".";
  $ahref="./?hidden";
  $atext="Show";}
  if(substr("$dirArray[$index]", 0, 1) != $hide) {
      
  // Gets File Names
  $name=$dirArray[$index];
  $namehref=$dirArray[$index];
  
  // Gets Extensions 
  // old/outdated   $extn=findexts($dirArray[$index]); 
  $extn=pathinfo($dirArray[$index]);

  // Prettifies File Types, add more to suit your needs.
  switch ($extn['extension']){
    case "png": $extn="PNG Image"; break;
    case "jpg": $extn="JPEG Image"; break;
    case "svg": $extn="SVG Image"; break;
    case "gif": $extn="GIF Image"; break;
    case "ico": $extn="Windows Icon"; break;
    
    case "txt": $extn="Text File"; break;
    case "log": $extn="Log File"; break;
    case "htm": $extn="HTML File"; break;
    case "php": $extn="PHP Script"; break;
    case "js": $extn="Javascript"; break;
    case "css": $extn="Stylesheet"; break;
    case "pdf": $extn="PDF Document"; break;
    
    case "zip": $extn="ZIP Archive"; break;
    case "bak": $extn="Backup File"; break;
    
    default: $extn=strtoupper($extn)." File"; break;
  }


  // Separates directories
  if(is_dir($dirArray[$index])) {
    $extn="&lt;Directory&gt;"; 
    $size="&lt;Directory&gt;"; 
    $class="dir";
  } else {
    $class="file";
  }

  // Cleans up . and .. directories 
  if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;";}
  if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
  

}
  

}



$query = "SELECT date, responsive_doctor, AES_DECRYPT(responsive_doctor, $SECRET), diagnosis, AES_DECRYPT(diagnosis, $SECRET),upload_files ,AES_DECRYPT(upload_files, $SECRET) FROM medicalrecords " ; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);					
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
										echo "<tbody>";
										echo "<tr>";
                                        echo "<td>" . XSSdisarm($row['date']) . "</td>";
				
										echo "<td>" . XSSdisarm($row["AES_DECRYPT(responsive_doctor, $SECRET)"]) . "</td>";
										
										echo "<td>" . XSSdisarm($row["AES_DECRYPT(diagnosis, $SECRET)"]) . "</td>";
										echo "<td><a href='../uploads/".$row["upload_files"]."'>" .$row["upload_files"]. "</a></td>";
										echo "</tr>";
										echo "</tbody>";
										}
mysqli_close ($connection); //Make sure to close out the database connection
?>										
                                        
                                    
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
		
        <footer class="footer">

        </footer>

    </div>
</div>
        
        <?php endif; ?>
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
