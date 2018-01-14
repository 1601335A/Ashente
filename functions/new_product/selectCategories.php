<?php
function selectCategories(){
	$con = mysqli_connect("localhost","root","","aschente");

							
	global $con;
	$get_cats = "select * from categories";
	$run_cats = mysqli_query($con, $get_cats);
								
	while ($row_cats=mysqli_fetch_array($run_cats)){
	$cat_id = $row_cats['id'];
	$cat_name = $row_cats['name'];
									
									
	echo "<option value='$cat_id'>$cat_name</option>";
	}
}
?>