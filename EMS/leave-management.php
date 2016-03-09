<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMS | Dashborard</title>
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
                        <li><a href="my-profile.php">My Profile</a></li>
                        <li><a href="add-employee.php">Add Employee</a></li>
                        <li><a href="employee-status.php">Employee Status</a></li>
                        <li class="active"><a href="leave-management.php">Leave Management</a></li>
                        <li><a href="working-hour.php">Working H.</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <!--Start leave_management_area-->
    <section id="leave_management_area">
        <div class="container">
            <div class="row margin25pxT">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <h3>Remain Leave</h3>
                        <div class="input-group">
                            <input type="text" name="" class="form-control" id="" placeholder="Employee ID"/>
                            <span class="input-group-btn"><button type="submit" class="btn btn-default">Search</button></span>
                        </div>
                        <div class="form-group">
                            <label for="leaveValue"></label>
                            <input type="text" class="form-control" value="23" id="leaveValue">
                        </div>
                        <div class="form-group">
                            <label for="submit"></label>
                            <button type="submit" id="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End leave_management_area-->

    <!-- Start footer_area-->
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
    <!-- End footer_area -->

    <!-- Strat modal section -->
    <!-- Large modal -->
    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#01">Large modal</button>-->

    <div class="modal fade" id="01" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">ABC</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="team">
                                <div class="img"><img src="images/placeholder.png" alt="Team"></div>
                                <div class="team-info">
                                    <h4><a href="#">Employee name</a></h4>
                                    <h5>Designation</h5>
                                    <a href="">Email address</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-single-info">
                                <p><b>Name </b>: ABC </p>
                                <p><b>Employee ID </b>: 01 </p>
                                <p><b>Designation </b>: Employee </p>
                                <p><b>Gender </b>: Male</p>
                                <p><b>Email </b>: abc@ems.com </p>
                                <p><b>Password </b>: ******** </p>
                                <p><b>Address </b>: Dhaka </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal section -->


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>