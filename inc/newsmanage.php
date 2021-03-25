<?php

require_once('connection.php');

class newsmanage{

	public $title;
	public $desc;
	public $img_url;
 	private $conn;

function addnews(){

  $baselocation = 'img/news/';

   if($this->img_url['type']=='image/jpeg'||$this->img_url['type']=='image/png'){

       $destination = $baselocation.$this->title.".png";

    if(move_uploaded_file($this->img_url['tmp_name'],$destination)){


      $db = new dbconnection();

    $conn = $db->startconnection();

    $query = $conn->prepare('INSERT INTO `news`(`title`, `desc`, `img_url`) VALUES (?,?,?) ');

    $query->bind_param("sss",$this->title,$this->desc,$destination);

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

    return 0;

   }


}




function getnews(){

	$db = new dbconnection();

    $conn = $db->startconnection();


    $query = $conn->prepare("select * from news ORDER BY DATE DESC");


    if($query->execute()){

    	// if the news are retrieved from db

    	$result = $query->get_result();

    	// return the result    	

    	return $result;



    }else{

    	// if the news didn't retrieved


    	return 0;


    }


// end of get news function
}



function deletenews($id){

    $db = new dbconnection();

    $conn = $db->startconnection();


    $query = $conn->prepare("DELETE FROM `news` WHERE `nid` = ?");

    $query->bind_param("s",$id);

    if($query->execute()){
      return 1;
    }else{

      return 0;

    }



}




// end of news manage class

}


?>