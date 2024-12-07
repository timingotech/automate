<?php
    include "header.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/profile.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="cont cont1">
        <div class="cent">
            <div class="floating_turd">
                <ul>
                    <li>service reminders <div class="red">0</div></li>
                    <li>chatbot <div class="red">0</div></li>
                    <!-- <li>car listings <div class="red">0</div></li> -->
                </ul>

                <div class="profile">
                    <div class="prof_i">
                    <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="user">
                       <?php echo $user_name;?>
                    </div>
                </div>
            </div>

            <div class="act_cen">
                <div class="top">
                    <div class="rem_cont">
                        <h1>service reminders</h1>

                        <div class="reminder_cont">
                            <h1>service reminder</h1>
                            <h4>oil change, battery check, tire rotation, brake inspection.</h4>

                            <div class="list">
                                <div class="list_box">
                                    <input type="checkbox" id="service1" checked>
                                    <label for="service1">Oil Change</label>
                                </div>

                                <div class="list_box">
                                    <input type="checkbox" id="service2">
                                    <label for="service2">Battery Check</label>
                                </div>

                                <div class="list_box">
                                    <input type="checkbox" id="service3" checked>
                                    <label for="service3">Tire Rotation</label>
                                </div>

                                <div class="list_box">
                                    <input type="checkbox" id="service4">
                                    <label for="service4">Brake Inspection</label>
                                </div>
                            </div>

                            <button>See All</button>
                        </div>
                    </div>

                    <div class="rentals">
                        <div class="my_car">
                            <div class="img_cont">
                                <img src="images\GR-Supra-GT4-50-Edition-01.jpg" alt="">
                            </div>

                            <h1>Your Car</h1>
                            <h4>Toyota GR Supra</h4>
                            <button>Remove Car</button>
                        </div>
                    </div>
                </div>

                <div class="quick_ac">
                    <h1>Quick Access</h1>

                    <div class="top_acc">
                        <div class="top_card">
                            <div class="left_s">
                                <h1>Find Mechanic</h1>
                                <h4>Locate trusted mechanics nearby.</h4>
                              <a href="mechanic.php"> <button>Find Now</button></a> 
                            </div>
                            <div class="right_s">
                               <img src="images\portrait-of-smiling-black-female-mechanic-in-auto-repair-shop-MINF15860.jpg" alt="">
                            </div>
                        </div>

                        <div class="top_card">
                        <div class="left_s">
                                <h1>Chat Bot</h1>
                                <h4>Troubleshoot your car issues with our chatbot</h4>
                               <a href="bot.php"> <button>Chat now</button></a>
                            </div>
                            <div class= "right_s bot_s">
                               <img id="bot" src="images\rb_3527 1.png" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="top_acc">
                        <div class="top_card">
                        <div class="left_s">
                                <h1>Chat Bot</h1>
                                <h4>Troubleshoot your car issues with our chatbot</h4>
                               <a href="bot.php"> <button>Chat now</button></a>
                            </div>
                            <div class= "right_s bot_s">
                               <img id="bot" src="images\rb_3527 1.png" alt="">
                            </div>
                        </div>

                        <div class="top_card">
                        <div class="left_s">
                                <h1>Safe buying and selling</h1>
                                <h4>Protect yourself from buying stolen cars</h4>
                                <button>Learn more</button>
                            </div>
                            <div class="right_s">
                               <img src="images\header-2.png" alt="">
                            </div>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
   </div> 

   <?php  include "footer.php"; ?>
</body>
</html>