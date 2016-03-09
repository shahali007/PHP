<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMS | After Save</title>
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
                        <li class="active"><a href="my-profile.php">My Profile</a></li>
                        <li><a href="add-employee.php">Add Employee</a></li>
                        <li><a href="employee-status.php">Employee Status</a></li>
                        <li><a href="leave-management.php">Leave Management</a></li>
                        <li><a href="working-hour.php">Working H.</a></li>
                        <li><a href="login.php">Logout</a></li>
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
                            <h4><a href="#">Employee name</a></h4>
                            <h5>Designation</h5>
                            <a href="mailto:coderstrust@ems.com">Email address</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h4>Hi, <b>(Employee name)</b> </h4>
                    <p> Thank you for coming office</p><br>
                    <p>Your enter time is: <b>(time)</b></p>
                    <p>Please Press the <a href="">logout</a> to exit from the system..</p><br>
                    <b class="text-muted">Have a good day.!!</b>
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

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>