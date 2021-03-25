<?php

if (isset($_POST['submit'])) {

    require_once('inc/usermanage.php');

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $usermanage = new usermanage();

    $result =  $usermanage->login($username,$password);

    if($result==1){

        

        $_SESSION['login'] = "true";

        header('Location:dashboard.php');

    }else{


        session_destroy();

      echo '<script>alert("login failed")</script>'; 

    }

}



?>

<!DOCTYPE html>
<html>
<head>
    <title>adminlogin</title>

</head>
<body>

    <div class="row">
    <div class="col-md-12">
            <div class="text-center">

                <div id="loginform" class="form-group">
                    
                    <form action="" method="POST">

                        <h2>Styles Administrator</h2>
                    <input  class="form-control" type="text" name="username"  placeholder="username" required>
                    <input class="form-control" type="password" name="password" placeholder="password">
                    <input type="submit" name="submit" value="login" class="btn btn-primary">

                    </form>
                
                </div>

            </div>
    </div>
</div>

</body>
</html>