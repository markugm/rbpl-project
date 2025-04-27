<?php
session_start();

$konek = new mysqli('localhost', 'root', '', 'user-jagopedia');

if ($konek->connect_error) {
    die("koneksi gagal: " . $konek->connect_error);
}

$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST['password']);

$query = "SELECT * FROM `users` WHERE email='$email';";
$hasil = mysqli_query($konek, $query);
$dataUser = mysqli_fetch_array($hasil);

if (mysqli_num_rows($hasil) === 1) {
    if (password_verify($password, $dataUser["password"])) {
        $_SESSION['email'] = $dataUser['email'];
        $_SESSION['id_user'] = $dataUser['id_user'];
        header("Location: homepage.php");
        exit;
    }
}

header("Location: loginpage.php?pesan=gagal");
exit;
?>
