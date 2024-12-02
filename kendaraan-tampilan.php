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
            <a href="Vehicle.php" class="webset"> Vehicle </a>
            <a href="Booked.php" class="tombol2"> Booked </a>
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
    <div >
        <div class="kendaraan-tampilan">
        <a href="Vehicle-darat.php" class="back">
            <div class="back-div"><img src="chevron-left.svg" alt=""></div>
        </a>
        <img src="foto darat/avanza 1.jpeg" alt="" class="foto-kendaraan">
        <div class="deskripsi-mobil">
        <h1>Mobil Avanza th2012</h1 id="kendaraan">
        <p>Mobil ini berkapasitas 4 orang dengan bagasi yang luas di belakang. 
            kondisi mobil ini normal tidak ada kendala, namun terdapat beberapa bagian cat mobil yang tergores.</p>
            <img src="WhatsApp_Image_2024-12-02_at_16.38.06_3267965b-removebg-preview.png" alt="">
            <h1>Rp2.000.000/day</h1>
            <a href="order.php" id="Myfunction()">
                <div class="order">
                    <h1>ORDER NOW!</h1>
                </div>
            </a>
        </div>        
    </div>
    </div>
    <script>
        function Myfunction(kendaraan) {
            localStorage.setItem(kendaraan);
            window.location.href='order.php';
        }
    </script>
    <style>
        .kendaraan-tampilan {
            display: flex;
        }
        .foto-kendaraan {
            width: 700px;
            height: 479px;
            border-radius: 20px;
            position: relative;
            margin-top:180px;
            margin-left: 100px;
            box-shadow: 1px 1px 4px black;
        }
        .deskripsi-mobil img {
            width: 200px;
            height: auto;
            position: absolute;
            top: 230px;
            
            background-color: transparent;
        }
        .deskripsi-mobil {
            width: 600px;
            margin-top: 180px;
            margin-left: 80px;
        }
        .deskripsi-mobil h1{
            color: white;
            text-shadow: 2px 2px 3px black;
            background-color: transparent;
        }
        .deskripsi-mobil p {
            color: white;
            text-shadow: 2px 2px 3px black;
            margin-bottom: 100px;
        }
        .order {
            width: fit-content;
            height: 50px;
            padding: 5px 20px;
            border-radius: 30px;
            background-color: #b69c41;
            transition: 1s;
            margin-top: 10px;
        }
        .order:hover {
            scale: 1.08;
        }
    </style>
    
    


    
</body>
</html>