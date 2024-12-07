<?php
    include "header.php";
    include "functions.php";
?>






<?php
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];



        

    if(emptylogin($email, $password)){
        header("location: login.php?error=empty_login");
        exit();
    }

    login($conn, $email, $password);
    }


    if(isset($_GET['error'])){
        if($_GET['error']=='wrongLogin'){
            echo '  <div class="message" id="message">
            username or password incorrect
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='empty_login'){
            echo '  <div class="message" id="message">
            enter username and password
        </div>';
        }
    }

    
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/login.css?v=<?php echo time()?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cont cont1">
        <div class="overlay">
            <div class="cent">
                <form action="" method="post">
                <div class="form_cont">
                    <h1>Log in</h1>

                  <div class="input_field">
                    <input type="email" placeholder="Email address" name="email">
                    <input type="password" placeholder="Password" name="password">

                  
                  </div>

                  <button name="login">Login to your account</button>

                  <div class="re_do">
                    <a href="">Forgot password</a>
                    <a href="reg.php">Don't have an account</a>
                  </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>