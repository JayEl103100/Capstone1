<?php


@include 'connection.php';
session_start();

$user_type = $_SESSION['user_type'];
$name = $_SESSION['name'];

?>
<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logic Circuits and Design</title>
        <!--Custom Fonts link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!--Custom css link-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header class="header">
            <section class ="flex">
                <a href="admin_page.php" class="logo">Logic Circuits</a>

                <form action="" method="post" class="search-form">
                    <input type="text" name="search_form" placeholder="search courses..."
                    required maxlength="100">
                    <button type="submit" class="fas fa-search" name="search box"></button>
                </form>

                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div id="search" class="fas fa-search"></div>
                    <div id="user-btn" class="fas fa-user"></div>
                    <div id="toggle-btn" class="fas fa-sun"></div>
                </div>
                <div class="profile">
                    <img src="images/tsunayoshi.jpeg" alt="">
                    <h1><?php echo $name; ?> </h1> 
                    <p><?php echo $user_type; ?> </p> 
                    <a href="profile.php" class="btn">view profile</a>
                    <a href="profile.html" class="btn">view profile</a>
                    <div class="flex-btn">
                        <a href="login.html" class="option-btn">login</a>
                        <a href="register.html" class="option-btn">register</a>
                    </div>
                </div>
            </section>
        </header>







    <!--header section ends-->
    <!--sidebard start-->

    <div class="side-bar">
        <div class="close-side-bar">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <img src="images/tsunayoshi.jpeg" alt="">
            <h1><?php echo $name; ?> </h1> 
            <p><?php echo $user_type; ?> </p> 
            <a href="profile.php" class="btn">view profile</a>


            </div>
            <nav class="navbar">
                <a href="admin_page.php"><i class="fas fa-home"></i>Home</a>
                <a href="courses.php"><i class="fas fa-graduation-cap"></i>courses</a>
                <a href="Class.php"><i class="fas fa-chalkboard-user"></i>My Class</a>
            </nav>
        </div>









        <!--playlist start-->

        <section class="playlist">
            <h1 class="heading">Logic Circuits and Design</h1>
            
            <div class="row">
                <div class="col">
                   <div class="thumb">
                    <span>Handouts</span>
                    <img src="/Images/Handout.jpg"  alt="">
                   </div>
                </div>

                <div class="col">
                    <div class="tutor">
                        <img src="images/th.jpeg" alt="">
                        <div>
                        <h1><?php echo $name; ?> </h1> 
                        <p><?php echo $user_type; ?> </p> 
                        </div>
            

                        <div class="details">
                         <h3>Handouts</h3>
                            <div class="dates"><i class="fas fa-calendar"></i><span></span></div>
                            <p></p>
                        </div>
                    </div>
                </div>
       

            
            </div>
        </section>





        <!--playlist end-->'
        
    
        <!--videos container-->

        <section class="videos-container">
            <h1 class="heading">Handouts</h1>

            <div class="box-container">
                <a href="Handouts.php" class="box">
                    <i class="fas fa-play"></i>
                    <img src="/Images/orientation.jpeg" alt="">
                    <h3>00 Course Orientation</h3>
                </a>
                <a href="Handouts.php" class="box">
                    <i class="fas fa-play"></i>
                    <img src="images/videoclip.jpeg" alt="">
                    <h3>01 Number Systems</h3>
                </a>
                <a href="Handouts.php" class="box">
                    <i class="fas fa-play"></i>
                    <img src="images/videoclip.jpeg" alt="">
                    <h3>02 Arithmetic Operations</h3>
                </a>
                <a href="Handouts.php" class="box">
                    <i class="fas fa-play"></i>
                    <img src="images/videoclip.jpeg" alt="">
                    <h3>03 Boolean Algebra</h3>
                </a>
                <a href="Handouts.php" class="box">
                    <i class="fas fa-play"></i>
                    <img src="images/videoclip.jpeg" alt="">
                    <h3>04 Logic Gates</h3>
                </a>
                <a href="Handouts.php" class="box">
                    <i class="fas fa-play"></i>
                    <img src="images/videoclip.jpeg" alt="">
                    <h3>05 Simplification of Boolean Expression Through K-Map Method</h3>
                </a>
                <a href="Handouts.php" class="box">
                    <i class="fas fa-play"></i>
                    <img src="images/videoclip.jpeg" alt="">
                    <h3>06 Combinational Logic</h3>
                </a>

        

            </div>
        </section>








        <!--video cons end -->

    </div>

    <footer class="footer">
        &copy; copyright @2024 by<span> Mr.Jay El</span> |All Rights reserved!
    </footer>
        <!--jscript-->
        <script src="script.js"></script>
    </body>
</html>