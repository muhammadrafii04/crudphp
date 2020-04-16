<?php 
include('koneksi.php');

$nama = $_POST{'np'};
$harga = $_POST{'hrp'};
$satuan = $_POST{'sat'};
$kategori = $_POST{'kat'};
$gambar = $_POST{'urlgambar'};
$stok = $_POST{'stk'};

$cekid = mysqli_query($koneksi, "SELECT * from data_barang order by kd_barang DESC LIMIT 0,1");
$id = mysqli_fetch_array($cekid);
$id_hasil = (int) ($id['kd_barang'])+1;

$perintahnya = mysqli_query($koneksi, "INSERT INTO `data_barang` (`kd_barang`, `nama_barang`, `harga`, `satuan`, `kategori`, `url_gambar`, `stock`) 
VALUES ('$id_hasil', '$nama', '$harga', '$satuan', '$kategori', '$gambar', '$stok');");

if ($perintahnya==TRUE) {
    header("Location:tampildata.php");
}
else {
    echo "Data Gagal Disimpan ke ";
}
?>
