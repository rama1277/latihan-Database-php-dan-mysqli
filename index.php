<?php
// membuat database php

// menghubungkan databases
// host,user,password,nama_db

$link = mysqli_connect('localhost', 'root', '', 'sekolah');

if (!$link) {
    die('ada error' . mysqli_connect_error()); // ingat jika web nya sudah live jangan lupa fungsi ini dimatikan aar user tidak bisa melihat pesan error pada web kita
}
// ============================================================
// // contoh membuat database dari script php ke phpmyadmin
// $query = "CREATE DATABASE sekolahkoding";
// if (mysqli_query($link, $query)) {
//     echo "berhasil membuat database";
// } else {
//     echo "gagal";
// }

// fungsi dari mysqli_query yaitu membuat konfigurasi ambil dan sejenisnya menggunakan php menuju db

// Filter data :LIMIT, ORDER BY, WHERE.  contoh where
// $query = "SELECT * FROM murid where alamat='jatibarang'";
//===================================================================

// ===================================================================
$query = "SELECT * FROM murid";
$hasil = mysqli_query($link, $query);


if (mysqli_num_rows($hasil) > 0) {

    //mysqli_fetch_assoc untuk membaca data lebih spesifik
    while ($data = mysqli_fetch_assoc($hasil)) {
        echo $data['nama'] . ' ' . $data['alamat'] . '<br>';
    }
}
// ===================================================================
?>