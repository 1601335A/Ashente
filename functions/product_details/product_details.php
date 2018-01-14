<?php



function product_details(){
	
	$con = mysqli_connect("localhost","root","","aschente"); //connect to database
		if (!$con){
			die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
		}
		
				if(isset($_GET['id'])){
					
					$product_id = $_GET['id'];
					$get_pro = "select * from products where id='$product_id'";
	
					$run_pro = mysqli_query($con, $get_pro);
					
					while($row_pro=mysqli_fetch_array($run_pro)){
						$pro_id = $row_pro['id'];
						$pro_title = $row_pro['title'];
						$pro_desc = $row_pro['description'];
						$pro_img = $row_pro['image'];
						$pro_price = $row_pro['price'];
						
						echo "
							<div id='detail_product'>
							
								<h3>$pro_title</h3>
								<img src='/images/$pro_img' width='400' height='300' />
								
								<p><b> $ $pro_price </b></p>
								
								<p>$pro_desc </p> 
								
								<a href='index.php?id=$pro_id' class='details'> <button style='float:left'>Back</button></a>
								
								<a href='cart.php?id=$pro_id' class='cart'> <button style='float:right;color:#67cbf7'>Add to Cart</button></a>
							
							</div>
						
						";
					}
				}
				}
					?>