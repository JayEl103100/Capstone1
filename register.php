<?php

include 'connection.php';

$error = [];

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']);
    $cpass = ($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exists!';
    }else{
        if($pass != $cpass){
            $error[]= 'Passwords do not match!';
        }else{
            $insert = "INSERT INTO users (name, email, password, user_type) VALUES ('$name', '$email', '$pass', '$user_type')";

            mysqli_query($conn, $insert);
            header('location:login.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    
    <div class="form-container">
        <form action="" method="post">
            <h3>Register</h3>
            <?php
            if(isset($error)){
                foreach($error as $error_msg){
                    echo '<span class="error-msg">'.$error_msg.'</span>';
                }
            }
            ?>
            <input type="text" name="name" required placeholder="Enter your name...">
            <input type="email" name="email" required placeholder="Enter your email...">
            <input type="password" name="password" required placeholder="Enter your password...">
            <input type="password" name="cpassword" required placeholder="Confirm your password...">
            <select name="user_type">
                <option value="student">Student</option>
                <option value="Teacher">Teacher</option>
            </select>
            <input type="submit" name="submit" value="Register Now" class="form-btn">
        </form>
    </div>
</body>
</html>
