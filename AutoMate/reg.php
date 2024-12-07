<?php
    include "header.php";
?>





<?php
 
    include 'functions.php';

    if(isset($_GET['error'])){
        if($_GET['error']=='emptyfield'){
            echo '  <div class="message" id="message">
            please fill all fields
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='pwd_not_match'){
            echo '  <div class="message" id="message">
            passwords do not match
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='invalid_pass'){
            echo '  <div class="message" id="message">
          password too weak
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='email_in_use'){
            echo '  <div class="message" id="message">
            email already used by another account
        </div>';
        }
    }


    if(isset($_GET['error'])){
        if($_GET['error']=='matric_in_use'){
            echo '  <div class="message" id="message">
            account with matric number already exist
        </div>';
        }
    }


    

    if(isset($_GET['error'])){
        if($_GET['error']=='success'){
            echo '  <div class="message" id="message">
            account created
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='invalidemail'){
            echo '  <div class="message" id="message">
            please enter a valid email
        </div>';
        }
    }

    if(isset($_POST['signup'])){
        $email=$_POST['email'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        $confirm=$_POST['conpass'];



     
        

    

        if(emptysignup($email, $name,  $password, $confirm )!== false){
            
            
            header("location: reg.php?error=emptyfield");
            exit();
 
        }

        if(invalid_email($email)!== false){
            header("location: reg.php?error=invalidemail");
        //     echo '<div class="message" id="message">
        //     error: INVALID EMAIL
        // </div>';
        exit();
        }

        // if (invalid_password($password)) {
        //     header("location: reg.php?error=invalid_pass");
        //     exit();
 
        // }

        if(pwd_match($password, $confirm)!== false){
      
            header("location: reg.php?error=pwd_not_match");
            exit();
        }

        if(email_exists($conn, $email)!== false){
            header("location: reg.php?error=email_in_use");
      
            exit();
        }


     

        create_user($conn, $email, $name, $password );
    
        
    }
?>













<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/reg.css?v=<?php echo time() ?>">
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
                    <h1>Register</h1>

                  <div class="input_field">
                    <input type="text" placeholder="First and Last name" name="name">
                    <input type="email" placeholder="Email adress" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <input type="password" placeholder="confirm Password" name="conpass">

                  
                  </div>

                  <button name="signup">Create account</button>

                  <div class="re_do">
                
                    <a href="login.php">I have an account</a>
                  </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>