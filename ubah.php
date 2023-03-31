<?php
$link = mysqli_connect('localhost', 'root', '', 'sekolah');

if (!$link) {
    die("ada error" . mysqli_connect_error());
}

$query = "UPDATE murid SET nama='abdul' WHERE id = 6";
// jika data nya cukup komplex yang ingin diubah bukan hanya nama kita bisa gunakan dibawah ini
// $query = "UPDATE murid SET nama='abdul', umur=21, alamat='tegal'  WHERE id = 6";



if (mysqli_query($link, $query)) {
    echo "data berhasil diubah";
}
?>