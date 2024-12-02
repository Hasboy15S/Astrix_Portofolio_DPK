<?php
session_start();
$logindiv = isset($_SESSION['user'] ) && ($_SESSION['user']) === true;

?>
<script>
    function fungsi(){
        alert("selamat anda berhasil logout");
    }
</script>
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
            <a href="Login.php" style="color: white;background-color:transparent;margin: 5px;text-decoration: none;" id="login" >login</a>
            <?php endif; ?>
            <?php if($logindiv): ?>
                <a href="logout.php" style="color: white;background-color:transparent;margin: 5px;text-decoration: none;" id="logout" onclick="fungsi()">logout</a>
            <?php endif; ?>
        </div>
    </div>
        <a href="kendaraan-tampilan.php" class="back">
            <div class="back-div"><img src="chevron-left.svg" alt=""></div>
        </a>

        <div class="order">
            <div class="detail-item">
                <img src="foto darat/avanza 1.jpeg" alt="">
                <div class="teks-detail">
                    <h1>Mobil Avanza th2012</h1>
                    <p>Kapasitas : 4 orang</p>
                    <h3>Rp.2.000.000/day</h3>
                    <div class="garis" style="width: 100%; margin-left:0;"></div>
                </div>
            </div>
            <div class="order-form">
                <div class="wrapper">
                    <div class="judul"><h1>BOOKING</h1></div>
                    <div class="pisah">
                        <form action="" class="form" method="post">
                        <div class="nama">
                            <h3>Nama lengkap</h3><input type="text" name="Nama lengkap" placeholder="Nama Lengkap" class="input">
                        </div>
                        <div class="username">
                            <h3>Masukan username</h3>
                            <input type="text" name="username" id="" placeholder="username" class="input">
                        </div>
                        <div class="tanggal_pemesanan">
                            <h3>Tanggal Pemesanan</h3>
                            <input type="date" name="Tanggal pemesanan" id="" placeholder="" class="tanggal">
                        </div>
                        
                        <div class="hari-teks"><h3>Masukan Jumlah Hari</h3><input type="text" placeholder="1 hari" class="hari" nama="hari"></div>
                        <div class="bank">
                            <img src="bniremov.png" alt="">
                            <img src="briremov.png" alt="">
                            <img src="bca.png" alt="">
                        </div>
                        <div class="id-pembayaran"><h3>Masukkan Id Pembayaran</h3><input type="text" class="input" placeholder="Id pembayaran" id="pembayaran" nama="pembayaran"></div>
                        
                        <div class="bungkus">
                            <button type="submit" class="submit">ORDER NOW</button> 
                        </div>
                    </div>
                    
                </form>  
                </div>    
            </div>    
        </div>
        
    </div>

    <style>
        .wrapper h3 {
            color: white;
            text-shadow: 1px 2px 2px black;
        }
        .wrapper h1{
            color: white;
            text-shadow: 1px 2px 1px black;
        }
        .bungkus {
            width: 100%;
            display: flex;
            justify-content: center;
            background-color: transparent;
            margin-top: 50px;
        }
        .submit {
            width: 200px;
            height: 30px;
            border-radius: 20px;
            background-color: white;
        }
        .id-pembayaran {
            background-color: transparent;
        }
        .id-pembayaran h3 {
            text-align: center;
            background-color: transparent;
        }
        
        .bank {
            display: flex;
            background-color: transparent;
            justify-content: space-between;
        }
        .bank img{
            width: 100px;
            height: 70px;
            background-color: transparent;
        }
        .tanggal_pemesanan {
            background-color: transparent;
            display: flex;
            margin-top: 10px ;
            margin-top: 20px;
        }
        .tanggal_pemesanan h3 {
            background-color: transparent;
        }
        .username {
            background-color: transparent;
            margin-top: 15px    ;
        }
        .username h3 {
            background-color: transparent;
            text-align: center;
        }
        .pisah {
            display: flex;
            justify-content: center;
            background-color: #FFC800;
        }
        .hari-teks h3 {
            background-color: transparent;
            text-align: center;
        }
        .hari-teks {
            justify-content: center;
            background-color: transparent;
            margin-top: 20px;
        }
        .hari {
            width: 100%;
            height: 30px;
            border-radius: 30px;
            background-color: white;
            border: 2px black solid;
            text-align: center;
        }
        .isi-form {
            background-color: transparent;
        
        }
        .detail-item {
            margin-top: 120px;
            display: flex;
            gap: 20px;
        }
        .detail-item img {
            border-radius: 20px;
            width: 300px;
            height: fit-content;
        }
        .teks-detail {
            color: white;
        }
        .order {
            gap: 50px;
            display: flex;
            justify-content: center;
        }
        .wrapper {
            width: 500px;
            height: 600px;
            background-color: #FFC800;
            border-radius: 30px;
            margin-top: 120px;
            align-items: center;
        }
        .form {
            background-color: transparent;
            width: 400px;
        }
        .order-form {
            justify-content: center;
        }
        .tanggal {
            width: 190px;
            height: 30px;
            border-radius: 20px;
            background-color: white;
            margin-left: 5px;
            text-align: center;
        }
        .judul {
            background-color: transparent;
        }
        .judul h1{
            background-color: transparent;
            text-align: center;
        }
        .input {
            width: 100%;
            height: 30px;
            border-radius: 30px;
            background-color: white;
            border: 2px black solid;
            text-align: center;
        }
        .nama {
            background-color: #FFC800;
            margin-top: 15px;
        }
        .nama h3 {
            background-color: transparent;
            text-align: center;
        }
        
        input[type="date"]{
            color: black;
            font-size: 20px;
            
        }
    </style>
    
    


    
</body>
</html>