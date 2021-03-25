<?php

require_once('connection.php');

class gallerymanage{


public $img_url;
 public $conn;

function getimages(){

	$db = new dbconnection();

    $conn = $db->startconnection();


    $query = $conn->prepare("select * from gallery");


    if($query->execute()){

    	// if the images are retrieved from db

    	$result = $query->get_result();

    	// return the result    	

    	return $result;



    }else{

    	// if the images didn't retrieved


    	return 0;


    }


// end of get images function
}


function addphoto(){
    
    $baselocation = 'img/gallery/';

   if($this->img_url['type']=='image/jpeg'||$this->img_url['type']=='image/png'){

        $destination = $baselocation.$this->img_url['name'];
        
	   if(move_uploaded_file($this->img_url['tmp_name'],$destination)){

      $db = new dbconnection();

    $conn = $db->startconnection();

    $query = $conn->prepare('INSERT INTO `gallery`(`img_url`) VALUES (?) ');

    $query->bind_param("s",$destination);

    if($query->execute()){

      return 1;

    }else{

      return 0;

    }



    }else{

      // if the image is not moved correctly
      return 0;

    }

   }else{

    // if the image is not of the type png or jpeg
    return 0;

   }

    
}


function deletephoto($id){
    
    $db = new dbconnection();

    $conn = $db->startconnection();


    $query = $conn->prepare("DELETE FROM `gallery` WHERE `gid` = ?");

    $query->bind_param("s",$id);

    if($query->execute()){
      return 1;
    }else{

      return 0;

    }
    
}

// end of gallerymanage class

}


?>