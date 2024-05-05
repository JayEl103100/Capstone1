<?php
@include 'connection.php';
session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']);
   
    $select = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_type = $row['user_type'];
        $name = $row['name'];


        
        if($row['user_type'] == 'student') {
            $_SESSION['user_type'] = $user_type;
            $_SESSION['name'] = $name;    
            header('Location: userpage.php');
            exit();
            
        } elseif($row['user_type'] == 'Teacher') {
            $_SESSION['user_type'] = $user_type;
            $_SESSION['name'] = $name;      
            header('Location: admin_page.php');
            exit(); 
        } else {
            echo "Invalid user type.";
        }
    } else {
        echo "No user found with the provided email.";
    }
} 
?>

 




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="loginstyle.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">


   </form>
   

</div>



</body>
</html>