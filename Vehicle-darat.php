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
    <a href="Vehicle.php" class="back">
        <div class="back-div"><img src="chevron-left.svg" alt=""></div>
    </a>
    <div class="search">
    <div class="barsearch-vehicle"><input type="text" placeholder="Cari Kendaraan" id="filter" onkeyup="search()"></div>
    <div class="darat">
        <div class="darat-vehicle">
            <div class="darat-isi" id="darat-isi">
                <a href="kendaraan-tampilan.php" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/avanza 1.jpeg" alt="">
                        <div class="garis"></div>
                        <h1>Mobil Avanza 2012</h1>
                    </div>
                </a>
                <a href="avanza-2021.php" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/avanza.jpeg" alt="">
                        <div class="garis"></div>
                        <h1>Mobil Avanza th2021</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0030.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Mobil Fortuner th2020</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0028.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Mobil Mini Cooper 213</h1>
                    </div>
                </a>   
                <a href="kendaraan-tampilan.html" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0015.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Motor honda CBR 150cc</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0016.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Mobil Xenia th2017</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0029.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Mobil mini</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0018.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Mobil Toyota altis</h1>
                    </div>
                </a>   <a href="kendaraan-tampilan.html" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0033.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Mobil Van Keluarga</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0034.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Motor vario 150cc</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/WhatsApp_Image_2024-12-02_at_13.29.03_aaba3091-removebg-preview.png" alt="">
                        <div class="garis"></div>
                        <h1>Mobil Lamborgini 100000cc</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto darat/IMG-20241202-WA0017.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Motor scoopy 2018</h1>
                    </div>
                </a>    
            </div>
            
        </div>
        
    </div>
    </div>
    
    <script>
        function search() {
    let filter = document.getElementById('filter').value.toUpperCase();
    let item = document.querySelectorAll('.darat-mobil');
    let l = document.getElementsByTagName('h1');
    for(var i = 0;i<=l.length;i++){
        let a=item[i].getElementsByTagName('h1')[0];
        let value=a.innerHTML || a.innerText || a.textContent;
        if(value.toUpperCase().indexOf(filter) > -1) {
            item[i].style.display="";
            }
            else
            {
            item[i].style.display="none";
            }
            }
        }
       
    </script>
</body>
</html>