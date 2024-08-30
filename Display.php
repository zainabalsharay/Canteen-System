
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Canteen</title>	
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include "header.html";

        include'connect.php';

            
    $m=$_POST['meal'];
    $d=$_POST['drink'];
    $q1=$_POST['quantity1'];
    $q2=$_POST['quantity2'];

	$sql="select * from items where id=$m limit 1";
	$data=mysqli_query($conn,$sql);
    $meal= mysqli_fetch_array($data);
	$sql="select * from items where id=$d limit 1 ";
	$data=mysqli_query($conn,$sql);
    $drink= mysqli_fetch_array($data);


    $totalPrice=$q1*$meal['price']+$q2*$drink['price'];
   
        ?>
	
	
     	<div class="canteen_form" >
			
			
						<h1 style="margin-top:180px">Total Price : <?php  echo$totalPrice; ?></h1><br>
                       					
					
				<div class="row" style="justify-content:space-around;padding:0%;margin:1%">
				    <div>
                        <h1 style="margin-top:10px"> Meal </h1><br>
                        <img src="images/<?php  echo$meal['photo']; ?>" height="370px" width="260px">
                         <h1 style="color:#49063a;margin-top:10px"> <?php  echo$meal['name']; ?></h1><br>
                    
                     </div>
                     <div >
                         <h1 style="margin-top:10px">Drinks</h1><br>
                         <img src="images/<?php  echo$drink['photo']; ?>" height="370px" width="260px">
                        <h1 style="color:#49063a;margin-top:10px"> <?php  echo$drink['name']; ?></h1><br>
					</div>
					
				</div>
		</div>
	

	</body>
</html>
