<?php
session_start();
//echo $_SESSION['login'];
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if($_SESSION['login'] !="True"){
    $string = ' Sorry! You have to login first to view this page. ';
    echo "<script>alert(\"$string\")</script>";
    echo("<script>location.href='login.php'</script>");
}

else{
    $e_id = $_SESSION['e_id'];
//    echo $e_id;
    $Sql = "SELECT * FROM employee_details,employee_status,working_hour WHERE employee_details.e_id = '$e_id' AND employee_status.e_id = '$e_id' AND working_hour.e_id = '$e_id' ";

    $Sqldata = $dbcon->query($Sql);
    $RowData = $Sqldata->fetch(PDO::FETCH_ASSOC);

    $UserID = $RowData['e_id'];
//    echo $UserID;
    $UserName = $RowData['name'];
    $UserDesignation = $RowData['designation'];
    $UserGender = $RowData['gender'];
    $UserEmail = $RowData['email'];
    $UserAddress = $RowData['address'];
    $UserRole = $RowData['user_role'];
    $UserInTime = $RowData['check_in_time'];
}


?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMS | My Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- start header_area -->
    <header>
        <div class="navbar navbar-static-top navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">EMS</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#MyNavigation">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="MyNavigation">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if($UserRole == "Admin"){
                                echo '
                                    <li><a href="dashboard.php">Attendance</a></li>
                                    <li class="active"><a href="my-profile.php">My Profile</a></li>
                                    <li><a href="add-employee.php">Add Employee</a></li>
                                    <li><a href="employee-status.php">Employee Status</a></li>
                                    <li><a href="leave-management.php">Leave Management</a></li>
                                    <li><a href="working-hour.php">Working H.</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                ';
                            }

                            elseif($UserRole == "Employee"){
                                echo '
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li class="active"><a href="my-profile.php">My profile</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                ';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <!-- Start login_form-->
    <section id="after_save_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="team">
                        <div class="img"><img src="images/placeholder.png" alt="Team"></div>
                        <div class="team-info">
                            <h4><?php echo $UserName; ?></h4>
                            <h5><?php echo $UserDesignation;?></h5>
                            <a href="mailto:<?php echo $UserEmail;?>"><?php echo $UserEmail;?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-single-info">
                        <p><b>Name </b> : <?php echo $UserName; ?> </p>
                        <p><b>Employee ID </b>: <?php echo $UserID;?> </p>
                        <p><b>Designation </b>: <?php echo $UserDesignation;?> </p>
                        <p><b>Gender </b>: <?php echo $UserGender;?></p>
                        <p><b>Email </b>: <?php echo $UserEmail;?> </p>
                        <p><b>Address </b>: <?php echo $UserAddress;?> </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <a href="my-profile-edit.php" class="btn btn-primary btn-lg pull-right">EDIT</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End login_form-->

    <!--Start footer_area-->
    <footer>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>All Rights Reserved. &copy;<a href="#">ShahAli Bogdadi.</a>2016</p>
                </div>
            </div>
        </div>
    </footer>
    <!--End footer_area-->

    
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Hello <b><?php echo $UserName; ?></b></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6 text-center">
						<div class="team">
							<div class="img"><img src="images/placeholder.png" alt="Team"></div>
							<div class="team-info">
								
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<p> Thank you for coming office</p><br>
						<p>Your enter time is: <b><?php echo $UserInTime; ?></b></p>
						<p>Please Press the <a href="logout.php"><b>Logout</b></a> to exit from the system..</p><br>
						<b class="text-muted">Have a good day.!!</b>
					</div>
				</div>
			</div>
		  </div>
	  </div>
	</div>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
	<script type="text/javascript">
		$(window).load(function(){$('.bs-example-modal-sm').modal('show');setTimeout(function(){$('.bs-example-modal-sm').modal('hide');}, 5000);});
	</script>
</body>
</html>