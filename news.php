<?php
session_start();
require_once('inc/newsmanage.php');
?>
<?php
 if(isset($_GET['action'])){

    if($_GET['action']=="delete"){

        $obj = new newsmanage();

        $result = $obj->deletenews($_GET['id']);

        if($result==1){

            header("location:news.php");

        }


    }

 }

 ?>
 <?php
 require_once('inc/content/header.php');
 ?>

 <link rel="stylesheet" type="text/css" href="css/newsmanage.css">
 
<div class="newssection">

    <h2 class="titletag">Get Your Latest Fashion Related News</h2>

    <?php 

    // adding the new post button if the admin login


     if (isset($_SESSION['login'])) {
       

        if($_SESSION['login']=="true"){

        echo '<button style="margin-right 40%" class="btn"><a href="addnews.php">Add News</a></button>';

      }


     }

    ?>


    <?php

        // looping through all the news 

    $obj = new newsmanage();

    $result = $obj->getnews();

    while($data = mysqli_fetch_assoc($result)):

    ?>

    <div class="postsections">

        <img  src="<?php echo $data['img_url']; ?>" alt="social work image">
        <h2><?php echo $data['title']; ?></h2>
        <p><?php echo $data['desc']; ?></p>

        <?php

        if(isset($_SESSION['login'])):
        if($_SESSION['login']=="true"):?>

        <button><a href="news.php?action=delete&id=<?php echo $data['nid']; ?>">Delete News</a></button>

        <?php
         endif;   
         endif;

        ?>
    </div>


    <?php

    endwhile;

    ?>
  
</div>
 

