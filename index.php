<?php
session_start();
$logindiv = isset($_SESSION['user'] ) && ($_SESSION['user']) === true;
?>
<script>
    function fungsi(){
        alert("selamat anda berhasil logout");
    }
</script>
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
            <a href="#" class="webset"> Home </a>
            <a href="Vehicle.php" class="tombol2"> Vehicle </a>
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
            <a href="Login.php" style="color: white;background-color:transparent;margin: 5px;text-decoration: none;" id="login">login</a>
            <?php endif; ?>
            <?php if($logindiv): ?>
                    <a href="logout.php" style="color: white;background-color:transparent;margin: 5px;text-decoration: none;" id="logout" onclick="fungsi()">logout</a> 
            <?php endif; ?>
        </div>
    </div>
    <style>
        body {
            overflow-x: hidden;
        }
        .teksdepan {
            background-color: transparent;
            text-shadow: 4px 4px 4px black;
        }
        .teksdepan h1 { 
            background-color: transparent;
        }
        .teksdepan h2 {
            background-color: transparent;
        }
        .ig {
            width: 32px;
            height: 32px;
            color: wheat;
            background-color: white;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
        }
        .ig img {
            width: 20px;
            height: fit-content;
            border-radius: 50%;
            background-color: white;
            margin-top: 5px;
        }
        @media only screen and (max-width:900px){
            .navbar {
                display: block;
            }

            .tampilankendaraan {
                display: none;
            }
            .header {
                width: 100%;
            }
            .icon {
                margin-right: 5%;
            }
            .lingkaran {
                display: none;
            }
        }
    </style>
    <div class="lingkaran"></div>
    <div class="tampilankendaraan">
        <img src="image-removebg-preview (2).png" alt="" class="mobil"> 
    </div>
    <div class="teksdepan1">
        <div class="teksdepan">
            <h1>Astrix</h1>
            <h2>A fun-filled journey with Astrix, the family vehicle for Fun Adventures. </h2>
            <h2></h2>
            <a href="Vehicle.php" class="tombol">I Want To Rent</a>
        </div>
        
    </div>
    
    <div class="kotaksearch">
        <div class="searchbar1">
            <h1 style="font-size:50px;width:800px;color:#FFF5D1;">Hai,  kamu  mau  naik apa?</h1>
            <h1 style="color:white;font-size:30px;">Pilih medan yang kamu inginkan!</h1>
        </div>
    </div>        
    <style>
    .searchbar1 {
    position: absolute;
    top: 800px;
    height: fit-content;
    background-color: transparent;
    text-align: center;
    }
    .searchbar  h1 {
    background-color: transparent;
    color: #FFF5D1;
    font-size: 40px;
    }
    </style>
    <div class="icon2">
        <a href="Vehicle-udara.php"> 
            <div class="icon-hover">
            
            <img src="image-removebg-preview (3).png" alt=""> 
            <h1>UDARA</h1>   
        </div></a>
        <a href="Vehicle-darat.php">
            <div class="icon-hover">
            <img src="image-removebg-preview (4).png" alt="">
            <h1>DARAT</h1>
            </div>
        </a>
        <a href="Vehicle-air copy.php">
            <div class="icon-hover">    
           <img src="image-removebg-preview (5).png" alt="">
           <h1>AIR</h1> 
            </div>
        </a>
        
        
    </div>
    <style>
        .icon2 a {
            text-decoration: none;
        }
        .icon2 {
            display: flex;
            position: relative;
            justify-content: center;
            background-color: transparent;
            gap: 1rem;
            z-index: +1;
            top: 580px;
            
        }
        .icon-hover img{
            width: 50px;
            height: 50px;
            background-color: white;
            border-radius: 50%;
            margin: 5px;
        }
        .icon-hover {
            border-radius: 35px;
            width: 60px;
            height: 60px;
            background-color: white;
            transition: 1s;
            display: flex;
            text-align: center;
            cursor: pointer;
        }
        .icon-hover h1 {
            width: 0%;
            display: flex;
            color: transparent;
            transition: 1s;
            background-color: transparent;
            text-align: center;
            font-size: 30px;
            font-weight: 700;
            font-family: 'poppins';
            padding: 9px 12px;
        }
        .icon-hover h1:hover {
            width: 100%;
            color: black;
        }
        .icon-hover:hover {
            width: 190px;
        }
        
    </style>
    <div class="testimoni"><h1 class="webset">LOKASI</h1></div>
    <div class="location">
        <div class="lokasi">
            <div class="gmaps"><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d31650.36273127082!2d109.2482251!3d-7.432534349999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1733118897235!5m2!1sid!2sid" width="600" height="450" style="border:0; border-radius:30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe></div>
            <div class="lokasi-teks">
                <h1>Purwokerto</h1>
                <p>jl. Astrix no 10, Mersi, Kecamatan Purwokerto Selatan, Banyumas, Jawa Tengah 56383</p>
            </div>
        </div>
    </div>
    <style>
        .location {
            display: flex;
            justify-content: center;
        }
        .lokasi {
            display: flex;
            position: absolute;
            top: 1100px;
            gap: 70px;
        }
        .lokasi-teks h1 {
            font-size: 100px;
            color: white;
            text-shadow: 4px 4px 2px black;
        }
        .lokasi-teks p {
            font-size: 20px;
            color: white;
            width: 500px;
            text-shadow: 4px 2px 2px black;
        }

    </style>
    </div>
    <div class="kotakmerk">
        <div class="semuabarisan">
            <h1>Connecting you to the biggest brands in Rental Vehicle</h1>
            <div class="barisan1">
                <img src="pngwing.com (1).png" alt="">
                <img src="pngwing.com (2).png" alt="">
                <img src="pngwing.com (3).png" alt="">
                <img src="pngwing.com (4).png" alt="">
                <img src="pngwing.com (5).png" alt="">
                <img src="pngwing.com (6).png" alt="">
            </div>
            <div class="barisan2">
                <img src="pngwing.com (7).png" alt="">
                <img src="pngwing.com (8).png" alt="">
                <img src="pngwing.com (9).png" alt="">
                <img src="pngwing.com.png" alt="">
            </div> 
        </div>
    </div>
    <div class="alasan">
        <div class="alasan-isi">
            <div class="alasan-teks"><h1>Why Choose Us?</h1></div>
            <div class="alasan-foto">
                <div class="alasan1">
                    <div class="alasan-atas">
                        <img src="image-removebg-preview (6).png" alt="">
                        <h1>Low Price</h1>
                    </div>
                    <div class="alasan-bawah">
                        <h1>all vehicles are cheap and make your wallet calm</h1>
                    </div>
                </div>
                <div class="alasan1">
                    <div class="alasan-atas">
                        <img src="image-removebg-preview (9).png" alt="">
                        <h1>5 Million++ Reviews</h1>
                    </div>
                    <div class="alasan-bawah">
                        <h1>By real, verified customers </h1>
                    </div>
                </div>
                <div class="alasan1">
                    <div class="alasan-atas">
                        <img src="image-removebg-preview (8).png" alt="">
                        <h1>Flexibel Rentals</h1>
                    </div>
                    <div class="alasan-bawah">
                        <h1>Cancel or change most bookings for free up to 48 hours before pick-up</h1>
                    </div>
                </div>
            </div>
            
        </div>
    </div> 
    <h5 style="position:fixed;left:0;bottom:0;background-color:transparent;">@copyright astrix</h5>
    


    
</body>
</html>