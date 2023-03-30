<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>


    <!-- css file extension -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<div class="container">

    <div class="home">
        <?php
            $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = `$user_id`") or die('query failed');
            if(mysqli_num_rows($select) > 0){
                $fetch = mysqli_fetch_assoc($select);
            }
        ?>
        <h3><?php echo $fetch['name']; ?></h3>
        <a href="update_profile.php" class = "btn"></a>
    </div>

</div>

</body>
</html>