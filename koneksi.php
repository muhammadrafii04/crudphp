<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "data_crud";
$PORT = '3306';

$koneksi = new mysqli($HOST, $USERNAME, $PASSWORD,  $DATABASE, $PORT);

if($koneksi->connect_error) {
    die('Koneksi Gagal Tersambung silahkan anda periksa nama databasenya' .$koneksi->connect_error);
}
?>
