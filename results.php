<?php
include("functions/connect_mysql/connect_mysql.php");
include("functions.php");
include("functions/getProducts/getCats.php");
include("functions/getProducts/getCatPro.php");
include("functions/getSearch_query/getSearch_query.php");
?>

<html>
	<head>
		<title>Aschente</title>
		<link rel="stylesheet" href="style.css">
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
				  
				  

					<li style="float:right"><a class="active" href="login.php">Sign in</a></li>


				  <form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search"/>
	
					</form>
					

				  
				  
				</ul>
				
			</div>
			<!-----------------------Menu bar-------------------------->
			
			<!-----------------------Content-------------------------->

			<div class="content">
				
				
				<div class=products>
					<div id="product_box">
					<?php getSearch_query(); ?>
						
						<?php getCatPro(); ?>

					</div>
				</div>
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