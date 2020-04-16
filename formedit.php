<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>

<style>
.container{
    padding-right: 30px;
    padding-left: 30px;
    margin-left: auto;
    margin-right: auto;
    width: 70%;
    text-align: center;
    background-color:#34495e;
    border: 3px solid black;
    color : whitesmoke;
}

/* button{ 
    background: crimson;
    width: 55px;
    height: 35px;
    border-radius: 5px;
    color: whitesmoke;
} */
.tombol{ 
    background: crimson;
    width: 100px;
    height: 35px;
    border-radius: 5px;
    color: whitesmoke;
}
</style>

<body>
<?php 
include('koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi," SELECT * FROM `data_barang` WHERE `kd_barang`= $id");

while($data=mysqli_fetch_array($query)) {
    $id = $data['kd_barang'];
    $nama = $data['nama_barang'];
    $harga = $data['harga'];
    $satuan = $data['satuan'];
    $kategori = $data['kategori'];
    $gambar = $data['url_gambar'];
    $stok = $data['stock'];
}
?>
<form  action="edit.php" method="post">
<div class="container">
        <table class="table" align="center">
            <tr>
                <h2>Form Edit</h2>
            </tr>
            <hr>
            <tr>
                <td>
                    <h4>Id Makanan</h4> 
                </td>
                <td>
                    <input type="number"  style="width: 300px" name="kd_barang" value=<?php echo $id ?> readonly> 
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Nama Makanan</h4>
                </td>
                <td>
                    <input type="text" style="width: 300px" name="np" value=<?php echo $nama ?> required>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Harga</h4>
                </td>
                <td>
                    <input type="number" style="width: 300px" name="hrp" value=<?php echo $harga ?> required>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Satuan</h4>
                </td>
                <td><select name="sat" style="width: 300px" value=<?php echo $satuan ?>  required>
                    <option value="Tidak Ada Pilihan">Pilih</option>
                    <option value="Gelas">Gelas</option>
                    <option value="Piring">Piring</option>
                    <option value="Mangkok  ">Mangkok</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Kategori</h4>
                </td>
                <td>
                <select name= "kat" style="width: 300px" value=<?php echo $kategori ?>>
                    <option value="Tidak Ada Pilihan">Pilih</option>
                    <option value="Minuman Dingin">Minuman</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Snack">Snack <option>
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Url Gambar</h4>
                </td>
                <td>
                    <input type="url" style="width: 300px" name="urlgambar" value=<?php echo $gambar ?>>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Stock</h4>
                </td>
                <td>
                    <input type="number" style="width: 300px" name="stk" value=<?php echo $stok ?> required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Save" name = "tombol" class="tombol">
                </td>
            </tr>
            </form>

        </table>
    </div>


</body>
</html>
