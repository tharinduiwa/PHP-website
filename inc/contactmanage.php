<?php

require_once('connection.php');

class contactmanage{

public $fname;
public $email;
public $phone;
public $message;

function addmessage(){

	$db = new dbconnection();
    $conn = $db->startconnection();

    $query = $conn->prepare("insert into messages(`fullname`,`phone`,`email`,`message`) values(?,?,?,?)");

    $query->bind_param("ssss",$this->fname,$this->email,$this->phone,$this->message);

    if($query->execute()){

    	// if the message is added to the database

    	$result = $query->get_result();

    	// return the result    	

    	return 1;



    }else{

    	// if the message is not added to the database


    	return 0;


    }

// end of add message function

}


function getmessages(){
    
    
	$db = new dbconnection();

    $conn = $db->startconnection();


    $query = $conn->prepare("select * from messages");


    if($query->execute()){

    	// if the images are retrieved from db

    	$result = $query->get_result();

    	// return the result    	

    	return $result;



    }else{

    	// if the images didn't retrieved


    	return 0;


    }
    
    
}


}

?>