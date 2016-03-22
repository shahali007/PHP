<?php
session_start();
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
//    $e_id = $_SESSION['e_id'];
    if($_SESSION['user_role'] !='Admin')
    {
        echo("<script>location.href='my-profile.php'</script>");
    }

    else
    {
        if(isset($_POST['dept_search']))
        {

            $departmets=$_POST['selectDept'];

            if( $departmets == 'All'){
                $filtering="SELECT * FROM employee_status";
                $store=$dbcon->query($filtering);
                $data=$store->fetchAll(PDO::FETCH_ASSOC);
            }
            else{
                $filtering="SELECT * FROM employee_status WHERE Department='$departmets'";
                $store=$dbcon->query($filtering);
                $data=$store->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        else
        {


            $filtering="SELECT * FROM employee_status";
            $store=$dbcon->query($filtering);
            $data=$store->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}

?>

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
                        <li class="active"><a href="dashboard.php">Attendance</a></li>
                        <li><a href="my-profile.php">My Profile</a></li>
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

    <!--Start dahboard_table-->
    <section id="dahboard_table">
        <div class="container">
            <div class="row margin25pxT">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <div class="input-group">
                            <label for="EmpDepSearch" class="sr-only"></label>
                            <select name="selectDept" id="EmpDepSearch" class="form-control">
                                <option value="All">--All Department --</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Accounting">Accounting</option>
                                <option value="HRM">HRM</option>
                            </select>
                            <span class="input-group-btn">
                                <button name="dept_search" class="btn btn-info" type="submit">Search</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered text-center">
                            <tr class="active">
                                <th style="text-align: center; width: 80px;">SL</th>
                                <th style="text-align: center; width: 120px;">E-ID</th>
                                <th style="text-align: center; width: auto;">Department</th>
                                <th style="text-align: center; width: auto;">Designation</th>
                                <th style="text-align: center; width: auto;">Status</th>
                                <th style="text-align: center; width: 120px;">Action</th>
                            </tr>
                            <?php foreach($data as $row){?>
                                <tr>
                                    <td><?php echo $row['sl_no'];?></td>
                                    <td><?php echo $row['e_id'];?></td>
                                    <td><?php echo $row['department'];?></td>
                                    <td><?php echo $row['designation'];?></td>
                                    <td><?php echo $row['status'];?></td>
                                    <td>
                                        <a href="view.php?id=$row['e_id']"  class="btn btn-info btn-sm" ><i class="fa fa-eye-slash"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"></i></a>
                                    </td>
                                </tr>
                            <?php }?>
                        </table>
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