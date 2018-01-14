<?php
include("functions.php");
include("functions/getProducts/getCats.php");
?>

<html>
	<head>
		<title>Aschente</title>
		<link rel="stylesheet" href="about.css">
	</head>
	<body>
	
	
	
	
		<div class="wrapper">
		
		
		
		
			<!-----------------------Header-------------------------->
		
		
			<div class="heading">
				<h1>Ashcente</h1>
			</div>
			<!-----------------------Header-------------------------->
			
			
			
			
			<!-----------------------Menu bar-------------------------->
			
			
			<div class="menubar">
				<ul>
				  <li><a class="active" href="index.php">Home</a></li>
				  <li class="dropdown"> 
					<a href="javascript:void(0)" class="dropbtn">Categories</a> <!--Dropdown for Categories-->
						<div class="dropdown-content">
							<ul id="Categories">
								<?php getCats(); ?> <!--Call getCats() function from functions.php-->
								
							<ul>
						</div>
				  </li>
				  <li><a href="contact.php">Contact us</a></li>
				  <li><a href="about.php">About</a></li>
				  
				  

					<li style="float:right"><a class="active" href="login.php">Sign in</a></li>
					<li style="float:right"><a class="active" href="user_index.php">Add Items</a></li>

				
				  <form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" style="display:block;"placeholder="Search"/>
	
					</form>
  
				</ul>
				
			</div>
			<!-----------------------Menu bar-------------------------->
			
			
			
			
			

			
			
			
			
			
			
			<!-----------------------Content-------------------------->
			
			<div class="content">
				<h1>Ashcente is the best</h1>
			</div>
			<!-----------------------Content-------------------------->
			
			
			
			<!-----------------------Footer-------------------------->
			
			
			
			<div class="footer">
				Aschente Pte Ltd.
			</div>
			
			<!-----------------------Footer-------------------------->
			
			
			
			
			
			
		</div>
	</body>
</html>