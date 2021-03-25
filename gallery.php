<?php
session_start();
require_once('inc/gallerymanage.php');
?>
<?php
 if(isset($_GET['action'])){

    if($_GET['action']=="delete"){

        $obj = new gallerymanage();

        $result = $obj->deletephoto($_GET['id']);

        if($result==1){

            header("location:gallery.php");

        }


    }

 }

 ?>
<?php
require_once('inc/gallerymanage.php');

 require_once('inc/content/header.php');

 //$img = "https://i.pinimg.com/originals/d1/a6/f8/d1a6f8aad6e5c2841c8f33afe072df46.jpg";

    // adding the new post button if the admin login


     if (isset($_SESSION['login'])) {
       

        if($_SESSION['login']=="true"){

        echo '<button style="margin-left:2%;padding:1%;background-color:pink;" class="btn"><a href="addphoto.php" style="color:Black;" >Add Images To Gallery</a></button>';

      }


     }

    ?>

<div class="gallery">

          <div style="display: flex;" class="images">

          	<?php

          	$obj = new gallerymanage();

		      	$result = $obj->getimages();

           while($data = mysqli_fetch_assoc($result)):

           ?>
            
         
              <div style="display: inline-grid;">
                <div style="width: 80%;">
                  <img style="width: 80%;" src="<?php echo $data['img_url']; ?> ">
                </div>
                <div >
                  <?php
                     if (isset($_SESSION['login'])) {
                        if($_SESSION['login']=="true"){
                ?>            
                           '<button style="margin-left:0.5% ;padding:1%;background-color:pink;" class="btn"><a href="addphoto.php" style="color:white;;" ><a href="gallery.php?action=delete&id=<?php echo $data['gid'] ?>" style="color:black;" >Delete Images</a></button>';
                <?php              
                        }
                     }
                  ?>
                </div>
              </div>
      


            <?php

        	endwhile;


        	?>


            
      
          </div>

</div>


</body>
</html>