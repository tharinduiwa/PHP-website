<?php
if(isset($_POST['submit'])){
        
    	require_once('inc/contactmanage.php');

 		$obj = new contactmanage();

        $obj->fname = $_POST['name'];
        $obj->email = $_POST['email'];
        $obj->phone = $_POST['mobile'];
        $obj->message = $_POST['message'];

 		$result = $obj->addmessage();

        if($result==1){

 			echo '<script>alert("MESSAGE SEND SUCCESSFULLY")</script>'; 

 		}else{
 		    echo '<script>alert("MESSAGE SEND FAILED")</script>'; 
 		} 	
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT FORM</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script  src="js/jquery-3.4.1.min.js"></script>
    <script src="js/index.js"></script>

</head>
<body >
    
    <div class="navbar">  
        <div class="mobilenav">
          <a class="brand" href="#">The Styles Store</a>
          <img class="navbar-button" src="img/navbutton.png" style="width: 20px; height: 20px;" id="toggler" alt="navbutton">
          
        </div>
    
       
        <ul class="nav-list">
         
          <li class="nav-item brandname">
          <a class="brand" href="index.html">The Styles Store</a>
          </li>
    
          <li class="nav-item">
          <a class="nav-links" href="index.html">Home</a>
          </li>
    
          <li class="nav-item">
            <a class="nav-links"  href="gallery.html">Gallery</a>
          </li>
    
          <li class="nav-item">
            <a class="nav-links" href="products.html">Shop</a>
          </li>
    
          <li class="nav-item">
            <a class="nav-links" href="news.html">News</a>
          </li>
          
          <li class="nav-item">
          <a  class="nav-links" href="aboutus.html">About </a>
          </li>
    
          <li class="nav-item">
          <a class="nav-links currentpage" href="contact.html">Contact </a>
          </li>
    
          <li class="nav-item cart">
            <a  class="nav-links" href="#">Register</a>
            <a class="nav-links" href="#">Sign In</a>
            
            <span class="cartitems"><img class="cartimg" src="img/cart.svg"  style="width: 60px;  height:30px;" alt="cart">0</span>      
          </li>
    
    
        </ul>
    
        <div class="foldable">
          <ul>
            <li><a class="nav-links" href="index.html">Home</a></li>
            <li><a class="nav-links" href="aboutus.html">About</a></li>
            <li><a class="nav-links" href="gallery.html">Gallery</a></li>
            <li><a class="nav-links" href="products.html">Shop</a></li>
            <li><a class="nav-links currentpage" href="contact.html">Contact</a></li>
            <li><a class="nav-links" href="news.html">News</a></li><li class="cart"><a  class="nav-links" href="#">Register</a><a class="nav-links" href="#">Sign In</a><span class="cartitems"><img class="cartimg" src="img/cart.svg"  style="width: 60px;  height:30px;" alt="cart">0</span>      
             
            </li>
          </ul>
        </div>
    
    </div>

   <br>

   <h2 class="text">Feel free to Contact Us</h2>

    <div class="contactdiv">


        <div class="contactdetails"> 
          <p>Please send us a Message we will get back to you as soon as possbile</p>
         
            <span class="icon"><i>Shipping & ReturnesPhone</i></span>
            <span class="icon"><i>Phone: +94 117 258 258</i></span>
            <span class="icon"><i> Email: support@thesstylesstore.com</i></span>
            <span class="icon"><i>Informations</i></span>
            <span class="icon"><i>Phone: +94 117 258 259</i></span>
          
        </div>

        <form class="contactform" action="contact.php" method="POST">

            <input style="display: block;" type="text" placeholder="Full Name" name="name">
            <input  style="display: block;" type="text" placeholder="Email" name="email">
            <input style="display: block;" type="text" placeholder="Phone Number" name="mobile">
            <input  style="display: block; height:8rem;" type="text" placeholder="Enter your message here" name="message">
            <input type="submit" name="submit" value="SEND MESSAGE">

        </form>

    </div>




</body>
</html>