
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
                            <span class="badge bg-important">


                              <?php 
                          
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
             <li><a class="" href="kasaranicampus.php">Embu  Campus</a></li>
              <li><a class="" href="machakoscampus.php"><span>Nairobi Campus</span></a></li>
              <li><a class="" href="kituicampus.php"><span>Kutus Campus</span></a></li>
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
            <h3 class="page-header"><i class="fa fa fa-bars"></i>
            <a href="active.php" type="button" class="btn btn-primary" style="text-transform: capitalize;" >Active Students</a>
            <a href="graduate.php" type="button" class="btn btn-primary" style="text-transform: capitalize;" >Graduated Students</a>
            <?php 
                          
                            $feedback="SELECT * from students WHERE campus = 'Embu' AND status = 'active' ORDER BY studentid DESC  LIMIT 10 ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo "<b style = 'color: green'> Active Students are = ". $rows. " ". "</b>";
                            // Free result set
                            mysqli_free_result($result);
                            }





                            $feedback="SELECT * from students WHERE campus = 'Embu' AND status = 'Graduated' ";
                            if ($result=mysqli_query($con,$feedback))
                            {
                            // Return the number of rows in result set
                            $rows=mysqli_num_rows($result);
                            echo "<b style = 'color: red'> Graduates are = ". $rows. "</b>";
                            // Free result set
                            mysqli_free_result($result);
                            }


                            ?>
            </h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Embu Campus</li>
            </ol>
          </div>
        </div>


<!-- start -->
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Admission No</th>
      <th scope="col">Name</th>
      <th scope="col">Campus</th>
      <th scope="col">Course</th>
      <th scope="col">Course Duration</th>
      <th scope="col">Phone No</th>
      <th scope="col">Email</th>
      <th scope="col">Fees Paid</th>
      <th scope="col">Status</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <?php
   
    $feedback="SELECT * from students WHERE campus = 'Embu' ORDER BY studentid DESC  LIMIT 10 ";
      $rest= mysqli_query($con,$feedback);
      while($rows= mysqli_fetch_assoc($rest)){
         ?> 
         <tr>
            <td> <?php echo $rows['adminno'];  ?></td>
            <td> <?php echo $rows['fname']." ".$rows['lname'];  ?></td>
            <td> <?php echo $rows['campus'];  ?></td>
            <td> <?php echo $rows['course'];  ?></td>
            <td> <?php echo $rows['course_duration'];  ?></td>
            <td> <?php echo $rows['tel'];  ?></td>
            <td> <?php echo $rows['email'];  ?></td>
            <td> <?php echo $rows['fees_paid'];  ?></td>
            <?php if( $rows['status']== 'Active')  { ?>
            <td> <a href="update.php?GetID=<?php echo $rows['studentid']  ?>" class="btn btn-success" ><?php  echo $rows['status']; ?></td> 
              <?php } else { ?>
               <td> <a href="update.php?GetID=<?php echo $rows['studentid']  ?>" class="btn btn-danger" disabled ><?php  echo $rows['status']; ?></td>  <?php }  ?>
            <td> <a href="view.php?GetID=<?php echo $rows['studentid']  ?>" class="btn btn-primary"  >View</td>
             <td> <a href="edit.php?GetID=<?php echo $rows['studentid']  ?>" class="btn btn-primary"  >Edit</td>
            

         </tr> 








<?php
}









  ?>

<!-- end -->

</table>


<div class="row">
        <hr>
        <center> <h3 style="color: blue">Campus Chat</h3> </center> 

  <div class="col-sm-5">


 <form action="" method="post">
    <div class="col-sm-6 form-group">
                <label>Message To:</label>
                <select name=" message_to"  class="form-control" required>
                <option >Select Campus</option>
                <option value="Machakos">Machakos</option>
                <option value="Kitui">Kitui</option>
              </select>
              </div>
               <div class="col-sm-6 form-group">
                <label>Message From:</label>
                <select name=" message_from"  class="form-control" required>
                <option >--Select--</option>
                <option value="Nairobi">Nairobi</option>
                
              </select>
              </div>  
       <textarea class="form-control" name="message" rows="3" placeholder="Write Your Message..."required></textarea>
       <input type="submit" name="feedback" value="Submit" class="btn btn-primary">
    </form> 
    

  </div>
  <div class="col-sm-7">


    <?php
                                  if(isset($_POST['feedback'])){
                                 
                                  $message= $_POST['message']; 
                                  $message_from = $_POST['message_from']; 
                                  $message_to = $_POST['message_to'];
                                  $feedback="SELECT * from users ";
                                  $rest= mysqli_query($con,$feedback);
                                  if($rows= mysqli_fetch_assoc($rest)){
                               
                                $qry=mysqli_query( $con," INSERT INTO `users` ( `message`, `user_name`, `pass`, `status`, `message_from`, `message_to`) VALUES ('$message', '".$rows['user_name']."', '".$rows['pass']."', 'Unread', '$message_from','$message_to')" );
                                  if ($qry){
                                    echo "Your Message was Successfully Submitted";
                                   
                                  } else{
                                    echo "Mistake";
                                  }
                                    
                                    }   
                                                   
                                    }                      


                                     ?>  


                                     <hr>

                                     <table class="table table-striped table-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">To</th>
                                                  <th scope="col">Time</th>
                                                  <th scope="col">From</th>
                                                  <th scope="col">Message</th>
                                                  <th scope="col">Status</th>
                                                  <th scope="col">Click to Read</th>
                                                </tr>
                                       </thead>
                                      <?php

                                  $feedback="SELECT * from users WHERE status ='unread' ";
                                  $rest= mysqli_query($con,$feedback);
                                  if($rows= mysqli_fetch_assoc($rest)){
                                    $password = $rows['pass'];
                                     $user = $rows['user_name'];
                                     $message_from = $rows['message_from'];
                                     $message_from = $rows['message_to'];
                               $qrt='SELECT * from users WHERE message_to ="Nairobi"    and status = "Unread" ORDER BY id DESC  LIMIT 3';
                                    $result= mysqli_query($con,$qrt);
                                    while($row= mysqli_fetch_assoc($result)){ ?>

                                        <tr>
            <td> <?php echo $row['message_to'];  ?></td>
            <td> <?php echo $row['created_at'];  ?></td>
            <td> <?php echo $row['message_from'];  ?></td>
            <td> <?php echo $row['message'];  ?></td>
            <td> <button class="btn btn-success" >  <?php echo $row['status'];  ?></button></td>
             <td> <a href="edity.php?GetID=<?php echo $row['id']  ?>" class="btn btn-primary"  >Edit </td>
            

         </tr> 

                                     <?php

                                    }
                                  }
                                 



                               ?>  

</table>



   <table class="table table-striped table-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">To</th>
                                                  <th scope="col">Time</th>
                                                  <th scope="col">From</th>
                                                  <th scope="col">Message</th>
                                                  <th scope="col">Status</th>
                                                  <th scope="col">Click to Read</th>
                                                </tr>
                                       </thead>
                               
                                <?php

                                
                                    $password = $rows['pass'];
                                     $user = $rows['user_name'];
                                     $message_from = $rows['message_from'];
                                      $message_from = $rows['message_to'];
                               $qrt='SELECT * from users WHERE message_to ="Nairobi"   and status = "read" ORDER BY id DESC  LIMIT 3';
                                    $result= mysqli_query($con,$qrt);
                                    while($row= mysqli_fetch_assoc($result)){ ?>

                                        <tr>
            <td> <?php echo $row['message_to'];  ?></td>
            <td> <?php echo $row['created_at'];  ?></td>
            <td> <?php echo $row['message_from'];  ?></td>
            <td> <?php echo $row['message'];  ?></td>
            <td> <button class="btn btn-success" >  <?php echo $row['status'];  ?></button></td>
             <td> <a href="edity.php?GetID=<?php echo $row['id']  ?>" class="btn btn-primary" disabled >Edit</td>
            

         </tr> 

                                     <?php

                                    }
                                  



                               ?>  
    


</table>

  </div>
</div>
      </section>

      
<a href=""></a>
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
 -->