<?php

  session_start();

 if($_SESSION['login']=="true"){

 	if(isset($_POST['submit'])){

 		require_once('inc/newsmanage.php');

 		$obj = new newsmanage();

 		$obj->title = $_POST['title'];
 		$obj->img_url = $_FILES['img_url'];
 		$obj->desc = $_POST['desc'];

 		$result = $obj->addnews();

 		if($result==1){

 			header("location:news.php");

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

				<form style="padding: 20%;" class="form" action="addnews.php" method="POST" enctype="multipart/form-data">
				<label style="display: block; font-size: larger; font-family:sans-serif;  font-weight: bolder;">ADD NEWS</label>
				 <input class="form-control" type="text" name="title" required="" placeholder="news title">
				 <input class="form-control" type="text" name="desc" required=""  placeholder="description">
				 <input type="File" name="img_url" class="form-control" required="" placeholder="image url">
				 <input class="form-control" type="submit" name="submit">
			</form>
			

	</div>

</div>