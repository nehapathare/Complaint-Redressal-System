<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost:3307";
   $username = "root";
   $password = "";
   $databaseName = "insertdb";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $Id = $_POST['Id'];
   $status = $_POST['status'];
           
   // mysql query to Update data
   $query = "UPDATE `userdata` SET `status`='".$status."' WHERE `Id` = $Id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Status Updated';
   }else{
       echo 'Status not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

      <head>

        <title> UPDATE DATA </title>
<style>
input[type=number],input[type=text]{
width:100%;
padding:12px 20px;
margin:8px 0px;
box-sizing: border-box;
border:2px solid #09347a;
outline:none;
}
input[type=number]:focus,input[type=text]:focus{
background-color:#d9dce0;
}
#submit
{
background-color:#09347a;
color:white;
padding:15px 30px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:20px;
margin:4px 2px;
cursor:pointer;
}
#submit:hover{
background-color:#2b6dd8;
}
</style>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>


    
    <body>

        <form action="update.php" method="post">

            ID To Update: <input type="number" name="Id" required><br><br>

            Status:<input type="text" name="status" required><br><br>

            <input type="submit" name="update" value="Update status">

        </form>
<h2 align="Right" color:"Red"><a href="admin.php">Back to Previous Page</a></h2> 
    </body>


</html>
