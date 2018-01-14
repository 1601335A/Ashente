<?php



/*Get products from database and display on webpage*/



function newuser(){
		$query= $con->prepare("INSERT INTO users (id,first_name, last_name, email, username, password) VALUES
		(?,?,?,?,?,?)");
		$id='6';
		$first_name= 'admin';
		$last_name = 'ad';
		$email = 'admin1@email.com';
		$username = 'sex';
		$password = 'hehe';
		$query->bind_param('ssssss', $name,$first_name, $last_name, $email, $username,$password); //bind the parameters
		if ($query->execute()){  //execute query
		  echo "Query executed.";
		}else{
		  echo "Error executing query.";
		}
}
function search(){
	global $con;
	$get_cats = "select * from products";
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
		$pro_title = $row_cats['title'];

		
		
		echo "<li><a href='index.php?category_id=$pro_title'>$pro_title</a></li>";
	}
}

function searchbar(){
	if(isset($_GET['title'])){
		$cat_id=$_GET['title'];
	
	global $con;
	
	$get_cat_pro = "select * from products where title='$cat_id'";
	
	$run_cat_pro = mysqli_query($con, $get_cat_pro);
	
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
		$pro_id = $row_cat_pro['id'];
		$pro_catid = $row_cat_pro['category_id'];
		$pro_title = $row_cat_pro['title'];
		$pro_desc = $row_cat_pro['description'];
		$pro_img = $row_cat_pro['image'];
		$pro_price = $row_cat_pro['price'];
		
		echo "
			<div id='single_product'>
			
				<h3>$pro_title</h3>
				<img src='/finalassignment/images/$pro_img' width='180' height='180' />
				
				<p><b> $ $pro_price </b></p>
				
				<a href='details.php?id=$pro_id'> <button style='float:left'>Details</button></a>
				
				<a href='cart.php?id=$pro_id'> <button style='float:right'>Add to Cart</button></a>
			
			</div>
		
		";
		}
	}
}

function searchba(){
					$con = mysqli_connect("localhost","root","","aschente") or die("could not connect");
					$output='';
					if(isset($_GET['title'])){
						$searchq=$_GET['title'];
					
					$query = mysqli_query("select * from products where title like '%$searchq%'") or die("could not search");
					$count = mysql_num_rows($query);
					if($count==0){
						$output = 'There was no search results!';
					}else{
						while($row = mysqli_fetch_array($query)){
						$pro_id = $row['id'];
						$pro_catid = $row['category_id'];
						$pro_title = $row['title'];
						$pro_desc = $row['description'];
						$pro_img = $row['image'];
						$pro_price = $row['price'];
						echo "
							<div id='single_product'>
							
								<h3>$pro_title</h3>
								<img src='/finalassignment/images/$pro_img' width='180' height='180' />
								
								<p><b> $ $pro_price </b></p>
								
								<a href='details.php?id=$pro_id'> <button style='float:left'>Details</button></a>
								
								<a href='cart.php?id=$pro_id'> <button style='float:right'>Add to Cart</button></a>
							
							</div>
						
						";
						}
						
					}
					}
}
?>