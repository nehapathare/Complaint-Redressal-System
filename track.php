<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `userdata` WHERE CONCAT(`Id`,`course`, `number`,`complaint`, `status`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `userdata`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost:3307", "root", "", "insertdb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
<h1 align="center"> Complaints Tracking</h1><h2 align="Right" color:"Red"><a href="logout.php">Logout</a></h2> 

        <style>
        table
	{
		border-collapse: collapse;
		width: 100%;
		color: #588c7e;
		font-family: monospace;
		font-size: 25px;
		text-align: center;
        }
	th 
	{
		background-color: #588c7e;
		color: white;
	}
tr:nth-child(even) {background-color: #f2f2f2}
        </style>
    </head>
    <body>
        
        <form action="track.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
 		    <th>course</th>
                    <th>number</th>
		    <th>complaint</th>
		    <th>status</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Id'];?></td>
		    <td><?php echo $row['course'];?></td>
                    <td><?php echo $row['number'];?></td>
		    <td><?php echo $row['complaint'];?></td>
		    <td><?php echo $row['status'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>

