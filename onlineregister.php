<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>The Beacon Academy Embu</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Top Header_Area -->
    <section class="top_header_area">
        <div class="container">
             <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+254 720 616 843</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>info@thebeaconacademy.sc.ke</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Top Header_Area -->

    <!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a  href="index.html"><img src="images/logo.png" width="200px"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                       <li><a href="services.html">curriculum</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="fees.html">Fees</a></li>
                        <li><a href="contact.html">Contact</a></li>
                         <li class="dropdown submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register</a>
                            <ul class="dropdown-menu">
                                <li><a href="register.html">Register</a></li>
                                <li><a href="smis/login.php">Login</a></li>
                                
                            </ul>
                        </li>
                       <li><a href="https://thebeaconacademy.sc.ke:2096/"><b style="color: red"> Mails </b></a></li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- End Header_Area -->

    <!-- Banner area -->
    <section class="banner_area" style="background: url('images/classroom.jpg') no-repeat fixed;">
        <h2>Fees Payment</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Fees Payment</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

   

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
          
           <?php 
// $con= mysqli_connect("localhost","thebeaco_admin", "7RWMt24Yv+v9*k","thebeaco_thebeacon");
$con= mysqli_connect("localhost","root", "","beacon");
if($con){
   if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $lname = $_POST['lname'];
    $fschool = $_POST['fschool'];
    $nemis = $_POST['nemis'];
    $cert = $_POST['cert'];
    $address = $_POST['address'];
    $town= $_POST['town'];
    $county = $_POST['county'];
    $postal = $_POST['postal'];
    $residence = $_POST['residence'];
    $disability = $_POST['disability'];
    $specify = $_POST['specify'];
    $grade = $_POST['grade'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $talent = $_POST['talent'];
    $campus = $_POST['campus'];
    $assessment = $_POST['assessment'];
    $paid_by = $_POST['paid_by'];
    $dateofadmin = $_POST['dateofadmin'];
    $gender = $_POST['gender'];
    $pfname = $_POST['pfname'];
    $psname = $_POST['psname'];
    $plname = $_POST['plname'];
    $active1 = $_POST['active1'];
    $active2 = $_POST['active2'];
    $active3 = $_POST['active3'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $idno = $_POST['idno'];
    $occupation = $_POST['occupation'];
    $office = $_POST['office'];
    $fees = $_POST['fees'];
    $mpesa = $_POST['mpesa'];
    $additional= $_POST['additional'];

    $mfname = $_POST['mfname'];
    $msname = $_POST['msname'];
    $mlname = $_POST['mlname'];
    $mactive1 = $_POST['mactive1'];
    $mactive2 = $_POST['mactive2'];
    $mactive3 = $_POST['mactive3'];
    $memail1 = $_POST['memail1'];
    $memail2 = $_POST['memail2'];
    $midno = $_POST['midno'];
    $moccupation = $_POST['moccupation'];
    $moffice = $_POST['moffice'];

    $gfname = $_POST['gfname'];
    $gsname = $_POST['gsname'];
    $glname = $_POST['glname'];
    $gactive1 = $_POST['gactive1'];
    $gactive2 = $_POST['gactive2'];
    $gactive3 = $_POST['gactive3'];
    $gemail1 = $_POST['gemail1'];
    $gemail2 = $_POST['gemail2'];
    $gidno = $_POST['gidno'];
    $goccupation = $_POST['goccupation'];
    $goffice = $_POST['goffice'];

    echo "$fname";


    $qry=mysqli_query( $con," INSERT INTO `students` (`studentid`, `fname`, `sname`, `lname`, `fschool`, `nemis`, `cert`, `address`, `town`, `county`, `postal`, `residence`, `disability`, `specify`, `grade`, `class`, `dob`, `religion`, `talent`, `campus`, `assessment`, `paid_by`, `dateofadmin`, `gender`, `pfname`, `psname`, `plname`, `active1`, `active2`, `active3`, `email1`, `email2`, `idno`, `occupation`, `office`, `fees`, `mpesa`, `additional`, `adminno`, `status` , `mfname`, `msname`, `mlname`, `mactive1`, `mactive2`, `mactive3`, `memail1`, `memail2`, `midno`, `moccupation`, `moffice` , `gfname`, `gsname`, `glname`, `gactive1`, `gactive2`, `gactive3`, `gemail1`, `gemail2`, `gidno`, `goccupation`, `goffice`) 

        VALUES (NULL, '$fname', '$sname', '$lname', '$fschool', '$nemis', '$cert', '$address', '$town', '$county', '$postal', '$residence', '$disability', '$specify', '$grade', '$class', '$dob', '$religion', '$talent', '$campus', '$assessment', '$paid_by', '$dateofadmin', '$gender', '$pfname', '$psname', '$plname', '$active1', '$active2', '$active3', '$email1', '$email2', '$idno', '$occupation', '$office', '$fees', '$mpesa', '$additional', 'Pending', 'Pending' , '$mfname', '$msname', '$mlname', '$mactive1', '$mactive2', '$mactive3', '$memail1', '$memail2', '$midno', '$moccupation', '$moffice' , '$gfname', '$gsname', '$glname', '$gactive1', '$gactive2', '$gactive3', '$gemail1', '$gemail2', '$gidno', '$goccupation', '$goffice') " );

    if($qry)
    {
      echo"<br> <br>Congratulations ".$fname." ".$lname.  " for Enrolling with The Beacon Academy Embu <br> <br> ";
    }

    else{
      echo "Data Posting Error";
    }

  
    
    }
    else{
      echo "No Data Posted";
    }
  
}
else{
  echo "Connection Declined";
}
?>





            </div>

    </section>

     <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>OUR SCHOOL</h2>
                    <p>They typically have a board of governors who are elected independently of government and have a system of governance that ensures their independent operation..<a href="about.html">Read More...</a></p>
                    <ul class="socail_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Quick links</h2>
                    <ul class="quick_link">
                        <li><a href="services.html"><i class="fa fa-chevron-right"></i>Our  Services</a></li>
                        <li><a href="gallery.html"><i class="fa fa-chevron-right"></i>Our Gallery</a></li>
                        <li><a href="blog.html"><i class="fa fa-chevron-right"></i>Our Blog</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Our Contact</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>About Us</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Register</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Twitter Feed</h2>
                    <a href="#" class="twitter">@beaconacademyembu:January Intake ongoing. Visit us today for more information.</a>
                    <a href="#" class="twitter">@beaconacademyembu: KCPE results out now. Visit us today.</a>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@thebeaconacademy.sc.ke</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+254 720 616 843</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>The Beacon Academy Embu, Embu - Siakago Road, Embu - Kenya </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2021 All rights reserved. Designed by <a href="https://dataconsultancy.co.ke">Click Here</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
