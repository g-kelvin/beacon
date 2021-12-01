
<?php
include "config.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Nairobi Precision Community College - (Cyber cafe services , Computer packages, Graphics design classes , Accounting packages , Photography & Film , DJ Classes, Driving Academy ) ">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Nairobi Precision Community College - (Cyber cafe services , Computer packages, Graphics design classes , Accounting packages , Photography & Film , DJ Classes, Driving Academy ) ">
  <link rel="shortcut icon" href="../assets/img/favicon.png">

  <title>Nairobi Precision Community College - (Cyber cafe services , Computer packages, Graphics design classes , Accounting packages , Photography & Film , DJ Classes, Driving Academy ) </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="user.php" method="post">
      <div class="login-wrap">

       <center>
         <img src="../assets/img/smis-01.png" width="150">
       </center><br>



        <!-- <p class="login-img"><i class="icon_lock_alt"></i></p> -->
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="user_name" class="form-control" placeholder=" Enter Username (E.G Nairobi)" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="pass" class="form-control" placeholder="Enter Password">
        </div>
        <button class="btn btn-info btn-lg btn-block" type="submit" name="submit">Create Account</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
         
           <a href="softwaretechn.co.ke" style="color: white"> <strong> Software Technology Kenya </strong>  </a>
        </div>
    </div>
  </div>


</body>

</html>
