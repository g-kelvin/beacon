<?php 
$con= mysqli_connect("localhost","root","","nairobi_precision");

if($con){
  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $town= $_POST['town'];
    $county = $_POST['county'];
    $postal = $_POST['postal'];
    $grade = $_POST['grade'];
    $course = $_POST['course'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $course_duration = $_POST['course_duration'];
    $campus = $_POST['campus'];
    $idno = $_POST['idno'];
    $paid_by = $_POST['paid_by'];
    $dateofadmin = $_POST['dateofadmin'];
    $gender = $_POST['gender'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $fees_paid = $_POST['fees_paid'];
    $additional= $_POST['additional'];


    $qry=mysqli_query( $con," INSERT INTO `students` (`studentid`, `fname`,`lname`, `address`, `town`, `county`, `postal`, `grade`, `course`, `dob`, `religion`, `course_duration`, `campus`, `idno`, `paid_by`, `dateofadmin`, `gender`, `tel`, `email`, `adminno`, `additional` , `status`) VALUES (NULL, '$fname', '$lname', '$address', '$town', '$county', '$postal', '$grade', '$course', '$dob', '$religion', '$course_duration', '$campus', '$idno', '$paid_by', '$dateofadmin', '$gender', '$tel', '$email', '$adminno', '$additional' , 'pending' )" );
    if($qry)
    {
      header('location: https://kasaranicateringcollege.co.ke/smis/display.php');
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


