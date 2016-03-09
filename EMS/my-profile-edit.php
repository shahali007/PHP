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
                        <li class="active"><a href="my_profile.php">My profile</a></li>
                        <li><a href="login.php">Logout</a></li>
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
                        <hr>
                        <div class="form-group">
                            <label for="userImage" class="sr-only"></label>
                            <img src="images/placeholder.png" alt="Profile-image" width="80px" height="80px">
                            <input type="file" id="userImage" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="userName" class="sr-only"></label>
                            <input type="text" id="userName" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="userEmail" class="sr-only"></label>
                            <input type="email" id="userEmail" class="form-control" placeholder="Email" readonly>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="sr-only"></label>
                            <input type="password" id="userPassword" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="userAddress" class="sr-only"></label>
                            <input type="text" id="userAddress" class="form-control" placeholder="Address">
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