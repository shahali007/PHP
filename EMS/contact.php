<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EMS | Contact</title>
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
                        <li class="active"><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End header_area -->

    <!-- Start contact_area-->
    <section id="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Address</h3>
                    <p>
                        <b>Address : </b> Enayetnagor,&nbsp;&nbsp;&nbsp;
                        <b>PO : </b> Kutubpur 1421, &nbsp;&nbsp;&nbsp;
                        <b>PS & Thana : </b> Fatullah, <br>
                        <b>District : </b> Narayangonj <br><br>
                        <b>Call us : </b> +880 1234567890
                    </p>
                </div>
                <div class="col-md-4 col-md-offset-2" id="contact_form">
                    <form action="" method="post">
                        <h3>Contact Us</h3>
                        <div class="form-group">
                            <label for="contactUserName" class="sr-only"></label>
                            <input type="text" id="contactUserName" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="contactUserEmail" class="sr-only"></label>
                            <input type="email" id="contactUserEmail" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="contactUserAddress" class="sr-only"></label>
                            <input type="text" id="contactUserAddress" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="contactUserMessage" class="sr-only"></label>
                            <textarea placeholder="Message here..." name="" id="contactUserMessage" cols="30" rows="5" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="submit"></label>
                            <button type="submit" id="submit" class="btn btn-primary">Send Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3741603.5347618936!2d88.0996812884302!3d23.679186976220304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbangladesh!5e0!3m2!1sen!2sbd!4v1456034274675" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact_area -->


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