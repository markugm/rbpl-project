<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Jago Sepeda</title>
    <style>
        body {
            display: flex;
            margin: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .left {
            width: 40%;
            background: #f0f4ff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        .left form {
            width: 100%;
            max-width: 300px;
        }
        .left input[type="email"],
        .left input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .left button {
            width: 100%;
            padding: 10px;
            background-color: #1d3b8b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .right {
            width: 60%;
            background: url('assets/images/toko.jpg') center center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
        .info {
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 20px;
        }
        .logo {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="left">
        <div class="logo">
            <img src="assets/images/logo.png" alt="Jago Sepeda" width="150">
        </div>
        <h2>Selamat Datang!</h2>

        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') : ?>
            <p style="color:red;">Email atau password salah!</p>
        <?php endif; ?>

        <form method="POST" action="check-login.php">
            <input type="email" name="email" placeholder="Masukkan email" required>
            <input type="password" name="password" placeholder="Masukkan kata sandi" required>
            <button type="submit">Masuk</button>
        </form>
    </div>

    <div class="right">
        <div class="info">
            <p><strong>Toko Sepeda Prambatan Jaya</strong><br>
            Jl. Kudus - Jepara No. 419, Prambatan Lor, Kec. Kaliwungu, Kab. Kudus, Jawa Tengah Indonesia<br>
            <a href="mailto:prambatan.jaya@gmail.com" style="color: #4fc3f7;">prambatan.jaya@gmail.com</a><br>
            +628562736372</p>
            <p>
                Sepeda<br>
                Mainan Anak<br>
                Sparepart<br>
                Aksesoris<br>
                Service
            </p>
        </div>
    </div>
</body>
</html>
