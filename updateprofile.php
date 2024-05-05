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
        <title>Update</title>
        <!--Custom Fonts link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!--Custom css link-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header class="header">
            <section class ="flex">
                <a href="home.html" class="logo">Logic Circuits</a>

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
                    <a href="profile.php" class="btn">view profile</a>
                    <div class="flex-btn">
                        <a href="login.html" class="option-btn">login</a>
                        <a href="register.php" class="option-btn">register</a>
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
            <a href="profile.php" class="btn">view profile</a>

            </div>
            <nav class="navbar">
                <a href="home.html"><i class="fas fa-home"></i>spam</a>
                <a href="about.html"><i class="fas fa-question"></i>about us</a>
                <a href="courses.php"><i class="fas fa-graduation-cap"></i>courses</a>
                <a href="teachers.html"><i class="fas fa-chalkboard-user"></i>teachers</a>
                <a href="contact.html"><i class="fas fa-headset"></i>contact us</a>
            </nav>
        </div>

    </div>

    <!--update profile-->'
    
    <section class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Update Profile</h3>
            <p>Your Name:</p>
            <input type="text" name="name" placeholder="Name..." maxlength="100" class="box">
            <p>Your Email:</p>
            <input type="Email" name="Email" placeholder="Your Email..." maxlength="100" class="box">
            <p>Type old Password:</p>
            <input type="Password" name="Old_pass" placeholder="Enter old Password..." maxlength="100" class="box">
            <p>Type new Password:</p>
            <input type="Password" name="New Password" placeholder="Enter new Password..." maxlength="100" class="box">
            <p>Confirm your Password:</p>
            <input type="Password" name="Confirm new password" placeholder="Confirm new Password..." maxlength="100" class="box">
            <p>Update Picture</p>
            <input type="file" name="image" accept="image/*" class="box">
            <input type="submit" name="submit" value="update profile" class="btn">
        </form>
    </section>

    <!--update profile-->

    <footer class="footer">
        &copy; copyright @2024 by<span>Team RJSG</span> |All Rights reserved!
    </footer>
        <!--jscript-->
        <script src="script.js"></script>
    </body>
</html>