<?php

  session_start();

 if($_SESSION['login']=="true"){

 	if(isset($_POST['submit'])){

 		require_once('inc/gallerymanage.php');

 		$obj = new gallerymanage();

 		$obj->img_url = $_FILES['img_url'];

 		$result = $obj->addphoto();

        if($result==1){

 			header("location:gallery.php");

 		}else{
 			alert("something went wrong");
 		} 		

 	}


 }else{

    header("location:index.php");

 }

?>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/addnews.css">


<div class="container">
	
		<div class="col-md-12">

				<form style="padding: 20%;" class="form" action="addphoto.php" method="POST" enctype="multipart/form-data">
				<label style="display: block; font-size: larger; font-family:sans-serif;  font-weight: bolder;">Add Image to Gallery</label>
				 <input style="margin-bottom:2%;padding:1%;" type="File" name="img_url" class="form-control" required="" placeholder="image url">
				 <input class="form-control" type="submit" name="submit">
			</form>
			

	</div>

</div>