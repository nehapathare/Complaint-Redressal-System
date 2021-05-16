<?php
 
  $con = mysqli_connect('localhost:3307','root','','insertdb');
  
  if($con == true)
  {
    echo "Complaint Submitted successfully";
  }
  else
  {
    echo "Error";
  }

?>