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
                <a href="userpage.php" class="logo">Advance Logic Circuits and Designs</a>


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
                <a href="courses.php"><i class="fas fa-graduation-cap"></i>courses</a>
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
        <h1 class="title">Syllabus and Course Outline</h1>
        <button class="toggleButton">show contents&#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/Syllabus and Course Outline/H0001 Syllabus and Course Outline.pdf" download>H0001 Syllabus and Course Outline.pdf</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">01 Course Orientation</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/01 Digital Integrated Circuits/01 Instructor's Guide.pdf" download>01 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/01 Digital Integrated Circuits/01 OHP Slide Handout 1.pdf" download>01 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/01 Digital Integrated Circuits/01 OHP Slides 1.pdf" download>01 OHP Slides 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">02 RTL and DTL Circuits</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/02 RTL and DTL Circuits/02 Instructor's Guide.pdf" download>02 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/02 RTL and DTL Circuits/02 OHP Slides 1.pdf" download>02 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/02 RTL and DTL Circuits/02 OHP Slide Handout 1.pdf" download>02 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/02 RTL and DTL Circuits/02 Laboratory Exercise 1.pdf" download>02 Laboratory Exercise 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">03 Transistor-Transistor Logic</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/03 Transistor-Transistor Logic/03 Instructor's Guide.pdf" download>03 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/03 Transistor-Transistor Logic/03 OHP Slide Handout 1.pdf" download>03 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/03 Transistor-Transistor Logic/03 OHP Slides 1.pdf" download>03 OHP Slides 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">04 Emitter-Coupled Logic</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/04 Emitter-Coupled Logic/04 Instructor's Guide.pdf" download>04 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/04 Emitter-Coupled Logic/04 OHP Slide Handout 1.pdf" download>04 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/04 Emitter-Coupled Logic/04 OHP Slides 1.pdf" download>04 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/04 Emitter-Coupled Logic/04 Laboratory Exercise 1.pdf" download>04 Laboratory Exercise 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/04 Emitter-Coupled Logic/04 Quiz 1.pdf" download>04 Quiz 1</a></h1><br>

    </div>
    <div class="video-details">
        <h1 class="title">05 CMOS Logic</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/05 CMOS Logic/05 Instructor's Guide.pdf" download>05 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/05 CMOS Logic/05 OHP Slide Handout 1.pdf" download>05 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/05 CMOS Logic/05 OHP Slides 1.pdf" download>05 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/05 CMOS Logic/05 Laboratory Exercise 1.pdf" download>05 Laboratory Exercise 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">06 CMOS Steady-State Electrical Behavior</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/06 CMOS Steady-State Electrical Behavior/06 Instructor's Guide.pdf" download>06 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/06 CMOS Steady-State Electrical Behavior/06 OHP Slide Handout 1.pdf" download>06 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/06 CMOS Steady-State Electrical Behavior/06 OHP Slides 1.pdf" download>06 OHP Slides 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">07 Other CMOS Input and Output Structures</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/07 Other CMOS Input and Output Structures/07 Instructor's Guide.pdf" download>07 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/07 Other CMOS Input and Output Structures/07 OHP Slide Handout 1.pdf" download>07 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/07 Other CMOS Input and Output Structures/07 OHP Slides 1.pdf" download>07 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/07 Other CMOS Input and Output Structures/07 Laboratory Exercise 1.pdf" download>07 Laboratory Exercise 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">08 Combinational Logic Design Principles</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/08 Combinational Logic Design Principles/08 Instructor's Guide.pdf" download>08 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/08 Combinational Logic Design Principles/08 OHP Slide Handout 1.pdf" download>08 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/08 Combinational Logic Design Principles/08 OHP Slides 1.pdf" download>08 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/08 Combinational Logic Design Principles/08 Quiz 1.pdf" download>08 Quiz 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/08 Combinational Logic Design Principles/08 Laboratory Exercise 1.pdf" download>08 Laboratory Exercise 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">09 Combinational Logic Design Practices</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/09 Combinational Logic Design Practices/09 Instructor's Guide.pdf" download>09 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/09 Combinational Logic Design Practices/09 OHP Slide Handout 1.pdf" download>09 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/09 Combinational Logic Design Practices/09 OHP Slides 1.pdf" download>09 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/09 Combinational Logic Design Practices/09 Laboratory Exercise 1.pdf" download>09 Laboratory Exercise 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/09 Combinational Logic Design Practices/09 Laboratory Exercise 2.pdf" download>09 Laboratory Exercise 2</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/09 Combinational Logic Design Practices/09 Laboratory Exercise 3.pdf" download>09 Laboratory Exercise 3</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">10 Latches and Flip-flops</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/10 Latches and Flip-flops/10 Instructor's Guide.pdf" download>10 Instructor's Guide.pdf</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/10 Latches and Flip-flops/10 OHP Slide Handout 1.pdf" download>10 OHP Slide Handout 1.pdf</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/10 Latches and Flip-flops/10 OHP Slides 1.pdf" download>10 OHP Slides 1.pdf</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/10 Latches and Flip-flops/10 Laboratory Exercise 1.pdf" download>10 Laboratory Exercise 1.pdf</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">11 Sequential Circuits</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/11 Sequential Circuits/11 Instructor's Guide.pdf" download>11 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/11 Sequential Circuits/11 OHP Slide Handout 1.pdf" download>11 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/11 Sequential Circuits/11 OHP Slides 1.pdf" download>11 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/11 Sequential Circuits/11 Laboratory Exercise 1.pdf" download>11 Laboratory Exercise 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/11 Sequential Circuits/11 Quiz 1.pdf" download>11 Quiz 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">12 Registers and Counters</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/12 Registers and Counters/12 Instructor's Guide.pdf" download>12 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/12 Registers and Counters/12 OHP Slide Handout 1.pdf" download>12 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/12 Registers and Counters/12 OHP Slides 1.pdf" download>12 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/12 Registers and Counters/12 Laboratory Exercise 1.pdf" download>12 Laboratory Excercise 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">13 Memories</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/13 Memories/13 Instructor's Guide.pdf" download>13 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/13 Memories/13 OHP Slide Handout 1.pdf" download>13 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/13 Memories/13 OHP Slides 1.pdf" download>13 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/13 Memories/13 Quiz 1.pdf" download>13 Quiz 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">14 Microprocessors</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/14 Microprocessors/14 Instructor's Guide.pdf" download>14 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/14 Microprocessors/14 OHP Slide Handout 1.pdf" download>14 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/14 Microprocessors/14 OHP Slides 1.pdf" download>14 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/14 Microprocessors/14 Laboratory Exercise 1.pdf" download>14 Laboratory Exercise 1</a></h1><br>
    </div>
    <div class="video-details">
        <h1 class="title">15 Application-Specific Integrated Circuit(ASIC)</h1>
        <button class="toggleButton">show handouts &#9660;</button>
        <br><br><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/15 Application-Specific Integrated Circuit (ASIC)/15 Instructor's Guide.pdf" download>15 Instructor's Guide</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/15 Application-Specific Integrated Circuit (ASIC)/15 OHP Slide Handout 1.pdf" download>15 OHP Slide Handout 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/15 Application-Specific Integrated Circuit (ASIC)/15 OHP Slides 1.pdf" download>15 OHP Slides 1</a></h1><br>
        <h1 class="file hidden"><a href="Logic And Circuit/Advanced Logic Circuit and Design/Advanced Logic Circuit and Design/15 Application-Specific Integrated Circuit (ASIC)/15 Laboratory Exercise 1.pdf" download>15 Laboratory Exercise 1</a></h1><br>
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