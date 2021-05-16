<?php
$Name = filter_input(INPUT_POST,'Name');
$email = filter_input(INPUT_POST,'email');
$course = filter_input(INPUT_POST,'course');
$number = filter_input(INPUT_POST,'number');
$complaint = filter_input(INPUT_POST,'complaint');
$suggestion = filter_input(INPUT_POST,'suggestion');
$date = filter_input(INPUT_POST,'date');



  $host = "localhost:3307";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "insertdb";

// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
{
 die('Connect Error ('. mysqli_connect_errno() .') '
 . mysqli_connect_error());
}
else
{
 $sql = "INSERT INTO userdata (Name,email,course,number,complaint,suggestion,date) VALUES ('$Name','$email','$course','$number','$complaint', '$suggestion','$date')";
 if ($conn->query($sql))
 {
  echo '<h2 align="center"><a href="track.php">Track your Complaint!</a></h2>'; '<br />';
echo '<h2 align="center"><a href="logout.php">Logout</a></h2>'; 
 }
 else
 {
  echo "Error: ". $sql ."s
  ". $conn->error;
  }
$conn->close();
}
?>