<?php

require_once('connection.php');

class productsmanage{

    public $title;
    public $pdesc;
    public $img_url;
    public $category;
    public $price;


function getproducts(){

	$db = new dbconnection();

    $conn = $db->startconnection();


    $query = $conn->prepare("select * from products");


    if($query->execute()){

    	// if the products are retrieved from db

    	$result = $query->get_result();

    	// return the result    	

    	return $result;



    }else{

    	// if the news didn't retrieved


    	return 0;


    }


// end of get products function
}


function deleteproduct($id){

    $db = new dbconnection();

    $conn = $db->startconnection();


    $query = $conn->prepare("DELETE FROM `products` WHERE `pid` = ?");

    $query->bind_param("s",$id);

    if($query->execute()){
      return 1;
    }else{

      return 0;

    }


}



function addproduct(){

$baselocation = 'img/products/';

// check for image type
 if($this->img_url['type']=='image/jpeg'||$this->img_url['type']=='image/png'){

    $destination = $baselocation.$this->title.".png";

    if(move_uploaded_file($this->img_url['tmp_name'],$destination)){

        
    $db = new dbconnection();

    $conn = $db->startconnection();

    $query = $conn->prepare('INSERT INTO `products`(`title`, `pdesc`,`category`,`img_url`,`price`) VALUES (?,?,?,?,?) ');

    $query->bind_param("sssss",$this->title,$this->pdesc,$this->category,$destination,$this->price);

    if($query->execute()){

        return 1;

    }else{

        return 0;

    }

    }else{

        return 0;

    }

 }


}




// end of class

}


?>