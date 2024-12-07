<?php
    include 'header.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css?v=<?php echo time()?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="img_cont">

    <div class="overlay">
        <div class="cont cont1">
            <div class="comp">
                <h1>A comprehensive vehicle management solution designed just for you.</h1>
            </div>

            <div class="stay_on">
                <h4>Stay on top of your vehicles needs with convenience at your fingertips.</h4>
                <h4 class="grey">Simplify your automotive life with a comprehensive platform designed to keep your vehicle running smoothly and efficiently.</h4>
            </div>

            
            <?php
                      if(!isset($_SESSION["id"])){
                        echo '
                         <a href=""><button>
                Get started, its free!
            </button></a>
                        ';
                      }

                      else{
                        echo '';
                      }
                ?>

          
        </div>
    </div>

  
  
    </div>

    <div class="cont cont2">
        <div class="cent">
            <img src="images\pngwing.com 2.png" alt="">
        </div>
        <div class="pill_shape">
            <div class="simplify">
                <h1>Simplify your vehicle management.</h1>
                <h4>We help you stay organized with automated reminders.</h4>
                <h4>Get notified in advance</h4>
            </div>
        </div>

        <div class="mini_pill">
            <div class="automated">
                <h1>Automated Maintenance Reminders</h1>
                <h4>Never miss an important update again.</h4>
                <a href="profile.php"><button>Get Reminded</button></a>
            </div>
        </div>
        </div>


        <div class="cont cont3">
            <div class="overlay">

                <div class="cent">
                 <div class="find">
                    <h1>Find mechanics near you.</h1>
                    <h4>Locate the registered mechanics in your state.</h4>
                    <a href="mechanic.php"><button>Find Mechanics near you</button></a>
                 </div>
                </div>
            </div>
        </div>

        <div class="cont cont4">
            <!-- <div class="overlay"> -->

                <div class="cent">
                    <img src="images\Balloons 1.png" alt="">
                    <div class="centra">
                        <h1>Centralized automobile management.</h1>
                        <h4>Get all your automobile managment services in one place</h4>
                    </div>
                </div>
            <!-- </div> -->
                <div class="mini_pill">
            <div class="automated">
                <h1>From service reminders to diagnostics.</h1>
                <h4>Never worry about autombile management again.</h4>

                <?php
                      if(!isset($_SESSION["id"])){
                        echo '
                         <a href="reg.php"><button>Get Started</button></a>
                        ';
                      }

                      else{
                        echo '';
                      }
                ?>
               
            </div>
        </div>
        </div>

        <div class="cont cont5" id="services">
        <h1>Services</h1>
            <div class="cent">
              
                <div class="info_box">
                    <div class="info">
                        <h4>Chat with our bot now.</h4>
                        <p>With our chatbot feature, you can run diagnostics on your car and get quick fixes for simple problems.</p>
                        <a href="bot.php"><button>Chat with our bot</button></a>
                        <p></p>
                    </div>
                </div>

                <div class="info_box">
                <div class="info">
                        <h4>Available mechanics in your state.</h4>
                        <p>Is your car faulty? Use our nearby service to find registered and trusted mechanics in your state.</p>
                        <a href="mechanic.php"><button>Contact Mechanics now</button></a>
                        <p></p>
                    </div>
                    </div>
            </div>
        </div>


        <div class="cont cont6">
            <div class="cent">
                <img src="images\rb_3527 1.png" alt="">
                <h1>Built-in chatbot for vehicle</h1>
                <h1> diagnostics.</h1>
                <h4>Quickly diagnose car issues with our AI-powered assistant.</h4>
                <p>Got a problem with your vehicle? Our built in chatbot can help you trounleshoot and diagnose common car issues, providing potential solutions and guiding you on what to do next</p>
                <a href="bot.php"><button>Chat with our bot</button></a>
            </div>
        </div>


   <?php
     include 'footer.php';
   ?>



    
</body>
</html>
