<?php
include("functions.php");
include("functions/getProducts/getCats.php");
include("functions/product_details/product_details.php");
?>

<html>
	<head>
		<title>Aschente</title>
		<link rel="stylesheet" href="details.css">
	</head>
	<body>
	
	<!--Connect to MySQL-->
		<?php 
		$con = mysqli_connect("localhost","root","","aschente"); //connect to database
		if (!$con){
			die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
		}
		?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<div class="wrapper">
		
		
		
		
		
		
		
			<div class="heading">
				<h1>Ashcente</h1>
			</div>
			
			
			
			
			
			
			
			
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
				  
				  <input type="text" name="search" placeholder="Search..">
				  
				  
				</ul>
				
			</div>
			
			
			
			
			
			
			
			
			
			<!--
			<div class="sidebar">
				sidebar
			</div>
			-->
			
			
			
			
			
			
			
			
			
			<div class="content">
				<div class=products>
				<?php product_details();?>
				</div>
			</div>
			
			
			
			
			
			
			
			
			<div class="footer">
				Aschente Pte Ltd.
			</div>
			
			
			
			
			
			
			
			
		</div>
	</body>
</html>