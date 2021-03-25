<?php 

class dbconnection{
    
    function startconnection(){
        $conn = mysqli_connect('localhost','root','','php');

        return $conn;

    }
    
}



 ?>