<?php
session_start();

 if($_SESSION['login']=="true"){

 }else{

    header("location:index.php");

 }
 
 require_once('inc/content/header.php');
 require_once('inc/contactmanage.php');
?>

<style src=""></style>



<div class="col-md-12"> 



        <div class="col-md-4"> 

          <div class="option1 ocard"> 

              <h4>Edit News</h4>
              <button type="button"><a href="news.php">EDIT CONTENT</a></button>

          </div>

        </div>

         <div class="col-md-4"> 
          
           <div class="option3 ocard"> 


              <h4>Edit Gallery</h4>
              <button type="button"><a href="gallery.php">EDIT CONTENT</a></button>


          </div>

        </div>


         <div class="col-md-4"> 
          
           <div class="option2 ocard"> 

              
              <h4>Edit Shop</h4>
              <button type="button" class="btn btn-primary"><a href="products.php">EDIT CONTENT</a></button>

          </div>

        </div>

 

</div>

<div class="col-md-5">
    <table  class="table">
        <tr style="background-color:pink;">
    <th style="padding-right:4rem;padding-left:4rem;color:white;">Message_ID</th>
    <th style="padding-right:4rem;padding-left:4rem;color:white;">Customer Name</th>
    <th style="padding-right:4rem;padding-left:4rem;color:white;">Email</th>
    <th style="padding-right:4rem;padding-left:4rem;color:white;">Mobile No</th>
    <th style="padding-right:4rem;padding-left:4rem;color:white;">Message</th>
        </tr>

    <?php

    $obj = new contactmanage();

    $result = $obj->getmessages();

    while ($row = mysqli_fetch_assoc($result)):
    
    ?>
        
  <tr style="margin:10rem;">
    <td style="padding-right:4rem;padding-left:4rem;" ><?php echo $row['mid']; ?></td>
    <td style="padding-right:4rem;padding-left:4rem;" ><?php echo $row['fullname']; ?></td>
    <td style="padding-right:4rem;padding-left:4rem;" ><?php echo $row['email']; ?></td>
    <td style="padding-right:4rem;padding-left:4rem;" ><?php echo $row['phone']; ?></td>
    <td style="width:50%;padding-right:4rem;padding-left:4rem;" ><?php echo $row['message']; ?></td>
  </tr>
  
  <?php
  
    endwhile;
    
  ?>
 
    </table>
</div>


