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

	$sql="select * from items where type=1";
	$meals=mysqli_query($conn,$sql);

	$sql="select * from items where type=0";
	$drinks=mysqli_query($conn,$sql);
	?>

	
	<div class="canteen_Title">
			 <h1> Canteen Information System</h1>
    
	</div>
	
		<div class="canteen_form" >
			
		
			<form action="Display.php" method="POST">
				
				<div class="row">
				    <div class="field">
						<label >Meals</label><br>
						<select name="meal" >
						<?php 
							while($row= mysqli_fetch_array($meals)){
								echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
							}
						
						?>
					    </select>
					</div>
					<div class="field">
						<label >Quantity</label>
						<input type="number" required name="quantity1" >
					</div>
				</div>
				<div class="row">
				    <div class="field">
					    <label >Drinks</label><br>
						<select name="drink" >
						<?php 
							while($row= mysqli_fetch_array($drinks)){
								echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
							}
						
						?>
					    </select>
					</div>
					<div class="field">
						
						<label >Quantity</label><br>
						<input type="number" required name="quantity2" >
					</div>
					
				</div>
				<input type="submit" value="Submit">
			</form>

			<?php 
	
			if(isset($_GET['msg'])) {
				$msg = $_GET['msg'];
				echo '<br><div class="msg" ><h3>'.$msg.'</h3></div>';
			}
			
			?>
		</div>
	

	</body>
</html>