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
                        <li class="active"><a href="add-employee.php">Add Employee</a></li>
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

    <!--Start dahboard_table-->
    <section id="dahboard_table">
        <div class="container">
            <div class="row margin25pxT">
                <div class="col-md-3 col-md-offset-2">
                    <p>
                        <b>ABC</b>,
                        <b>Employee ID</b> 01
                    </p>
                </div>
                <form action="" method="post">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input type="date" id="" class="form-control" placeholder="from">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input type="date" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="submit" style="display:inline;"></label>
                            <button type="submit" id="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered text-center">
                            <tr class="active">
                                <th style="text-align: center; width: 100px;">Date</th>
                                <th style="text-align: center; width: 100px;">Hour</th>
                                <th style="text-align: center; width: 100px;">Over Time</th>
                                <th style="text-align: center; width: 100px;">Less Time</th>
                                <th style="text-align: center; width: 250px;">Reason</th>
                            </tr>
                            <tr>
                                <td>04/02/2016</td>
                                <td>50 hours</td>
                                <td>5 hours</td>
                                <td>0 hour</td>
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td>05/02/2016</td>
                                <td>40 hours</td>
                                <td>3 hours</td>
                                <td>2 hour</td>
                                <td>Late for late</td>
                            </tr>
                        </table>
                        <h4 class="text-center">Total Over Time 3 hours</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End dahboard_table-->

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

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>