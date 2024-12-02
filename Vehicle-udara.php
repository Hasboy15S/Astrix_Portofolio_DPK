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
    <div class="darat">
        <div class="darat-vehicle">
            <div class="darat-isi">
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/IMG-20241202-WA0039.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Pesawat Tempur</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/IMG-20241202-WA0040.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Pesawat priva 20 kursi</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/IMG-20241202-WA0041.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Pesawat Lion 2020</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/IMG-20241202-WA0042.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Helikopter kuning R4000</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/IMG-20241202-WA0043.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Pesawat garuda 100 kursi</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/WhatsApp Image 2024-12-02 at 13.13.22_5fdf0226.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Balon udara</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/WhatsApp Image 2024-12-02 at 13.13.22_88f22f5a.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Pesawat Private</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/WhatsApp Image 2024-12-02 at 13.13.22_8ae8c1b1.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Pesawat citilink</h1>
                    </div>
                </a>    <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/pesawat1.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Pesawat Tempur 1590</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/pesawat2.jpg" alt="">
                        <div class="garis"></div>
                        <h1>Helikopter walikota</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/pesawat3.jpg" alt="">
                        <div class="garis"></div>
                        <h1>helikopter presiden</h1>
                    </div>
                </a>
                <a href="" class="darat-mobil">
                    <div class="darat-mobil-isi">
                        <img src="foto udara/pesawat4.jpg" alt="">
                        <div class="garis"></div>
                        <h1>pesawat citilink 2009</h1>
                    </div>
                </a>        
            </div>
        </div>
        
    </div>
    <div class="barsearch-vehicle"><input type="text" placeholder="Cari Kendaraan" required id="filter" onkeyup="search()"></div>
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