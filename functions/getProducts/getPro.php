<?php
function getPro(){
	
	if(!isset($_GET['category_id'])){
	
	
	global $con;
	
	$get_pro = "SELECT * FROM products ORDER BY RAND()";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['id'];
		$pro_catid = $row_pro['category_id'];
		$pro_title = $row_pro['title'];
		$pro_desc = $row_pro['description'];
		$pro_img = $row_pro['image'];
		$pro_price = $row_pro['price'];
		
		echo "
			<div id='single_product'>
			
				<h3>$pro_title</h3>
				<img src='/finalassignment/product_images/$pro_img' width='180' height='180' />
				
				<p><b> $ $pro_price </b></p>
				
				<a href='details.php?id=$pro_id'> <button style='float:left'>Details</button></a>
				
				<a href='cart.php?id=$pro_id'> <button style='float:right;color:#67cbf7'>Add to Cart</button></a>
			
			</div>
		
		";
		}
	}
}
?>