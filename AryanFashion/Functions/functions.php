<?php

$db = mysqli_connect("localhost","root","","aryanfashion");



function getPro() {
				
				global $db;
				
			$get_products = "select * from products order by rand() LIMIT 0,6";
			$run_products = mysqli_query($db, $get_products);
			while ($row_products=mysqli_fetch_array($run_products)) {
			
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_cat = $row_products['cat_id'];
			$pro_brand = $row_products['brand_id'];
			$pro_desc = $row_products['product_desc'];
			$pro_price = $row_products['product_price'];
			$pro_image = $row_products['product_img1'];
			echo "
			<div id='single_product'>
			<h3>$pro_title</h3>
			
			<img src = 'admin_area/product_images/$pro_image' width='180' height='180' /><br>
			<p><b>Price: $pro_price Rs</b></p>
			<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			<a href='index.php?add_cart=$pro_id'><button style='float:right;'>Add To Cart</button></a>
			
			</div>
			";
			
			
			}

}

function getBrands() {

				global $db;

					$get_brands = "select * from brands";
					$run_brands = mysqli_query($db, $get_brands);
					while($row_brands=mysqli_fetch_array($run_brands)) {
					$brand_id = $row_brands['brand_id'];
					$brand_title = $row_brands['brand_title'];
					echo "<li><a href='index.php?=$brand_id'>$brand_title</a></li>";
					}
					


}





