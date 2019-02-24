<?php
include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title> Aryan Fashion</title>
<link rel="icon" type="image/gif" href="images/site icon.png"  />
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>

<body>
	<div class="main_wrapper">
	<!-- Header starts from here-->
		<div class="header_wrapper">
		<img src="images/logowb.png" width="644" height="99" />
		<img src="images/banner.jpg" width="350" height="99"  />
		
		</div>
		<!-- Header ends-->
		<!-- Navigatio bar starts from here-->
	  <div id="navbar">
	  		<ul id="menu">
				<li ><a href="#">Home</a></li>
				<li><a href="#">All Items</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
				 
				
			
			</ul>
			  <div id="form">
				<form method="get" action="result.php" enctype="multipart/form-data">
				
					<input type="text" name="user_query" placeholder="search a Product" />
					<input type="submit" name="search" value="search" />	
				</form>
				</div>
			
	  </div>
	 
	  <!-- Navigatio bar ends -->
		<div class="content_wrapper">
		
			<div id="left_sidebar">
			
				<div id="sidebar_title">Categories</div>
				
				
				<ul id="cats">
					<?php
					$get_cats = "select * from categories";
					
					$run_cats = mysqli_query($con, $get_cats);
					while($row_cats=mysqli_fetch_array($run_cats)) {
					$cat_id = $row_cats['cat_id'];
					$cat_title = $row_cats['cat_title'];
					echo "<li><a href='index.php?=$cat_id'>$cat_title</a></li>";
					}
					
					?>
					
		
			</ul>
			<div id="sidebar_choice">Brands</div>
			<ul id="Ar">
				<?php 
					$get_brands = "select * from brands";
					$run_brands = mysqli_query($con, $get_brands);
					while($row_brands=mysqli_fetch_array($run_brands)) {
					
					$brand_id = $row_brands['brand_id'];
					$brand_text = $row_brands['brand_text'];
					echo "<option value='$brand_id'>$brand_text</option>";
					}
				?>
				
				</ul>
				<center>
			<img src="images/logowb.png" width="150" height="50" />
			</center>
			</div>
			
			
			<div id="right_content">
				<div id="headline">
				<div id="headline_content">
				<b>Welcome Guest!</b>
				<b style="color:#FFFF00;">Shopping cart</b>
				<span>- Items: - Price:</span>
				
				</div>
			</div>
			<div id="products_box">
		<?php getPro();
		?>
			
			</div>
			</div>
			
		
		<div class="footer">
		
		<h1 style="color:#000000; padding-top:30px; text-align:center; font-size:40;">&copy; 2018 - By Rahul Pandey</h1>
		
		</div>


</div>

</body>

</html>
