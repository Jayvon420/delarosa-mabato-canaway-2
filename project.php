
<!-- admin page -->
<?php 
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!-- admin page -->
<?php require 'function.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Added Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <!-- added links -->
    <link rel="icon" type="image/x-icon" href="images/JJC-logo.ico">
    <link rel="stylesheet" href="css/project.css">
    <title>Main Page</title>
</head>
<body>
<!-- this is the header -->

    
    <!-- mobile menu -->

    <div class="mobile-view">
        <nav class="nav">
            <div class="logo">
                <a class="font-dela" href="#">JJC</a>
            </div>
            <div class="toggle">
                <a href="#"><i class="fa-solid fa-bars"></i></a>
            </div>
            <ul class="menu">
                <li><a class="font-krona no-decoration color-black" href="index.php">Home</a></li>
                <li><a class="font-krona no-decoration color-black" href="##">Projects</a></li>
                <li><a class="font-krona no-decoration color-black" href="about-us.php">About us</a></li>
            </ul>
        </nav>
    
    </div>
    
        <!-- mobile view -->


    <header class="header">
        <div class="nav-control">
                <div class="logo font-dela">
                    <a href="index.php"><p>JJC</p></a>
                </div>

                <div class="nav-menu">
                    <a class="font-krona" href="index.php">Home</a>
                    <a class="font-krona" href="##">Profile</a>
                    <a class="profile"><img src="images/profile.jpg" alt="profile"></a>

                    <!-- <div class="profile dropdown">
                        <a class="dropbtn"><img src="images/profile.jpg" alt="profile"></a>
                        <div class="dropdown-content">
                        <a href="#">Log out</a>
                        </div>
                    </div> -->
                </div> 
                <div>
                <button class="button-link">
                    <a class="font-krona" href="adduser.php">New Project</a>
                </button>
                </div>
         
        </div>
    <!-- header end -->
    </header>

    <div class="main-content-parent-1">
        <div class="tittle font-krona">
            <h1>Project of the Week</h1>
        </div>

        <div class="sub-content-1">
            <!-- left content -->
            <div class="picture">
                <img src="images/adopt-me.jpg" alt="adopt-me">
            </div>
            <!-- left content -->

            <!-- right content -->
            <div class="text-right">
               <div class="sub-tittle">
                    <h1 class="font-krona">
                    Many dogs seek for <br> shelter
                    </h1> 
               </div>
  
               <div class="description">
                    <p class="font-pop">
                        Rescue dogs are hidden treasures waiting to shine.  <br>
                        Not only will a rescue pup help break the cycle of pet overpopulation,  <br>
                        but he gets the opportunity to have a long, happy life with you. <br>
                        Though many shelter dogs have had a rough start in life, <br>
                        they are lost souls looking for second chances.
                    </p>
                    <div class="progress-fund">
                        <progress max="100" value="55"></progress>
                    </div>

                    <div class="prog">
                        <div>
                            <h4 class="font-pop">Raised:</h4>
                            <h2 class="h1-left font-pop">₱100</h2>
                        </div>
                        <div>
                            <h4 class="font-pop">Goal:</h4>
                            <h2 class="h1-right font-pop">₱5000</h2>
                        </div>
                    </div>

                    <div class="fund-button">
                        <button class="font-krona">Fund This Project</button>
                    </div>
             
               </div>
            </div>
            <!-- right content -->
        </div>
    </div>
    <!-- End of content 1 -->

    <div class="main-content-parent-2">

        <div class="tittle">
            <h1 class="font-krona">My Project</h1>
        </div>

    <div class="sub-content-2">
        
        <!-- table image -->
        <table class="content-table">

            <thead class="font-pop">
                <tr>
                    <th>No.</th>
                    <th>Project Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
    

            <?php 
            $users = mysqli_query($conn,'SELECT * FROM users') or die(mysqli_error($conn));
            $i =1;

            foreach($users as $user) :
            ?>
            <tbody class="font-pop">
                <tr>
                    <td> <?php echo $i++ ?> </td>
                    <td> <?php echo $user["name"]; ?> </td>
                    <td><img src="uploads/<?php echo $user["image"];?>" width="200"></td>
                    <td>
                        <form class="tbl-button-1" action="" method="post">
                            <button class="font-pop btn-edit">
                                <a href="edituser.php?id=<?php echo $user['id']; ?>">
                                Edit
                                </a>
                            </button>
                        </form>
                        <form class="tbl-button-2" action="" method="post">
                            <button class="btn-delete font-pop" type="submit" name="submit" value=<?php echo $user['id']; ?>>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <!-- table image -->

  

    </div>
    






</div>

<!-- end -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $(function(){
        $(".toggle").on("click", function(){

            if($(".menu").hasClass("active")){
                $(".menu").removeClass("active");
                $(this).find("a").html("<i class='fa-solid fa-bars'></i>");
            }else{
                $(".menu").addClass("active");
                $(this).find("a").html("<i class='fa-solid fa-xmark'></i>");
            }
        })

    });
</script>

    
</body>
</html>