<?php 
session_start();
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style_1.css">
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #0c3c4d;
}
.wrapper{
    position: relative;
    width: 400px;
    height: 500px;
    background: #c7a632;
    box-shadow: 0 0 0 #ae9c5a;
    border-radius: 20px;
    padding: 40px;
}
</style>
<body>
<?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'" );
            if(mysqli_num_rows($user) > 0){
                $data = mysqli_fetch_array($user);
                $_SESSION['user'] = $data;
                $_SESSION['user'] = true;
                echo "<script>alert('selamat anda berhasil login ".$data['username'].".');window.location = 'index.php'</script>";
            } 
            else {
                echo "<script>alert('salah pw ulangi lagi')</script>";
            }
        }

    ?>
    <!-- sign In -->
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form method="post" action="">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="username" >
                    <label for="">Username</label>
                </div>
                    <div class="input-group">
                        <input type="password" name="password"
                        id="password">
                        <label for="">Password</label>
                </div>
                <div class="remember">
                    <label for=""><input type="checkbox" required> Remember Me</label>
                </div>
                <button type="submit" name="submit">Login</button>
                <div class="signup-link">
                    <p>Dont have a account? <a href="Sign up.php"class="Signupbtn-link">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>