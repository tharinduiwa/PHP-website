<?php
session_start();
 require_once('inc/productsmanage.php');

 require_once('inc/content/header.php');

  if(isset($_GET['action'])){

    if($_GET['action']=="delete"){

        $obj = new productsmanage();

        $result = $obj->deleteproduct($_GET['id']);

        if($result==1){

            header("location:products.php");

        }


    }

 }


?>


<div class="productfilter">

    <h2 class="titletag">OUR PRODUCTS</h2>


        <?php
        if(isset($_SESSION['login'])):

        ?>

         <span><button id="filterbutton" style="width: 20%; background-color:blue; color: white;"><a href="addproduct.php" style="color: white;" >ADD PRODUCT</a></button></span>

         <?php 

       endif;

         ?>

    </span>

</div>

<div class="productlist">

    <?php

    $obj = new productsmanage();

    $result = $obj->getproducts();

    while ($row = mysqli_fetch_assoc($result)):
    
    ?>

    <div class="products" style="background-color:white;color:black;" <?php echo $row['category'] ?>">

        <img src="<?php echo $row['img_url']; ?>" alt="">
        <h4><?php echo $row['title']; ?></h4>
        <p><?php echo $row['pdesc']; ?></p>
        <h5>Rs.<?php echo $row['price']; ?>/=</h5>
        <input type="number" name="qaun" id="qaun" style="margin-left:auto;margin-left: 20%; height: 5%; margin-bottom: 5%;">
        <button style="background-color:pink;">ADD TO CART</button>
        
        <?php

        if(isset($_SESSION['login'])):

        ?>

        <button style="background-color:yellow;" ><a href="products.php?action=delete&id=<?php echo $row['pid'] ?>" style="color:black;" >DELETE</a></button>

        <?php

        endif;

        ?>

    </div>

    <?php

    endwhile;

    ?>


</div>

<?php



  