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
        <title>courses</title>
        <!--Custom Fonts link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!--Custom css link-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header class="header">
            <section class ="flex">
                <a href="userpage.php" class="logo">Logic Circuits</a>
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
                    <h1><?php echo $name; ?></h1> 
                    <p><?php echo $user_type; ?></p> 
                    <a href="student_profile.php" class="btn">view profile</a>
                    <div class="flex-btn">
                        <a href="login.php" class="option-btn">logout</a>
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
                     <h1><?php echo $name; ?></h1> 
                    <p><?php echo $user_type; ?></p> 
                    <a href="student_profile.php" class="btn">view profile</a>

                </div>
             <nav class="navbar">
                <a href="userpage.php"><i class="fas fa-home"></i>Home</a>
                <a href="student_courses.php"><i class="fas fa-graduation-cap"></i>courses</a>
                <a href="teachers.php"><i class="fas fa-chalkboard-user"></i>teachers</a>
                <a href="Activity.php"><i class="fas fa-envelope"></i>Activity</a>
             </nav>
            
            </div>

        </div>
            <!--Sidebar ends-->

                <!-- Courses section-->



                <section class="courses">
        
                    <h1 class="heading">our courses</h1>
                    <div class="box-container">
                        <div class="box">
                            <div class="tutor">
                                <img src="images/th.jpeg" alt="">
                                <h1 class="title">Logic Circuits and Design</h1>
                                <a href="student_handouts1.php" class="inline-btn">Open Module</a>
                            </div>
                        </div>
                    </div>
                    <div class="box-container">
                        <div class="box">
                            <div class="tutor">
                                <img src="images/th.jpeg" alt="">
                                <h1 class="title">Advance Logic Circuits and Design</h1>
                                <a href="students_handout2.php" class="inline-btn">Open Module</a>
                            </div>
                        </div>
                    </div>

                   
                </section>
                

                    
        
        
        
        
        
        
            
            <!-- Courses section end-->


    <!--footer start-->
    <footer class="footer">
        &copy; copyright @2024 by<span> Team RJSG</span> |All Rights reserved!
    </footer>
        <!--jscript-->
        <script src="script.js"></script>
    </body>
</html>