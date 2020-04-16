<?php 
    include('koneksi.php');
    
    $id = $_POST['kd_barang'];
    $nama = $_POST['np'];
    $harga = $_POST['hrp'];
    $satuan = $_POST['sat'];
    $kategori = $_POST['kat'];
    $gambar = $_POST['urlgambar'];
    $stok = $_POST['stk'];
    
    $quer = mysqli_query($koneksi, "UPDATE `data_barang` SET `np` = '$nama', `hrp` = '$harga', `sat` = '$satuan', `kat` = '$kategori', `urlgambar` = '$gambar', `stk` = '$stok' WHERE `data_barang`.`kd_barang` = $id;");

    if($quer == TRUE){
        header ("location:D://Coding//xampp//htdocs//crudphp//tampildata.php");
    }else{
        echo "Terjadi Kesalahan Data Gagal Di Update";
    }
?>
