<?php

    $hostname   = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "user-jagopedia";

    $konek    = new mysqli($hostname, $username, $password, $database);
    if ($konek->connect_error) 
    {
        die("koneksi gagal : " . mysqli_connect_error());
    } 
    else 
    {
        echo "koneksi berhasil";
    }

?>