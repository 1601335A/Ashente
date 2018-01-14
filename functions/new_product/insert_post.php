<?php
function insert_post(){
	if(isset($_POST['insert_post'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$category_id = $_POST['category_id'];
		
		$image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		move_uploaded_file($image_tmp,"product_images/$image");
		
		$insert_product = "insert into products (category_id,title,price,description,image) values ('$category_id','$title','$price','$description','$image')";
		
		$insert_product = mysqli_query($con, $insert_product);
		

		
	}
	}
?>