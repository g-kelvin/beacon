<!-- start -->
<?php 

$con= mysqli_connect("localhost","kasaranicatering", "QbEAeL5!r$,(","kasaranicatering_kasaranicatering");; 

if($con){
  if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];
    $qry=mysqli_query( $con," INSERT INTO `users` (`user_name`, `pass`) VALUES ( '$user_name', '$pass')" );
    if($qry)
    {
    	 
    	  echo "Account Creation Successful great".header('refresh:0; url=https://kasaranicateringcollege.co.ke/smis/index.php');
     
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


