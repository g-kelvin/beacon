<?php 
	
	
include "config.php"; 


if($con)
	{
		
	$sql="SELECT * FROM students WHERE status = 'Active'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $x = 337 + $rowcount ;

 
  // Free result set
  mysqli_free_result($result);
  }
}
 // echo "TBA$x";
 	if(isset($_GET['GetID']))
 	{
 		$studid = $_GET['GetID'];
 		 $qry = "UPDATE students SET status='Active' , adminno='TBA$x' WHERE studentid=$studid";
 		$result = mysqli_query ($con, $qry);
 		if($result){
 			 header('refresh:0.1;url=display.php');
 		}
 		else
 		{
 			echo "Update Failed";
 		}
 	}

 ?>