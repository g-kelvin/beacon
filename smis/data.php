<?php 
include "config.php"; 
ini_set('display_errors', 1);
 
if($con){
    $sql="SELECT * FROM students where status ='Active' ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set.
  $rowcount=mysqli_num_rows($result);
  $x = 337 + $rowcount ;
  // Free result set
  mysqli_free_result($result);
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

    $fees = $_POST['fees'];
    $mpesa = $_POST['mpesa'];
    $additional= $_POST['additional'];

    echo "$mfname";


    $qry=mysqli_query( $con," INSERT INTO `students` (`studentid`, `fname`, `sname`, `lname`, `fschool`, `nemis`, `cert`, `address`, `town`, `county`, `postal`, `residence`, `disability`, `specify`, `grade`, `class`, `dob`, `religion`, `talent`, `campus`, `assessment`, `paid_by`, `dateofadmin`, `gender` , `pfname`, `psname`, `plname`, `active1`, `active2`, `active3`, `email1`, `email2`, `idno`, `occupation`, `office` , `fees`, `mpesa`, `additional`, `adminno`, `status` , `mfname`, `msname`, `mlname`, `mactive1`, `mactive2`, `mactive3`, `memail1`, `memail2`, `midno`, `moccupation`, `moffice` , `gfname`, `gsname`, `glname`, `gactive1`, `gactive2`, `gactive3`, `gemail1`, `gemail2`, `gidno`, `goccupation`, `goffice`) 

        VALUES (NULL, '$fname', '$sname', '$lname', '$fschool', '$nemis', '$cert', '$address', '$town', '$county', '$postal', '$residence', '$disability', '$specify', '$grade', '$class', '$dob', '$religion', '$talent', '$campus', '$assessment', '$paid_by', '$dateofadmin', '$gender' , '$pfname', '$psname', '$plname', '$active1', '$active2', '$active3', '$email1', '$email2', '$idno', '$occupation', '$office' , '$fees', '$mpesa', '$additional', 'TBA$x', 'Active' , '$mfname', '$msname', '$mlname', '$mactive1', '$mactive2', '$mactive3', '$memail1', '$memail2', '$midno', '$moccupation', '$moffice' , '$gfname', '$gsname', '$glname', '$gactive1', '$gactive2', '$gactive3', '$gemail1', '$gemail2', '$gidno', '$goccupation', '$goffice') " );

    if($qry)
    {
      header('location: display.php');
    }

    else{
      echo "Data Posting Error (Adm Number repeated)";
    }


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


