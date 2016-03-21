<?php
session_start();
if ($_SESSION['login'] != "True") {
    $string = ' Sorry! You have to login first to view this page.';
    echo "<script>alert(\"$string\")</script>";
    header("location:login.php");
}
else {
    $e_id=$_SESSION['e_id'];
    require "database_config.php";
    require "pdo_connection.php";
    $db_user =$database_user;
    $db_pass =$databse_pass;
    $db_name=$database_name;
    $dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
    $sql = "SELECT * FROM employee_details,employee_status WHERE employee_details.e_id='$e_id' AND employee_status.e_id='$e_id'";
    $data = $dbcon->query($sql);
    $RowData=$data->fetch(PDO::FETCH_ASSOC);
    $UserName = $RowData['name'];
    $UserDesignation = $RowData['designation'];
    $UserEmail = $RowData['email'];
    $UserAddress = $RowData['address'];
    $UserPassword = $RowData['password'];
}
if(isset($_POST['update'])){
    $updateName = $_POST['username'];
    $updatePassword = $_POST['password'];
    $updateAddress = $_POST['address'];
    $sql = "UPDATE employee_details SET name='$updateName', password='$updatePassword', address='$updateAddress' WHERE e_id='$e_id'";
    $dbcon->query($sql);
    $updateMessage = 'Updated successfully.';
    echo "<script>alert(\"$updateMessage\")</script>";
    echo("<script>location.href='my-profile.php'</script>");
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="active"><a href="my-profile.php">My profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <!-- Start my_profile_edit-->
    <section id="my_profile_edit">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">                 
			<form action="" method="post">
				<h3 class="text-center"><i class="fa fa-pencil-square-o"></i> Edit Profile</h3>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="username" value="<?php echo $UserName;?>"/>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" value="<?php echo $UserEmail;?>" disabled />

				</div>
				<div class="form-group">
					<label for="exampleInputAddress">Address</label>
					<input type="text" class="form-control" name="address" value="<?php echo $UserAddress;?>"/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword">Password</label>
					<input type="password" class="form-control" name="password" value="<?php echo $UserPassword;?>"/>
				</div>
				<button type="submit" name="update" class="btn btn-primary">Update</button>
			</form>
                </div>
            </div>
        </div>
    </section>
    <!-- End my_profile_edit-->

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
