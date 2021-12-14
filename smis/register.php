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
  <meta name="keyword" content="The Beacon Academy Embu - Best Private school for your Kid..">
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

<div class="container">
    <h1 class="well">School Registration Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
    <center> <h3 class="well" style="color: orange">Students Details</h3></center>
        <form action="data.php" method="POST">
          <div class="col-sm-12">
              <div class="row">
              <div class="col-sm-4 form-group">
                <label>First Name</label>
                <input type="text"  placeholder="Enter First Name Here.." name="fname" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Second Name</label>
                <input type="text" name="sname" placeholder="Enter Second Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Enter Last Name Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Former School</label>
                <input type="text"  placeholder="Enter Former School Here.." name="fschool" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Nemis upi No.</label>
                <input type="text" name="nemis" placeholder="Enter Nemis upi No. Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Birth Certificate Entry No.</label>
                <input type="text" name="cert" placeholder="Enter Birth Certificate Entry No. Here.." class="form-control">
              </div>    
            </div>
        
        
            <div class="form-group">
              <label>Address</label>
              <textarea placeholder="Enter Address Here.." name="address" rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Town</label>
                <input type="text"  placeholder="Enter Town Name Here.." name="town" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>County</label>
                <input type="text" name="county" placeholder="Enter County Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Postal Code</label>
                <input type="text" name="postal" placeholder="Enter Postal Code Here.." class="form-control">
              </div>    
            </div>
              <div class="row">
              <div class="col-sm-6 form-group">
                <label>Place of Residence</label>
                <input type="text" name="residence" placeholder="Enter First Name Here.." class="form-control">
              </div>
               <div class="col-sm-6 form-group">
                <label>Any Disability</label>
                <select  name="disability"  class="form-control">
                <option selected>-- Select --</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              </div>  
            </div>
            <div class="form-group">
              <label>If any Disability Specify Below</label>
              <textarea placeholder="Enter Disability Here.." name="specify" rows="3" class="form-control"></textarea>
            </div>    
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Previous Grade</label>
                <input type="text" name="grade" placeholder="Enter Grade Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Grade / Class</label>
                <select  name="class"  class="form-control">
                <option selected>Select a Course</option>
                <option value="Kindergarten">Kindergarten</option>
                <option value="PP1">PP1</option>
                <option value="PP2">PP2</option>
                <option value="Grade 1">Grade 1</option>
                <option value="Grade 2">Grade 2</option>
                <option value="Grade 3">Grade 3</option>
                <option value="Grade 4">Grade 4</option>
                <option value="Grade 5">Grade 5</option>
                <option value="Grade 6">Grade 6</option>
                <option value="Class 7">Class 7</option>
                <option value="Class 8">Class 8</option>
                
              </select>
              </div>  
            </div> 

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Date of Birth.</label>
                <input type="date" name="dob" placeholder="Enter DoB Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Religion</label>
                <select  name="religion"  class="form-control">
                <option selected>Select Religion</option>
                <option value="Christian">Christian</option>
                <option value="Muslim">Muslim</option>
                <option value="Other">Other</option>
              </select>
              </div>  
            </div>


            <div class="row">

                <div class="col-sm-6 form-group">
                <label>Pupil Talent</label>
                <select name="talent"  class="form-control">
                <option selected>Select Talent</option>
                <option value="Signing">Signing</option>
                <option value="Football">Football</option>
                <option value="Dancing">Dancing</option>
                <option value="Other">Others</option>

              </select>
              </div> 
   
              <div class="col-sm-6 form-group">
                <label>Campus</label>
                <select  name="campus" class="form-control">
                <option selected>Select Campus</option>
                <option value="Embu">Embu</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Kutus">Kutus</option>
              </select>
              </div>  
            </div>  


             <div class="row">
              <div class="col-sm-6 form-group">
                <label> Assessment No.</label>
                <input type="text" name="assessment" placeholder="Enter Assessment No. Here.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Fees Paid By:</label>
                <select name="paid_by"  class="form-control">
                <option selected>Select fees Payer</option>
                <option value="Self">Self</option>
                <option value="Father">Father</option>
                <option value="Mother">Mother</option>
                <option value="Others">Others</option>
              </select>
              </div>  
            </div> 


            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Date of Admission</label>
               <input  type="date" name="dateofadmin" class="form-control" placeholder="Enter Date of Admission">
              </div>   
              <div class="col-sm-6 form-group">
                <label>Gender</label>
                <select name="gender"  class="form-control">
                <option selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
              </div>  
            </div>
            <center> <h3 class="well" style="color: orange">Father Details</h3></center>
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>First Name</label>
                <input type="text"  placeholder="Enter First Name Here.." name="pfname" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Second Name</label>
                <input type="text" name="psname" placeholder="Enter Second Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Last Name</label>
                <input type="text" name="plname" placeholder="Enter Last Name Here.." class="form-control">
              </div>    
            </div>

            


            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Active Number 1</label>
                <input type="text"  placeholder="Enter Active Number 1 Here.." name="active1" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Active Number 2</label>
                <input type="text" name="active2" placeholder="Enter Active Number 2 Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Active Number 3</label>
                <input type="text" name="active3" placeholder="Enter Active Number 3 Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Active Email 1</label>
                <input type="text" name="email1" placeholder="Enter Email 1 Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Active Email 2</label>
                <input type="text" name="email2" placeholder="Enter Email 2 Here.." class="form-control">
              </div> 
            </div>

             <div class="row">
              <div class="col-sm-4 form-group">
                <label>ID Number</label>
                <input type="text"  placeholder="Enter ID Number Here.." name="idno" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Occupation</label>
                <input type="text" name="occupation" placeholder="Enter Occupation Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Office Line</label>
                <input type="text" name="office" placeholder="Enter Office Line Here.." class="form-control">
              </div>    
            </div>

            <center> <h3 class="well" style="color: orange">Mother Details</h3></center>
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>First Name</label>
                <input type="text"  placeholder="Enter First Name Here.." name="mfname" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Second Name</label>
                <input type="text" name="msname" placeholder="Enter Second Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Last Name</label>
                <input type="text" name="mlname" placeholder="Enter Last Name Here.." class="form-control">
              </div>    
            </div>

            


            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Active Number 1</label>
                <input type="text"  placeholder="Enter Active Number 1 Here.." name="mactive1" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Active Number 2</label>
                <input type="text" name="mactive2" placeholder="Enter Active Number 2 Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Active Number 3</label>
                <input type="text" name="mactive3" placeholder="Enter Active Number 3 Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Active Email 1</label>
                <input type="text" name="memail1" placeholder="Enter Email 1 Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Active Email 2</label>
                <input type="text" name="memail2" placeholder="Enter Email 2 Here.." class="form-control">
              </div> 
            </div>

             <div class="row">
              <div class="col-sm-4 form-group">
                <label>ID Number</label>
                <input type="text"  placeholder="Enter ID Number Here.." name="midno" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Occupation</label>
                <input type="text" name="moccupation" placeholder="Enter Occupation Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Office Line</label>
                <input type="text" name="moffice" placeholder="Enter Office Line Here.." class="form-control">
              </div>    
            </div>

            <center> <h3 class="well" style="color: orange"> Guardian Details</h3></center>
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>First Name</label>
                <input type="text"  placeholder="Enter First Name Here.." name="gfname" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Second Name</label>
                <input type="text" name="gsname" placeholder="Enter Second Name Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Last Name</label>
                <input type="text" name="glname" placeholder="Enter Last Name Here.." class="form-control">
              </div>    
            </div>

            


            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Active Number 1</label>
                <input type="text"  placeholder="Enter Active Number 1 Here.." name="gactive1" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Active Number 2</label>
                <input type="text" name="gactive2" placeholder="Enter Active Number 2 Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Active Number 3</label>
                <input type="text" name="gactive3" placeholder="Enter Active Number 3 Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Active Email 1</label>
                <input type="text" name="gemail1" placeholder="Enter Email 1 Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Active Email 2</label>
                <input type="text" name="gemail2" placeholder="Enter Email 2 Here.." class="form-control">
              </div> 
            </div>

             <div class="row">
              <div class="col-sm-4 form-group">
                <label>ID Number</label>
                <input type="text"  placeholder="Enter ID Number Here.." name="gidno" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Occupation</label>
                <input type="text" name="goccupation" placeholder="Enter Occupation Here.."  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Office Line</label>
                <input type="text" name="goffice" placeholder="Enter Office Line Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Fees Paid</label>
                <input type="text" name="fees" placeholder="Enter Fees Paid e.g 1000.00" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Confirmation Message</label>
                <input type="text" name="mpesa" placeholder="Paste Empesa Message Here.." class="form-control">
              </div> 
            </div>

        

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Fees Paid</label>
                <input type="text" name="fees" placeholder="Enter Fees Paid e.g 1000.00" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Confirmation Message</label>
                <input type="text" name="mpesa" placeholder="Paste Empesa Message Here.." class="form-control">
              </div> 
            </div>

                  <div class="form-group">
            <label>Admitted By</label>
            <input type="text" name="admitted_by"  placeholder="E.g Tr. Dan" class="form-control">
          </div>


          

             <div class="form-group">
              <label>Additional Information</label>
              <textarea placeholder="Enter information Here.." name="additional" rows="3" class="form-control"></textarea>
            </div>       

          <button type="submit" name="submit" class="btn btn-lg btn-info">Submit</button>         
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
