<?php 

require_once('connection.php');

class usermanage{
    
    public $username;
    public $password;
    private $conn;

    function login($username,$password){

    	$this->username = $username;
    	$this->password = $password;


    	$db = new dbconnection();

    	$conn = $db->startconnection();

    	$query = $conn->prepare("select * from login where username = ?");

    	$query->bind_param("s",$this->username);

    
    	// check whether the above query runs

    	if($query->execute()){

    		$result = $query->get_result();

    		$result = mysqli_fetch_assoc($result);

    		$dbpass = $result['password'];

    		if(password_verify($this->password,$dbpass)){


    			return 1;


    		}else{

    			// if the password is wrong
    			return 0;

    		}

    	}else{

    		// if the login query doesn't run 


    		return 0;

    	}

    
	// end of login fucntion
    }
   
 // end of usermanage class   
}



 ?>