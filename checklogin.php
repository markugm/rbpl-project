<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$datadiri = [
    [
        'email' => 'manager@jagosepeda.com',
        'password' => 'manager123',
        'role' => 'manager'
    ],
    [
        'email' => 'pegawai1@jagosepeda.com',
        'password' => 'pegawai1*',
        'role' => 'pegawai'
    ]
];

$loginSuccess = false;

foreach ($datadiri as $user) {
    if ($email === $user['email'] && $password === $user['password']) {
        $loginSuccess = true;
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['logged_in'] = true;

        if ($user['role'] === 'manager') {
            header("Location: homepage-mnj.php");
            exit();
        } else {
            header("Location: homepage-pgw.php");
            exit();
        }
    }
}

if (!$loginSuccess) {
    header("Location: loginpage.php?pesan=gagal");
    exit();
}
?>
