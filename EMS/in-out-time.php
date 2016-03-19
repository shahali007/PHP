<?php
session_start();
echo $_SESSION['login'];
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

date_default_timezone_get('Asia/Dhaka');

if(isset($_POST['savetime']))
{
    $TimeInOut = $_POST['timeIn-out'];
    $Message = $_POST['reason'];
    $Date = date('Y-m-d');
    $check = "SELECT count(*) AS count FROM working_hour WHERE e_id='$e_id' AND date='$Date'";
    $store = $dbcon->query($check);

    $cnt = $store->fetch(PDO::FETCH_ASSOC);
    $tcnt = $cnt['count'];

    if($TimeInOut == "TimeIn" && $tcnt == 0){

        $time = date('H:i');
        $insert = "INSERT INTO working_hour(e_id,check_in_time,check_out_time,reason,date) VALUES ('$e_id','$time','00:00:00','$Message','$Date')";
        $dbcon->query($insert);
        $str="Your time has been set";
        echo "<script>alert(\"$str\")</script>";
        echo("<script>location.href='my-profile.php'</script>");

    }
    elseif($TimeInOut == 'TimeOut'){
        $time = date('H:i');
        $update = "UPDATE working_hour SET check_out_time = '$time' WHERE  e_id='$e_id' AND date='$Date'";
        $dbcon->query($update);
        $str = "Your Information has been update.";
        echo "<script>alert(\"$str\")</script>";
        echo("<script>location.href='logout.php'</script>");
    }
    else{
        $in = 'Sorry! You have already submit your time. ';
        echo "<script>alert(\"$in\")</script>";
        echo("<script>location.href='my-profile.php'</script>");
    }
}

?>


<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMS | Time</title>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="active"><a href="my_profile.php">My profile</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <!-- Start login_form-->
    <section id="time_form">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <h2 class="text-center"><i class="fa fa-clock-o"></i> In/Out Time</h2>
                        <div class="form-group">
                            <label for="userInOutTime" class="sr-only"></label>
                            <select name="timeIn-out" id="userInOutTime" class="form-control">
                                <option value="TimeIn">Time In</option>
                                <option value="TimeOut">Time Out</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userCause" class="sr-only"></label>
                            <small>(If Late or want to leave early)</small>
                            <input name="reason" type="text" id="userCause" class="form-control" placeholder="Reason">
                        </div>
                        <div class="form-group">
                            <label for="submit"></label>
                            <button name="savetime" type="submit" id="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
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