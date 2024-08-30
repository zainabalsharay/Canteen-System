
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
	
	include "header.html";
	?>

	
	<div class="canteen_Title">
			 <h1> Canteen  System</h1>
			 <h1> Add Items</h1>
    
	</div>
	
		<div class="canteen_form" >
			
		
			<form  action = "save_items.php" method ="post">
				<div class="row">
					<div class="field">
						
						<label >Name</label><br>
						<input type="text" required name="name" >
					</div>
					<div class="field">
						<label >Photo</label><br>
						<input type="file" name="photo" ><br><br>
					</div>
					<div class="field">
						<label >Price</label><br>
						<input type="number" name="price" ><br><br>
					</div>
					
				</div>
				<div class="row">
					<div class="field">
						
						
						<label >Drinks</label><br>
						<select name="type" >
							<option value="1">Meal</option>
							<option value="0">Drink</option>
						</select>
						
					</div>
					<div class="field">
						
						
						<input type="submit" name="save" value="Save" style="width:100px ;height: 38px;color: #ffff;background-color:  rgb(3, 38, 71) ; "/>
						
					</div>
					
				</div>
				
			
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