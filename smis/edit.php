
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
  <section id="container"  class="">
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
                                <img alt="" src="img/admin-01.png">
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
              <li><a class="" href="register.php">Register Student</a></li>
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
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Register Students</li>
            </ol>
          </div>
        </div>


<!-- start -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<?php

 
  if($con){
  $studid = $_GET['GetID'];
  
  $query = "SELECT * FROM students where studentid = $studid";
  $result = mysqli_query($con, $query);


  while($row = mysqli_fetch_assoc($result)){
    $studentid = $row['studentid'];
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

    
  }

  }
  else
  {
    echo "error";
  }
  

  ?>
 

<div class="container">
    <h1 class="well">School Registration Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
    <center> <h3 class="well" style="color: orange">Students Details</h3></center>
        <form action="studentsupdate.php" method="POST">
          <div class="col-sm-12">
              <div class="row">
              <div class="col-sm-4 form-group">
                <label>First Name</label>
                <input type="text"  placeholder="Enter First Name Here.." name="fname" value="<?php echo$fname;?>" class="form-control">
              </div> 

               
              <div class="col-sm-4 form-group">
                <label>Second Name</label>
                <input type="text" name="sname" value=" <?php echo $sname;  ?> " placeholder="Enter Second Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Last Name</label>
                <input type="text" name="lname" value=" <?php echo $lname;  ?> " placeholder="Enter Last Name Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Former School</label>
                <input type="text"  placeholder="Enter Former School Here.." name="fschool" value=" <?php echo $fschool;  ?> " class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Nemis upi No.</label>
                <input type="text" name="nemis" value=" <?php echo $nemis;  ?> " placeholder="Enter Nemis upi No. Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Birth Certificate Entry No.</label>
                <input type="text" name="cert" value=" <?php echo $cert;  ?> " placeholder="Enter Birth Certificate Entry No. Here.." class="form-control">
              </div>    
            </div>
        
        
            <div class="form-group">
              <label>Address</label>
              <textarea placeholder="Enter Address Here.." name="address" value=" <?php echo $address;  ?> " rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Town</label>
                <input type="text"  placeholder="Enter Town Name Here.." name="town" value=" <?php echo $town;  ?> " class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>County</label>
                <input type="text" name="county" value=" <?php echo $county;  ?> " placeholder="Enter County Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Postal Code</label>
                <input type="text" name="postal" value=" <?php echo $postal;  ?> " placeholder="Enter Postal Code Here.." class="form-control">
              </div>    
            </div>
              <div class="row">
              <div class="col-sm-6 form-group">
                <label>Place of Residence</label>
                <input type="text" name="residence" value=" <?php echo $residence;  ?> " placeholder="Enter First Name Here.." class="form-control">
              </div>
               <div class="col-sm-6 form-group">
                <label>Any Disability</label>
                <input type="text" name="disability" value=" <?php echo $disability;  ?> "  placeholder="Enter Grade Here.." class="form-control">
              </div>  
            </div>
            <div class="form-group">
              <label>If any Disability Specify Below</label>
              <textarea placeholder="Enter Disability Here.." name="specify" value=" <?php echo $specify;  ?> " rows="3" class="form-control"></textarea>
            </div>    
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Previous Grade</label>
                <input type="text" name="grade" value=" <?php echo $grade;  ?> " placeholder="Enter Grade Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Grade / Class</label>
                <input type="text" name="class" value=" <?php echo $class;  ?> " placeholder="Enter Grade Here.." class="form-control">
              </div>   
            </div> 

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Date of Birth.</label>
                <input type="text" name="dob" value=" <?php echo $dob;  ?> " placeholder="Enter DoB Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Religion</label>
                <input type="text" name="religion" value=" <?php echo $religion;  ?> " placeholder="Enter DoB Here.." class="form-control">
              </div>  
            </div>


            <div class="row">

              <div class="col-sm-6 form-group">
                <label>Pupil Talent</label>
                <input type="text" name="talent" value=" <?php echo $talent;  ?> " placeholder="Enter DoB Here.." class="form-control">
              </div> 
   
              <div class="col-sm-6 form-group">
                <label>Campus</label>
                <input type="text" name="campus" value=" <?php echo $campus;  ?> " placeholder="Enter DoB Here.." class="form-control">
              </div> 
            </div>  


             <div class="row">
              <div class="col-sm-6 form-group">
                <label> Assessment No.</label>
                <input type="text" name="assessment" value=" <?php echo $assessment;  ?> " placeholder="Enter Assessment No. Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label> Fees Paid By:</label>
                <input type="text" name="paid_by" value=" <?php echo $paid_by;  ?> " placeholder="Enter Assessment No. Here.." class="form-control">
              </div>  
            </div> 


            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Date of Admission</label>
               <input  type="text" name="dateofadmin" value=" <?php echo $dateofadmin;  ?> " class="form-control" placeholder="Enter Date of Admission">
              </div>   
              <div class="col-sm-6 form-group">
                <label>Gender</label>
               <input  type="text" name="gender" value=" <?php echo $gender;  ?> " class="form-control" placeholder="Enter Date of Admission">
              </div>  
            </div>
            <div class="form-group">
            <label> <strong style="color: red"> Admission Number (Don't Edit) </strong> </label>
            <input type="text" name="adminno" value=" <?php echo $adminno;  ?> "  placeholder="E.g Tr. Dan" class="form-control">
          </div>
            <center> <h3 class="well" style="color: orange">Parents | Guardian Details</h3></center>
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>First Name</label>
                <input type="text"  placeholder="Enter First Name Here.." name="pfname" value=" <?php echo $pfname;  ?> " class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Second Name</label>
                <input type="text" name="psname" value=" <?php echo $psname;  ?> " placeholder="Enter Second Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Last Name</label>
                <input type="text" name="plname" value=" <?php echo $plname;  ?> " placeholder="Enter Last Name Here.." class="form-control">
              </div>    
            </div>

            


            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Active Number 1</label>
                <input type="text"  placeholder="Enter Active Number 1 Here.." name="active1" value=" <?php echo $active1;  ?> " class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Active Number 2</label>
                <input type="text" name="active2" value=" <?php echo $active2;  ?> " placeholder="Enter Active Number 2 Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Active Number 3</label>
                <input type="text" name="active3" value=" <?php echo $active3;  ?> " placeholder="Enter Active Number 3 Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Active Email 1</label>
                <input type="text" name="email1" value=" <?php echo $email1;  ?> " placeholder="Enter Email 1 Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Active Email 2</label>
                <input type="text" name="email2" value=" <?php echo $email2;  ?> " placeholder="Enter Email 2 Here.." class="form-control">
              </div> 
            </div>

             <div class="row">
              <div class="col-sm-4 form-group">
                <label>ID Number</label>
                <input type="text"  placeholder="Enter ID Number Here.." name="idno" value=" <?php echo $idno;  ?> " class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Occupation</label>
                <input type="text" name="occupation" value=" <?php echo $occupation;  ?> " placeholder="Enter Occupation Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Office Line</label>
                <input type="text" name="office" value=" <?php echo $office;  ?> " placeholder="Enter Office Line Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Fees Paid</label>
                <input type="text" name="fees" value=" <?php echo $fees;  ?> " placeholder="Enter Fees Paid e.g 1000.00" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Confirmation Message</label>
                <input type="text" name="mpesa" value=" <?php echo $mpesa;  ?> " placeholder="Paste Empesa Message Here.." class="form-control">
              </div> 
            </div>

            <div class="form-group">
            <label>Admitted By</label>
            <input type="text" name="admitted_by" value=" <?php echo $admitted_by;  ?> "  placeholder="E.g Tr. Dan" class="form-control">
          </div>
          <div class="form-group">
            <label><strong style="color: red"> Primary Key (Don't Edit This)</strong> </label>
            <input type="text" name="studentid" value=" <?php echo $studentid;  ?> "  placeholder="E.g Tr. Dan" class="form-control">
          </div>



             <div class="form-group">
              <label>Additional Information</label>
              <textarea placeholder="Enter information Here.." name="additional" value=" <?php echo $additional;  ?> " rows="3" class="form-control"></textarea>
            </div>       

          <button type="update" name="update" class="btn btn-lg btn-info">Change Updates</button>         
          </div>
        </form> 
        </div>
  </div>
  </div>
<!-- end -->



      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://softwaretechn.co.ke">Software Technology Kenya</a>
        </div>
    </div>
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
