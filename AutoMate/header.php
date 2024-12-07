<?php
  ob_start();
  session_start();
  include 'connect.php';
  if(isset($_SESSION["id"])){
    $email=$_SESSION['email'];
    $user_name=$_SESSION['name'];
  }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/b782cf5553.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="css/header.css?v=<?php echo time()?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMate</title>
</head>
<body>
    <div class="head_cont">
        <div class="cent">
            <div class="logo">
               <a href="main.php"> <h1>AutoMate</h1></a>
            </div>

         
              
                    <div class="go_to">
                        <ul>
                        <li><a href="main.php">home</a></li>
                    <li><a href="about.php">about us</a></li>
                    <li><a href="main.php#services">services</a></li>
                    <li><a href="bot.php">chat bot</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="mechanic.php">Nearby service</a></li>
                        </ul>
                
                    </div>
                

                    <div class="auth">
                        <ul>
                            <?php
                                 if(isset($_SESSION["id"])){
                                    echo '
                       

                         <li><a href="logout.php">logout</a></li>
                        <li><a href="profile.php"><button>profile</button></a></li>
                                    ';
                                  }


                                  else{
                                    echo '
                                                     
                        <li><a href="login.php">log in</a></li>
                        <li><a href="reg.php"><button>register</button></a></li>
                                    ';
                                  }
                                  
                            ?>
                       
                       
                        </ul>
                
                    </div>
                
              
        
        </div>
    </div>
</body>
</html>