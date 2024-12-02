<?php
session_start();
$logindiv = isset($_SESSION['user'] ) && ($_SESSION['user']) === true;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>    
    
    <div class="header">
        <div class="logo"><img src="image-removebg-preview.png" alt=""></div>
        <nav class="navbar">
            <a href="index.php" class="tombol2"> Home </a>
            <a href="Vehicle.php" class="tombol2"> Vehicle </a>
            <a href="#" class="webset"> Booked </a>
            <a href="About.php" class="tombol2"> About </a>
        </nav>
        <div class="icon">
        <div class="ig">
                <img src="12dba53c696b54f76cf115918eb910bc.png" alt="">
            </div>
            <div class="ig">
                <img src="83ce85ea4c79c4cedfa565a7e29f1cd7.png" alt="">
            </div>
            <div class="ig">
                <img src="f94c8f463a0b3788cb33486d57bfaa0a.png" alt="">
            </div>
            <?php if(!$logindiv):?>
            <a href="Login.php" style="color: white;background-color:transparent;margin: 5px;text-decoration: none;" id="login" onclick="fungsi()">login</a>
            <?php endif; ?>
            <?php if($logindiv): ?>
                <a href="logout.php" style="color: white;background-color:transparent;margin: 5px;text-decoration: none;" id="logout">logout</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="adalist"><div class="list"><h1>BOOKED</h1>  <div class="garis"></div><h1>you haven't  booked  yet</h1></div></div></div>
    <table id="dataorder"></table>
    
    
    
    


    
</body>
</html>