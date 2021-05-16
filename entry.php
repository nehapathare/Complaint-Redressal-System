<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:adminlog.php?action=login");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Login Registration </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:1000px;">  
                <h3 align="center">Admin Login</h3>  
                <br />  
                <?php  
                echo '<h1 align="center">Welcome - '.$_SESSION["username"].'</h1>'; '<br />'; 
                echo '<h2 align="center"><a href="admin.php">See Records</a></h2>'; '<br />';
		echo '<h2 align="center"><a href="logout.php">Logout</a></h2>'; '<br />';
                ?>  
           </div>  
      </body>  
 </html>  