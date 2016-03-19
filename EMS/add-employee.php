<?php
session_start();
//echo $_SESSION['login'];
if($_SESSION['login'] !="True"){
    $string = ' Sorry! You have to login first to view this page. ';
    echo "<script>alert(\"$string\")</script>";
    echo("<script>location.href='login.php'</script>");

}
else{
    $e_id = $_SESSION['e_id'];

    include('pdo_connection.php');
    include('database_config.php');
    $db_user =$database_user;
    $db_pass =$databse_pass;
    $db_name=$database_name;
    $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
}
if(isset($_POST['add']))
{
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $FatherName = $_POST['f_name'];
    $MotherName = $_POST['m_name'];
    $Email = $_POST['email'];
    $Pass = $_POST['password'];
    $Gender = $_POST['gender'];
    $Address= $_POST['address'];
    $Image= $_POST['image'];
    $NID= $_POST['Nid'];
    $Contact= $_POST['contact'];
    $DOB= $_POST['dob'];
    $Blood= $_POST['blood'];
    $UserRole= $_POST['userRole'];

    $Department= $_POST['department'];
    $Designation= $_POST['designation'];
    $Status= $_POST['status'];
    $Salary= $_POST['salary'];



    $sql = "INSERT INTO employee_details(e_id,name,email,password,user_role,gender,date_of_birth,blood_group,address,contact,image,NID,father_name,mother_name) VALUES ('$Id','$Name','$Email','$Pass','$UserRole','$Gender','$DOB','$Blood','$Address','$Contact','$Image','$NID','$FatherName','$MotherName')";

    $sql2 = "INSERT INTO employee_status(e_id,department,designation,status,salary) VALUES ('$Id',  '$Department','$Designation','$Status','$Salary')";

    //$data = $dbcon->query($sql);


    if ($dbcon->query($sql) && $dbcon->query($sql2))
    {

        echo("<script>location.href='add-employee.php'</script>");
    }
    else {
        $string = ' Sorry! Try again.\n';
        echo "<script>alert(\"$string\")</script>";
        echo("<script>location.href='login.php'</script>");
    }
}
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMS | Add Employee</title>
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
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <!-- Start add_employee-->
    <section id="add_employee">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <h3 class="text-center"><i class="fa fa-user-plus"></i> Add Employee</h3>
                        <hr>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="id" type="text" id="" class="form-control" placeholder="Employee ID">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="name" type="text" id="" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="f_name" type="text" id="" class="form-control" placeholder="Father Name">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="m_name" type="text" id="" class="form-control" placeholder="Mother Name">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="email" type="email" id="" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="password" type="password" id="" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only">Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option value="">-- Gender --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="designation" type="text" id="" class="form-control" placeholder="Designation">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <select name="department" id="" class="form-control">
                                <option value="">-- Department --</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Accounting">Accounting</option>
                                <option value="HRM">HRM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="salary" type="text" id="" class="form-control" placeholder="Salary">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <select name="status" id="" class="form-control">
                                <option value="">-- Status --</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <img src="images/placeholder.png" alt="Profile-image" width="80px" height="80px">
                            <input name="image" type="file" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="address" type="text" id="" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="contact" type="text" id="" class="form-control" placeholder="Contact">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="Nid" type="text" id="" class="form-control" placeholder="NID">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="dob" type="date" id="" class="form-control" placeholder="Date of birth">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input name="blood" type="text" id="" class="form-control" placeholder="Blood group">
                        </div>
                        <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <select name="userRole" id="" class="form-control">
                                <option value="">-- User role --</option>
                                <option value="Admin">Admin</option>
                                <option value="Employee">Employee</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="submit"></label>
                            <button name="add" type="submit" id="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End add_employee-->

    <!-- Start footer-->
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
    <!-- End footer-->

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