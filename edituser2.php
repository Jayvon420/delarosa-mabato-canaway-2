<?php 

require 'function2.php';
$id = $_GET["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id = $id"));
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
<form class="" action="" method="post" enctype="multipart/form-data">

Name
<input type="text" name="name"  required> <br>
Image
<input type="file" name="file" required> <br>
<button type="submit" name="submit" value="edit">Edit</button>
</form>

<br>
<a href="index.php">Index Page</a>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
        <div class="content-parent">

            <form class="content-form" action="" method="post" enctype="multipart/form-data">
    
                <div class="text font-krona">
                    <label for="text">Tittle</label>
                    <input class="font-krona" type="text" name="name"  value="<?php echo $user['name']; ?>"required>
                </div>
        
                <div class="font-krona">
                    <button type="button" class="btn-warning font-krona">
                     <i class="fa-solid fa-arrow-up-from-bracket"></i>Upload Here
                     <input type="file" name="file">
    
                    </button>
    
                    
                    <button class="font-krona btn-add" type="submit" name="submit" value="edit">
                        Save
                    </button>
             
                </div>
            </form>
    
        </div>
        


<a href="index.html">Index Page</a>

</body>
</html>

