<?php 
include('koneksi.php');

$id = $_GET['id'];

$perintah = mysqli_query($koneksi, "DELETE FROM `data_barang` WHERE `kd_barang` = $id");
if ($perintah==TRUE) {
    echo '<div class="alert alert-success" role="alert">
    Data berhasil di hapus
    <a href="tampildata.php" class="alert-link">Kembali ke table</a></div>';;
}
else {
    echo 'Data gagal di hapus';
}
?>
