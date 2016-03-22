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
                        <li><a href="dashboard.php">Attendance</a></li>
                        <li class="active"><a href="view.php">View</a></li>
                        <li><a href="add-employee.php">Add Employee</a></li>
                        <li><a href="employee-status.php">Employee Status</a></li>
                        <li><a href="leave-management.php">Leave Management</a></li>
                        <li><a href="working-hour.php">Working H.</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <br><br><br>
    <div class="container view">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="team">
                    <div class="img"><img src="images/placeholder.png" alt="Team"></div>
                    <div class="team-info">
                        <h4></h4>
                        <h5></h5>
                        <a href="mailto:"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-single-info">
                    <p><b>Name </b> : </p>
                    <p><b>Employee ID </b>: </p>
                    <p><b>Designation </b>: </p>
                    <p><b>Gender </b>: </p>
                    <p><b>Email </b>: </p>
                    <p><b>Address </b>: </p>
                </div>
            </div>
            <div class="col-sm-3">
                <a href="dashboard.php" class="btn btn-primary btn-lg pull-right">Back</a>
            </div>
        </div>
    </div><!-- /view -->

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

    


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
	<script type="text/javascript">
		$(window).load(function(){$('.bs-example-modal-sm').modal('show');setTimeout(function(){$('.bs-example-modal-sm').modal('hide');}, 5000);});
	</script>
</body>
</html>