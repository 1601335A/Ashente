<?php
/*Get products from database and display on webpage on different categories*/
function getCatPro(){
	
	if(isset($_GET['category_id'])){
		$cat_id=$_GET['category_id'];
	
	global $con;
	
	$get_cat_pro = "select * from products where category_id='$cat_id'";
	
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
				
				<a href='cart.php?id=$pro_id'> <button style='float:right;color:#67cbf7'>Add to Cart</button></a>
			
			</div>
		
		";
		}
		

		
	}
}
?>