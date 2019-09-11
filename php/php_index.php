<?php
if ($_POST['submit']) {
  if (!$_POST['name']) {
    $error="<br/>- Please enter your name. ";
  }
  if (!$_POST['email']) {
    $error.="<br/>- Please enter your email. ";
  }
  if (!$_POST['service']) {
    $error.="<br/>- Please select a service. ";
  }
  if (!$_POST['sub_length']) {
    $error.="<br/>- Please select a subscription length. ";
  }
  if (!$_POST['message']) {
    $error.="<br/>- Please enter a message. ";
  }
  if (!$_POST['check']) {
    $error.="<br/>- Please confirm that you are human. ";
  }
  if ($error) {
    $result='<div class="alert alert-danger" role="alert"><strong>Oops, there is an error.</strong> Please correct the following: '.$error.'</div>';
  } else {
    mail("nathan@optimalevolution.co", "Contact Message from: ".$_POST['name'],"
    Optimal Evolution,
      You have recieved a message from: 
        ".$_POST['name']."
      Email: 
        ".$_POST['email']."
      Service Chosen:
        ".$_POST['service']."
      Subscription Length: 
        ".$_POST['sub_length']."
      Message: 
        ".$_POST['message']);
    {
      $_POST = array();
      $result='<div class="alert alert-success" role="alert"><strong>Thank you</strong>, We will be in touch shortly.</div>';
    }
  }
}
?>

<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <title>Optimal Evolution - Contact/Sign Up!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/iconfont.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/bootsnav.css">
    <link rel="stylesheet" href="../assets/css/plugins.css" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css" />

    <script src="https://kit.fontawesome.com/a29a9f737a.js"></script>
    <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


</head>

<body data-spy="scroll" data-target="#navbar-menu" data-offset="110">
    <!-- Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!--End off Preloader -->
    <div class="culmn">
        <!--Home page style-->
        <nav class="navbar navbar-default bootsnav navbar-fixed white">
            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->
            <div class="container">
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="../index.html">
                        <img class="nav-image" src="../assets/images/optimalevolutionnavbar.png"
                            alt="optimal-evolution-logo" />
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- navbar menu -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.html">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Contact Form Section -->

        <div class="business bg-white roomy-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <?php echo $result;?>

                        <form class="form-web" method="post" role="form">
                            <h2>Sign Up / Contact Form</h2>
                            <h3>Full Name:</h3> 
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    value="<?php echo $_POST['name']; ?>">
                            </div>
                            <br>
                            <h3>Email:</h3>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email"
                                    value="<?php echo $_POST['email']; ?>">
                            </div>
                            <br>
                            <h3>Service:</h3>
                            <div class="dropdown">
                                <select class="select" name="service">
                                    <option value="">Choose a Service...</option>
                                    <option value="Holistic Lifestyle Coaching">Holistic Lifestyle Coaching</option>
                                    <option value="Performance Coaching">Performance Coaching</option>
                                    <option value="Distance Performance Coaching">Distance Performance Coaching</option>
                                    <option value="Team Training">Team Training</option>
                                    <option value="Consultationi">Consultation</option>
                                </select>
                            </div>
                            <br>
                            <h3>Service Length:</h3>
                            <div class="dropdown">
                                <select class="select" name="sub_length">
                                    <option value="">Length of Service...</option>
                                    <option value="12 Months">12 Months</option>
                                    <option value="6 Months">6 Months</option>
                                    <option value="3 Months">3 Months</option>
                                    <option value="1 Month">Consultation</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea name="message" rows="7" class="form-control"
                                    placeholder="Your Message..."><?php echo $_POST['message'];?></textarea>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" name="check"> I am Human 
                                </label>
                            </div>
                            <div align="center">
                                <input type="submit" name="submit" class="btn btn-secondary" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer id="contact" class="footer action-lage bg-black p-top-80">
            <div class="container">
                <div class="row">
                    <div class="widget_area">
                        <div class="col-md-6">
                            <div class="widget_item widget_about">
                                <h5 class="text-white">Contact Us</h5>
                                <div class="widget_ab_item m-top-30">
                                    <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                    <div class="widget_ab_item_text">
                                        <h6 class="text-white">Location</h6>
                                        <p>
                                            South Bend, IN <br>
                                            United States
                                        </p>
                                    </div>
                                </div>
                                <div class="widget_ab_item m-top-30">
                                    <div class="item_icon"><i class="fa fa-phone"></i></div>
                                    <div class="widget_ab_item_text">
                                        <h6 class="text-white">Phone :</h6>
                                        <a href="tel:+1-574-229-6757">574.229.6757</a>
                                    </div>
                                </div>
                                <div class="widget_ab_item m-top-30">
                                    <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="widget_ab_item_text">
                                        <h6 class="text-white">Email :</h6>
                                        <a href="mailto:nathan@optimalevolution.co">nathan@optimalevolution.co </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="widget_item widget_newsletter sm-m-top-50">
                                <h5 class="text-white">Newsletter</h5>
                                <form class="form-inline m-top-30">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter you Email">
                                        <button type="submit" class="btn text-center"><i
                                                class="fa fa-arrow-right"></i></button>
                                    </div>

                                </form>
                                <div class="widget_brand m-top-40">
                                    <img src="../assets/images/optimalevolutionnavbar.png" alt="optimal-evolution-logo">
                                </div>
                                <ul class="list-inline m-top-30">
                                    <li>- <a href=""><i class="fab fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a> -</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                <div class="col-md-12">
                    <p class="wow fadeInRight" data-wow-duration="1s">
                        Developed by
                        <a target="_blank" href="https://www.hoffmediacollective.com">The Hoffmedia Collective</a>
                        2019. All Rights Reserved
                    </p>
                </div>
            </div>
        </footer>

        <!-- JS includes -->

        <script src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>

        <script src="../assets/js/jquery.magnific-popup.js"></script>
        <script src="../assets/js/jquery.easing.1.3.js"></script>
        <script src="../assets/js/bootsnav.js"></script>

        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

</body>

</html>