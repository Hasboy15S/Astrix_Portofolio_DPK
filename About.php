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
            <a href="Booked.php" class="tombol2"> Booked </a>
            <a href="#" class="webset"> About </a>
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
    <div class="about">
        <h1>About us?</h1>
        <div class="aboutus">
            <div class="isiabout">
               <div class="fototempat"><img src="sewa.jpg" alt=""></div>
                <div class="teksabout">
                <p>Astrix merupakan tempat dimana anda bisa menyewa kendaraan berbagai jenis dengan kualitas yang maksimal.
                    Astrix menyediakan kendaraan untuk berbagai keadaan,anda ingin berpergian keluar kota dengan keluarga anda? Astrix menyediakan berbagai macam mobil. anda ingin terbang sambil melihat pemandangan indah? Astrix menyediakan pesawat terbang. Anda ingin mengarungi samudra? Astrix menyediakan kapal pesiar. 
                    Astrix akan selalu hadir disaat kamu ingin berkendara. your trip, your happiness.</p>
                <h3>Visit us!</h3>
                <h3>Alamat : -</h3>
                <h3>Contact person : 0876 - 5432 - 1000</h3>
                <h3>Instagram : @rentwith.astrix</h3>

                </div> 
            </div>
            

        </div>
    </div>
<style>
        .about {
            display: flex;
            justify-content: center;
        }
        .about h1 {
            margin-top: 50px;
            text-align: center;
            font-size: 100px;
            font-weight: 500;
            color:white;
            text-shadow: 4px 4px 2px black;
        }
        .aboutus {
            width: 90%;
            position: absolute;
            top: 200px;
            gap: 70px;
        }
        .aboutus h1 {
            text-align: center;
            font-size: 100px;
            font-weight: 500;
            color:white;
            text-shadow: 4px 4px 2px black;
        }
        .isiabout {
            justify-content: center;
            display: flex;
            gap: 40px;
        }
        .fototempat img {
            width: 700px;
            height: fit-content;
            border-radius: 30px;
            box-shadow: 2px 3px 2px black;
        }
        .teksabout p{
            color: white;
            text-shadow: 4px 2px 2px black;
            width: 100%;
            font-size: 20px;
            margin-bottom: 100px;
        }
        .teksabout h3 {
            color: white;
            text-shadow: 4px 2px 2px black;
        }
    
</style>
    
    


    
</body>
</html>