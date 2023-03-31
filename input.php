<?php

$link = mysqli_connect('localhost', 'root', '', 'sekolah');

if (!$link) {
    die('ada error' . mysqli_connect_error());
}

// cara query untuk memasukkan data ke database
$query = "INSERT INTO murid (nama, umur, alamat) VALUES ('adi', 22, 'karanglo')";


if (mysqli_query($link, $query)) {
    echo "berhasil di input datanya";
}

// nah cara nya jika data yang dimasukkan ada banyak maka gunakan
// $query .= "INSERT INTO murid (nama, umur, alamat) VALUES ('ahmad', 24, 'jatinangor')";

// if (mysqli_multi_query($link, $query)) {
//     echo "berhasil data dimasukkan";
// }
?>