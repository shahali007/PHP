<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMS</title>
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <!--Start slider_area-->
    <div id="EMS-carousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active" style="background-image: url(images/EMS-slider2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slider-info">
                                <h2>EMS</h2>
                                <p>Employee management makes it easy to check and track human resources department at the press of a button</p>
                                <a href="#" class="btn btn-info">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(images/EMS-slider1.gif)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slider-info">
                                <h2>EMS</h2>
                                <p>Employee management makes it easy to check and track human resources department at the press of a button</p>
                                <a href="#" class="btn btn-info">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#EMS-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#EMS-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--End slider_area-->

    <!--Start home_info-->
    <div class="container">
        <div class="row margin25pxT">
            <div class="col-md-12 text-center">
                <h2>Employee Management System</h2>
            </div>
        </div>
        <div class="row margin25pxT">
            <div class="col-md-4">
                <h3><i class="fa fa-pencil-square-o"></i> Knowledge</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus deleniti mollitia odio quaerat vel.</p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-code"></i> Ability</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus deleniti mollitia odio quaerat vel.</p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-paperclip"></i> Experience</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus deleniti mollitia odio quaerat vel.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><a href="#" class="button-style">Get Started</a></h2>
            </div>
        </div>
    </div>
    <!--End home_info-->

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