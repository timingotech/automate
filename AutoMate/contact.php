<?php
    include "header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time()?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cont cont1">
        <div class="overlay">
            <div class="cent">

            </div>
        </div>

        <div class="mini_pill">
            <div class="automated">
                <h1>Reach Out To Us</h1>
                <h4>We reply within 3 working days</h4>
                <a href="contact.php"><button>Contact Us</button></a>
            </div>
        </div>
    </div>

    <div class="cont cont2 auth_s">
            <div class="cent signup">
                <div class="left" id="super">
                    <div class="overlay">

                    </div>
                </div>

           <form action="" method="post" id="lock"   enctype="multipart/form-data">  <div class="right">
                    <h1>Contact Admin</h1>

                    <div class="n_e">
                        <input type="text" placeholder="Full Name" name="name" value="">
                        <input type="email"  name="email" value="" placeholder="Email">

                    </div>

                    <div class="n_e">

                    <input type="text" placeholder="Phone" name="end" value="">
                  

                    
                    
                    </div>

                  

                 
               
                        <textarea name="message" id="" cols="30" rows="10" placeholder=" Message"></textarea>
                 

                    <button name="submit">SUBMIT</button>
                </div></form>  
            </div>



  
        </div>

        <?php
     include 'footer.php';
   ?>
</body>
</html>





