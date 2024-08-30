


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Add Items</title>	
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php 
	
	// include "header.html";

    include'connect.php';
	?>

   <div class="header">

   <nav>
    <a href=index.php><img src="logo.png" height="70px" width="60px"></a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="add-items.php">Add Items</a></li>
            <li><a href="items.php">Items </a></li>
        </ul>
    </div>
        	
    </nav>
	<div  style="text-align: center;">
			 <h1 style="font-size: 38px;color: #fff;"> Canteen  System</h1>
			 <h2 style="		color: #fff;"> Show Items</h2>
    
	</div>
    <div class=" row" style="margin-top: 120px; padding-bottom: 40px;">
        <?php


            $sql="select * from items";
            $data=mysqli_query($conn,$sql);

            echo "<table  border='1'>";
           
            if(!$data)
            echo "No data";
            echo "<tr>
                    <th style='width: 30px;'>  id </th>
                    <th style='width: 180px;'> name </th>
                    <th style='width: 180px;'>  Photo </th>
                    <th style='width: 180px;'> Price </th>
                </tr>";
            while($row= mysqli_fetch_array($data)){
            echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td> 
                        <td><img src='images/".$row['photo']."' height='90px' width='180px'></td>
                        <td>".$row['price']."</td>
                </tr>";
            }
            echo "";
            echo "</table>";

        ?>
    </div>
   </div>

	</body>
</html>

