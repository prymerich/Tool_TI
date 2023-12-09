<?php

$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "rental_mobil";

$konek  = mysqli_connect($host, $user, $pass, $db);
if (!$konek){
    die("Koneksi Gagal". mysqli_connect_error());
}