<?php
    include "header.php";
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bot.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cont cont1">
        <div class="cent">
            <div class="bot_img">
                <img src="images\rb_3527 1.png" alt="">
            </div>

            <h1>what can i help you with?...</h1>
        </div>
    </div>

    <div class="cont cont2">
        <div class="cent">
            <div class="chat_box">
                <div class="chat" id="chatBox">
                <!-- <div class="sender" >  <div class="sending"></div> </div> -->
                         
                     

                      <div class="receiver">  <div class="receiving" >Here to assist    <div class="bot_i"> <img src="images\rb_3527 1.png" alt=""> </div> </div></div>
                         
                          
                               
                           
                         
                    
                </div>
              <form id="chatForm" action="" method="post"><input type="text" placeholder="chat" id="userInput" name="userInput">
                <button name="send" id="btn">
                <i class="fa-solid fa-paper-plane"></i>
                </button></form>  
            </div>
        </div>
    </div>

   <?php  include "footer.php"; ?>

</body>
<script src="bot.js"></script>
</html>