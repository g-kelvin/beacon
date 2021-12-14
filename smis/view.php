
<?php
include "config.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="The Beacon Academy Embu - Best Private school for your Kid.">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="The Beacon Academy Embu - Best Private school for your Kid.">
  <link rel="shortcut icon" href="../images/favicon.png">

  <title>The Beacon Academy Embu - Best Private school for your Kid. </title>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link rel="stylesheet" type="text/css" href="main.css">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->

  
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
     <a href="home.php" class="logo">The Beacon Academy <span class="lite">SMIS</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form" action=" search.php" method="POST">
              <input class="form-control" placeholder="Search" type="text" name="search">
              <button class="btn btn-primary" type="submit" name="submit"> Search</button>
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                           <span class="badge bg-important"> <?php 
                          
                            $feedback="SELECT * from students WHERE status = 'Active' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo $rows;
                            // Free result set
                            mysqli_free_result($result);
                            }


                            ?></span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have <?php echo $rows;   ?> Active Students</p>
              </li>
   
              <li class="external">
                <a href="active.php">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important"> <?php 
                          
                            $feedback="SELECT * from users WHERE status = 'unread' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo $rows;
                            // Free result set
                            mysqli_free_result($result);
                            }


                            ?>


                            </span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have <?php echo $rows;   ?> new messages</p>
              </li>
              <li>
               
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">


                              <?php 
                          
                            $feedback="SELECT * from students WHERE status = 'Graduated' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo $rows;
                            // Free result set
                            mysqli_free_result($result);
                            }


                            ?>
                              


                            </span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have <?php echo $rows; ?> Graduates</p>
              </li>
              <li>
                <a href="graduate.php">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                 <img alt="" src="../images/favicon.png" width="50px">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="home.php"><i class="icon_profile"></i> Home</a>
              </li>
              <li>
                <a href="active.php"><i class="icon_clock_alt"></i> Active Students</a>
              </li>
              <li>
                <a href="graduate.php"><i class="icon_chat_alt"></i> Graduates</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="home.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>New Student</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="register.php">Register Students</a></li>
              <!-- <li><a class="" href="form_validation.html">Form Validation</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Students Details</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
             <li><a class="" href="online.php">Online Applications</a></li>
             <li><a class="" href="active.php">Active Students</a></li>
              <li><a class="" href="graduate.php">Graduates</a></li>
              <li><a class="" href="display.php">All Students</a></li>
            </ul>
          </li>
          
          <li>
            <a class="" href="total.php">
                          <i class="icon_piechart"></i>
                          <span>Fees Payments</span>

                      </a>

          </li>
      

          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>School Branches</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="embu.php">Embu Campus</a></li>
              <li><a class="" href="Embu.php"><span>Embu Campus</span></a></li>
              <li><a class="" href="kutus.php"><span>Kutus Campus</span></a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> View All Data <br>
             <a href="display.php" type="button" class="btn btn-danger" style="text-transform: capitalize;">Go Back</a>   
              <div class="col"><a href="show.php?id=<?php echo "'".implode("','",$ids)."'" ?>"><button type="button" class="btn btn-primary">Download Report</button></a></div>       
            </h3>            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Student Information</li>
            </ol>
          </div>
        </div>

         <?php
   
    if(isset($_GET['GetID']))
      $studid = $_GET['GetID'];
    {
    $feedback="SELECT * from students where studentid = $studid  ";
      $rest= mysqli_query($con,$feedback);
      while($row= mysqli_fetch_assoc($rest)){
       
         $studentid = $row['studentid'];
         $status = $row['status'];
   $fname = $row['fname'];
    $sname = $row['sname'];
    $lname = $row['lname'];
    $fschool = $row['fschool'];
    $nemis = $row['nemis'];
    $cert = $row['cert'];
    $address = $row['address'];
    $town= $row['town'];
    $county = $row['county'];
    $postal = $row['postal'];
    $residence = $row['residence'];
    $disability = $row['disability'];
    $specify = $row['specify'];
    $grade = $row['grade'];
    $class = $row['class'];
    $dob = $row['dob'];
    $religion = $row['religion'];
    $talent = $row['talent'];
    $campus = $row['campus'];
    $assessment = $row['assessment'];
    $paid_by = $row['paid_by'];
    $dateofadmin = $row['dateofadmin'];
    $gender = $row['gender'];
    $pfname = $row['pfname'];
    $psname = $row['psname'];
    $plname = $row['plname'];
    $active1 = $row['active1'];
    $active2 = $row['active2'];
    $active3 = $row['active3'];
    $email1 = $row['email1'];
    $email2 = $row['email2'];
    $idno = $row['idno'];
    $occupation = $row['occupation'];
    $office = $row['office'];
    $fees = $row['fees'];
    $mpesa = $row['mpesa'];
    $additional= $row['additional'];
    $adminno= $row['adminno'];
    $admitted_by= $row['admitted_by'];

    $mfname = $row['mfname'];
    $msname = $row['msname'];
    $mlname = $row['mlname'];
    $mactive1 = $row['mactive1'];
    $mactive2 = $row['mactive2'];
    $mactive3 = $row['mactive3'];
    $memail1 = $row['memail1'];
    $memail2 = $row['memail2'];
    $midno = $row['midno'];
    $moccupation = $row['moccupation'];
    $moffice = $row['moffice'];

    $gfname = $row['gfname'];
    $gsname = $row['gsname'];
    $glname = $row['glname'];
    $gactive1 = $row['gactive1'];
    $gactive2 = $row['gactive2'];
    $gactive3 = $row['gactive3'];
    $gemail1 = $row['gemail1'];
    $gemail2 = $row['gemail2'];
    $gidno = $row['gidno'];
    $goccupation = $row['goccupation'];
    $goffice = $row['goffice'];
       
         }




}

          ?>



          <!-- start -->
          <div class="row">
           <center> <H2 style="color: blue" >Personal Information </H2> </center>
           <hr>
          <div class="col-6 col-md-4"> <img src="img/dp-01.png" width="100">
            <br>
            <h4 style="color: blue">Name: <?php echo $fname ." ". $lname;  ?> </h4>
            <h4 style="color: blue">Status: <?php echo $status ;  ?> </h4>
           
          </div>
          <div class="col-6 col-md-4">
            <B> BIO-DATA </B> <br> <hr>
            <b style="color: blue">Gender:</b> <?php echo $gender ?> <br>
            <b style="color: blue">Date of Birth:</b> <?php echo $dob ?><br>
            <b style="color: blue">ID Number:</b> <?php echo $idno ?><br>
            <b style="color: blue">Admission Number:</b> <?php echo $adminno ?><br>
            <b style="color: blue">Religion:</b> <?php echo $religion ?><br>
              <b style="color: blue">Previous Grade:</b> <?php echo $grade ?><br>

          </div>
          <div class="col-6 col-md-4">
             <B> CONTACT INFORMATION </B> <br> <hr>
             <b style="color: blue">Phone Number:</b> <?php echo $active1 ?><br>
             <b style="color: blue">Email1:</b> <?php echo $email1 ?><br>
             <b style="color: blue">Postal Code:</b> <?php echo $postal ?><br>
             <b style="color: blue">Physical Address:</b> <?php echo $address ?><br>
             <b style="color: blue">County:</b> <?php echo $county ?><br>
             <b style="color: blue">Town:</b> <?php echo $town ?><br>
          </div>
        </div>

         <div class="row">

           <hr>
          <div class="col-6 col-md-4">
            <B> ABOUT PUPIL </B> <br> <hr>
            <b style="color: blue">Former School:</b> <?php echo $fschool ?> <br>
            <b style="color: blue">Birth Certificate No:</b> <?php echo $cert ?><br>
            <b style="color: blue">Nemis - upi No:</b> <?php echo $nemis ?><br>
            <b style="color: blue">Residence:</b> <?php echo $residence ?><br>
            <b style="color: blue">Assessment:</b> <?php echo $assessment ?><br>
            <b style="color: blue">Any Disability:</b> <?php echo $disability ?><br>

          </div>
          <div class="col-6 col-md-4">
            <B> PARENT INFORMATION </B> <br> <hr>
          <b style="color: blue">Parents Name:</b> <?php echo $fname ." ". $lname;  ?> <br>
            <b style="color: blue">Father Occupation:</b> <?php echo $occupation ?><br>
            <b style="color: blue">ID Number:</b> <?php echo $idno ?><br>
            <b style="color: blue">Residence:</b> <?php echo $residence ?><br>
              <b style="color: blue">Father Office Line:</b> <?php echo $office ?><br>
              <b style="color: blue">Mother Office Line:</b> <?php echo $moffice ?><br>
              <b style="color: blue">Guardian Office Line:</b> <?php echo $goffice ?><br>

          </div>
          <div class="col-6 col-md-4">
             <B> SECONDARY CONTACTS </B> <br> <hr>
             <b style="color: blue">Mother Occupation:</b> <?php echo $moccupation ?><br>
             <b style="color: blue">Gaurdian Occupation:</b> <?php echo $goccupation ?><br>
             <b style="color: blue">Father Active Tel :</b> <?php echo $active2 ." | ". $active3   ?><br>
             <b style="color: blue">Mother Active Tel :</b> <?php echo $mactive1 ." | ". $mactive2 ." | ".  $mactive2  ?><br>
             <b style="color: blue">Gaurdian Active Tel :</b> <?php echo $gactive1 ." | ". $gactive2 ." | ".  $gactive2  ?><br>
             <b style="color: blue">Father Email :</b> <?php echo $email1 ." | ". $email2 ?><br>
             <b style="color: blue">Mother Email :</b> <?php echo $memail1 ." | ". $memail2 ?><br>
             <b style="color: blue">Gaurdian Email :</b> <?php echo $gemail1 ." | ". $gemail2 ?><br>
    
          </div>
        </div>
        <hr>

        <div class="row">
          <center> <H2 style="color: blue" >School Information </H2> </center>
        <div class="col-6 col-md-4" style="background-color: blue"><br><br>
           <B style="color: white"> COURSE INFORMATION </B> <br> <hr>
           <b style="color: white">Campus:</b> <?php echo "<i style ='color:black'>". $campus ."</i>" ?><br>
           <b style="color: white">Class | Grade:</b> <?php echo "<i style ='color:black'>". $class ."</i>" ?><br>
           <b style="color: white">Fees Paid:</b> <?php echo "<i style ='color:black'>". $fees ."</i>" ?><br>
           <b style="color: white">Pupil Talent:</b> <?php echo "<i style ='color:black'>". $talent ."</i>" ?><br>




        <br></div> 
        <!-- end -->
        <div class="col-6 col-md-4" style="background-color: brown"><br><br>
           <B style="color: white"> ADMISSION INFORMATION </B> <br> <hr>
           <b style="color: white">Date of Admission:</b> <?php echo "<i style ='color:black'>". $dateofadmin ."</i>" ?><br>
           <b style="color: white">Admitted By:</b> <?php echo "<i style ='color:black'>". $admitted_by ."</i>" ?><br>
           <b style="color: white">Fees Paid By:</b> <?php echo "<i style ='color:black'>". $paid_by ."</i>" ?><br><br><br>

        </div>
        <div class="col-6 col-md-4" style="background-color: green"><br><br>
         <B style="color: white"> ADDITIONAL INFORMATION </B> <br> <hr>
         <b style="color: white">More About The Student:</b> <?php echo "<i style ='color:black'>". $additional ."</i>" ?><br><br><br><br><br>

        </div>
      </div>




          <!-- end -->






      </section>
    </section>
    <!--main content end-->
   
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>


</body>

</html>
