<?php
include("functions/connect_mysql/connect_mysql.php");
include("functions/getProducts/getCats.php");
include("functions/new_product/selectCategories.php");
include("functions/new_product/insert_post.php");
?>

<html>
	<head>
		<title>Aschente</title>
		<link rel="stylesheet" href="user_index.css">
	</head>
	<body>
	
	<!--Connect to MySQL-->
		<?php connect_mysql();?>
	
	
	
		<div class="wrapper">
		
		
		
		
			<!-----------------------Header-------------------------->
		
		
			<div class="heading">
				<h1>Aschente</h1>
			</div>
			<!-----------------------Header-------------------------->
			
			
			
			
			<!-----------------------Menu bar-------------------------->
			
			
			<div class="menubar">
				<ul>
				  <li><a class="active" href="index.php">Home</a></li>
				  <li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Categories</a>
						<div class="dropdown-content">
							<ul id="Categories">
								<?php getCats(); ?>
								
							<ul>
						</div>
				  </li>
				  <li><a href="contact.php">Contact us</a></li>
				  <li><a href="about.php">About</a></li>
				</ul>
				
			</div>
			<!-----------------------Menu bar-------------------------->
			
			
			<!-----------------------Content-------------------------->
			<div class="content">
	<form action="user_index.php" method="post" enctype="multipart/form-data">
		<table align="center">
		
			<tr>
				<td><h2 style="font-family:arial">Add Product</h2></td>
			</tr>
			
			<tr>
				<td style="font-family:arial">Product Title:</td>
				<td><input type="text" name="title" size="60" required/></td>
			</tr>
			<tr>
				<td style="font-family:arial">Product Description:</td>
				<td><textarea name="description" cols="60" rows="10" required></textarea></td>
			</tr>
			<tr>
				<td style="font-family:arial">Product Image:</td>
				<td><input type="file" name="image" required/></td>
			</tr>
			<tr>
			<tr>
				<td style="font-family:arial">Category:</td>
				<td>
					<select name="category_id">
						<option style="font-family:arial" required>Select a Category</option>
						<?php selectCategories();?>
					</select>
				</td>
			</tr>
			<tr>
				<td style="font-family:arial">Price: $</td>
				<td><input type="text" name="price"required/></td>
			</tr>
			<tr>
				<td colspan"8"><input type="submit" name="insert_post" value="Submit"required/></td>
			</tr>
		</table>
	</form>
<?php insert_post();?>
			</div>
			<!-----------------------Content-------------------------->

			<!-----------------------Footer-------------------------->

			<div class="footer">
				<h1>Aschente Pte Ltd.</h1>
			</div>
			
			<!-----------------------Footer-------------------------->

		</div>
	</body>
</html>