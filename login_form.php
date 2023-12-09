<?php
error_reporting(0);
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:project.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:project-user.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Krona+One&family=Poppins&display=swap" rel="stylesheet">    <!-- cdn fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn fonts -->
    <link rel="stylesheet" href="css/main3.css">
    <title>Document</title>
</head>
<body>

    <!-- nav start -->
    <div class="nav-header">
        <div class="nav-control" id="myTopnav">
            <div class="font-dela main-logo">
                <a class=" color-black bold no-decoration" href="index.php"><p>JJC</p></a>
            </div>

            <div class="nav-menu">
                <a class="font-krona no-decoration color-black mx-1" href="index.php">Home</a>
                <a class="font-krona no-decoration color-black mx-1" href="##">Projects</a>
                <a class="font-krona no-decoration color-black mx-1" href="about-us.php">About us</a>
            </div> 

            <div class="nav-icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-facebook-messenger"></i>
            </div>
        </div>

</div>
<!-- nav end -->

    <div class="form-container">

        <!-- <form action="" method="post">
           <h3>login now</h3>
           <input type="email" name="email" required placeholder="enter your email">
           <input type="password" name="password" required placeholder="enter your password">
           <input type="submit" name="submit" value="login now" class="form-btn">
           <p>don't have an account? <a href="register_form.php">register now</a></p>
        </form> -->

    <!-- form -->
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
            <p>don't have an account? <a href="register_form.php">register now</a></p>
        </form>

   <!-- form -->

        <div class="box-layout">
            <div class="box-yellow">
                <img src="images/hand2.jpg" alt="hand">
                <h3 class="font-krona">Connect with us. <br> Stay infromed.</h3>
                <button class="font-krona">Join Newsletter</button>
            </div>
            <div class="white-cricle">
                <div class="black-circle"></div>
            </div>
        </div>
     
     </div>
</body>
</html>