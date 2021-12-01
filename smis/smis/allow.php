<?php 

$con= mysqli_connect("localhost","kasaranicatering", "QbEAeL5!r$,(","kasaranicatering_kasaranicatering");

if($con){
  if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];

    $qry =  "SELECT * FROM users where user_name = '$user_name' AND pass = '$pass'";
    
        $res = mysqli_query($con,$qry);
        if(mysqli_num_rows($res)>0){
            while ($row= mysqli_fetch_assoc($res)){
                echo "Login Successful".header('refresh:0; url=https://kasaranicateringcollege.co.ke/smis/home.php');}}
                else
                {
                 echo "<center style ='color: red'><h3><br><br>Kindly Try again</h3></center><br><br>".header('refresh:2; url=https://kasaranicateringcollege.co.ke/smis/index.php');
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
