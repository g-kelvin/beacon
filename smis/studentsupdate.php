<?php
  
include "config.php"; 

error_reporting(E_ALL);

    $query = "SELECT * FROM students";

     if(isset($_POST['update']))
     {
        $studid = $_POST['studentid'];
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
        $admitted_by= $_POST['admitted_by'];


   

        $query = "UPDATE students  set fname = '$fname', sname = '$sname', lname = '$lname', fschool = '$fschool', nemis = '$nemis', cert = '$cert', address = '$address' , town = '$town' , county = '$county' ,  postal = '$postal' , residence = '$residence', disability = '$disability', specify = '$specify', grade = '$grade' , class = '$class' , dob = '$dob' , religion = '$religion' ,  talent = '$talent' , campus = '$campus' , assessment = '$assessment' , paid_by = '$paid_by' , dateofadmin = '$dateofadmin' , gender = '$gender' , pfname = '$pfname' , psname = '$psname', plname = '$plname', active1 = '$active1', active2 = '$active2', active3 = '$active3', email1 = '$email1' , email2 = '$email2',  idno = '$idno' , occupation = '$occupation', 
        office = '$office', fees = '$fees' , mpesa = '$mpesa', admitted_by = '$admitted_by' , additional = '$additional'  where studentid = '$studid' ";

        $result = mysqli_query($con, $query);
        if($result){
          header('location: display.php');
            // echo "wait";
            
        }
        else
        {
            echo "please check ur query";
        }

     }
     else
     {
        echo "fail";
     }
    
    


  ?>


     