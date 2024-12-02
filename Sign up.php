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
</head>
<link rel="stylesheet" type="text/css" href="style_1.css">
<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #0c3c4d;
}
</style>
<body>
    <?php
    if(isset($_POST['username'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $daftar = mysqli_query($koneksi, "INSERT INTO user(email,username,password) values('$email','$username','$password')");
        if($daftar){
            echo "<script>alert('selamat anda berhasil mendaftar, silahkan login');window.location='Login.php'</script>";
        }
        else{
            echo "<script>alert('Gagal mendaftaftar, silahkan register ulang');window.location='Sign up.php'</script>";
        }
    

    }
    ?>
    <!-- Sign Up -->
    <div class="form-wrapper sign-up">
        <form method="post">
            <h2>Sign Up</h2>
            <div class="input-group">
                <input type="text" name="username" required>
                <label for="">Username</label>
            </div>
            <div class="input-group">
                <input type="email" name="email" required>
                <label for="">Email</label>
            </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
            </div>
            <div class="remember">
                <label for=""><input type="checkbox" required> I agree to the terms and conditions</label>
            </div>
            <button type="submit">Sign Up</button>
            <div class="signup-link">
                <p>Already have an account? <a href="Login.php"class="SignInbtn-link">Log in</a></p>
            </div>
        </form>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>