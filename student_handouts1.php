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
        <title>Handouts</title>
        <!--Custom Fonts link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!--Custom css link-->
        <link rel="stylesheet" href="style.css">



       
</head>
    </head>
    <body>
    

        <header class="header">
            <section class ="flex">
                <a href="userpage.php" class="logo">Logic Circuits and Designs</a>


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
                    <a href="student_profile.php" class="btn">view profile</a>
                    <div class="flex-btn">
                        <a href="login.php" class="option-btn">logout</a>
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
            <h1><?php echo $name; ?> </h1> 
            <p><?php echo $user_type; ?> </p> 
            <a href="student_profile.php" class="btn">view profile</a>

            </div>
            <nav class="navbar">
                <a href="userpage.php"><i class="fas fa-home"></i>Home</a>
                <a href="student_courses.php"><i class="fas fa-graduation-cap"></i>courses</a>
                <a href="teachers.html"><i class="fas fa-chalkboard-user"></i>teachers</a>
                <a href="Activity.html"><i class="fas fa-envelope"></i>Activity</a>
            </nav>
        </div>

    </div>
    <!--sidebar ends-->

<!--watch videos starts-->
<style>
.file {
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.file.visible {
    opacity: 1;
}

.toggleButton {
    background-color: white; /* Set background color to white */
    color: black; /* Set text color to black */
}
    </style>
</head>
<body>
<section class="Watch-video">
    <div class="video-details">
        <h1 class="title">00 Course Orientation</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br>
        <br>
        <br>
        <div><h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/00 Course Orientation/00 LCD Slides 1.pps" download>00 LCD Slides</a></h1><br></div>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/00 Course Orientation/00 Instructor's Guide.pdf" download>00 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/00 Course Orientation/00 LCD Slide Handout 1.pdf" download>00 LCD Slide Handout 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">01 Number System</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/01 Number Systems/01 Instructor's Guide.pdf" download>01 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/01 Number Systems/01 LCD Slide Handout 1.pdf" download>01 LCD Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/01 Number Systems/01 LCD Slides 1.pps" download>01 LCD Slide 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/01 Number Systems/01 Activity 1.pdf" download>01 Activity 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">02 Arithmetic Operations</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/02 Arithmetic Operations/02 Instructor's Guide.pdf " download>02 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/02 Arithmetic Operations/02 LCD Slide Handout 1.pdf " download>02 LCD Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/02 Arithmetic Operations/02 LCD Slides 1.pps " download>02 LCD Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/02 Arithmetic Operations/02 Activity 1.pdf" download>02 Activity 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">03 Boolean Algebra</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/03 Boolean Algebra/03 Instructor's Guide.pdf" download>03 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/03 Boolean Algebra/03 LCD Slide Handout 1.pdf" download>03 LCD Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/03 Boolean Algebra/03 LCD Slides 1.pps" download>03 LCD Slide 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/03 Boolean Algebra/03 Quiz 1.pdf" download>03 Quiz 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/03 Boolean Algebra/03 Files to Use 1.pdf" download>03 Files to Use 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">04 Logic Gates</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/04 Logic Gates/04 Instructor's Guide.pdf" download>04 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/04 Logic Gates/04 LCD Slide Handout 1.pdf" download>04 LCD Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/04 Logic Gates/04 LCD Slides 1.pps" download>04 LCD Slide 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/04 Logic Gates/04 Quiz 1.pdf" download>04 Quiz 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">05 Simplification of Boolean Expression Through K-Map Method</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/05 Simplification of Boolean Expression Through K-Map Method/05 Instructor's Guide.pdf" download>05 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/05 Simplification of Boolean Expression Through K-Map Method/05 LCD Slide Handout 1.pdf" download>05 LCD Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/05 Simplification of Boolean Expression Through K-Map Method/05 LCD Slides 1.pps" download>05 LCD Slide 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/05 Simplification of Boolean Expression Through K-Map Method/05 Quiz 1.pdf" download>05 Quiz 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">06 Combinational Logic</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/06 Combinational Logic/06 Instructor's Guide.pdf" download>06 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/06 Combinational Logic/06 LCD Slide Handout 1.pdf" download>06 LCD Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/06 Combinational Logic/06 LCD Slides 1.pps" download>06 LCD Slide 1</a></h1><br>
        <h1 class="file hidden"><a href="/Logic And Circuit/Logic Circuit and Design/Logic Circuit and Design/06 Combinational Logic/06 Quiz 1.pdf" download>06 Quiz 1</a></h1><br>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Function to type the header text
    function typeHeader() {
        const headerElement = document.querySelector('.logo');
        headerElement.textContent = ''; // Clear existing text
        const headerText = "Logical Circuits and Design"; // Header text
        let index = 0; // Index for tracking characters

        function typeEffect() {
            if (index < headerText.length) {
                headerElement.textContent += headerText.charAt(index);
                index++;
                setTimeout(typeEffect, 100); // Adjust typing speed here (in milliseconds)
            } else {
                // After typing completes, wait for 1 minute and then retype
                setTimeout(typeHeader, 60000); // 1 minute = 60000 milliseconds
            }
        }

        typeEffect(); // Start typing animation
    }

    // Call the typeHeader function initially
    typeHeader();

    // Toggle button functionality
    const toggleButtons = document.querySelectorAll(".toggleButton");

    toggleButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            const fileContainer = button.parentElement;
            const files = fileContainer.querySelectorAll(".file");

            files.forEach(function(file) {
                file.classList.toggle("hidden");
                if (!file.classList.contains("hidden")) {
                    file.classList.add("visible");
                    button.textContent = "hide handouts ▲"; // Change button text
                } else {
                    file.classList.remove("visible");
                    button.textContent = "show handouts ▼"; // Change button text
                }
            });
        });
    });
});
</script>


<!--watch videos end-->














    <!--footer starts-->

    <footer class="footer">
        &copy; copyright @2024 by<span> Team RJSG</span> |All Rights reserved!
    </footer>
        <!--jscript-->
        <script src="script.js"></script>

    </body>
</html>