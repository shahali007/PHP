<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMS | Login</title>
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
                        <li class="active"><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <!-- Start login_form-->
    <section id="login_form">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <h2 class="text-center"><i class="fa fa-lock"></i> Login</h2>
                        <div class="form-group">
                            <label for="userEmail" class="sr-only"></label>
                            <input type="email" id="userEmail" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="sr-only"></label>
                            <input type="password" id="userPassword" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="submit"></label>
                            <button type="submit" id="submit" class="btn btn-primary">Login</button>
                            <a href="#" class="pull-right">Forgot Password?</a>
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