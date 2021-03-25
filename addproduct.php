<?php
session_start();

 if($_SESSION['login']=="true"){

 	if(isset($_POST['submit'])){

		require_once('inc/productsmanage.php'); 

		$obj = new productsmanage();	

		$obj->title = $_POST['title'];
		$obj->pdesc = $_POST['desc'];
		$obj->img_url = $_FILES['img_url'];
		$obj->category = $_POST['category'];
		$obj->price = $_POST['price'];
		
		$result = $obj->addproduct();

		if($result==1){

			header("location:products.php");

		}else{

			echo 'alert("unable to add product")';

		}


 	}


 }else{

    header("location:index.php");

 }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Items</title>
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>


<div class="container" style="display:flex; left: 50%;">


	<div class="col-md-12">
		

			<form class="form" style="padding: 10%;" action="addproduct.php" method="POST" enctype="multipart/form-data">
			<label style="display: block; font-size: larger; font-family:sans-serif;  font-weight: bolder;">Add Items To Shop</label>	
			<label>Product Title</label>
			<input type="text" class="form-control" required="text" name="title">
			<label>Product Desciption</label>
			<input type="text" style="height: 10rem;" class="form-control" required="text" name="desc">
			<label>Product Image</label>
			<input type="File" class="form-control" name="img_url">
			<label>Product Category</label>
			<select style="display: block;" name="category"  required="text" class="form-control">
				<option>FROCK</option>
				<option>SHIRT</option>
				<option>GAUN</option>
			</select>
			<label>Product Price In LKR</label>
			<input required="number"  style="width: 30%;" type="number" class="form-control" name="price">
			<input style="margin-top: 2%;" type="submit" name="submit" class="btn btn-primary form-control">
		</form>


	</div>

	
</div>



</body>
</html>