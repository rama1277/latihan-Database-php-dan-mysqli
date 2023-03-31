<?php

$link = mysqli_connect('localhost', 'root', '', 'sekolah');

if (!$link) {
    die('ada error' . mysqli_connect_error());
}
// cara query menghapus data 
$query = "DELETE FROM murid WHERE id IN (3, 5)";
// jika ingin data nya dihapus banyak kita gunakan teknik antara
// $query = "DELETE FROM murid WHERE id BETWEEN 1 AND 6";  jadi data yang dihapus data dari 1 - 6



if (mysqli_query($link, $query)) {
    echo "data berhasil dihapus";
}

?>