  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tampil Data</title>
    <style>
        .stokwarna {
            background-color: red;
            color: white;
        }
        .container{
        padding-right: 30px;
        padding-left: 30px;
        margin-left: auto;
        margin-right: auto;
        width: 70%;
        text-align: center;
        background-color: lightblue;
        border: 3px solid black;
        }

        .isi{
        padding-right: 30px;
        padding-left: 30px;
        margin-left: auto;
        margin-right: auto;
        width: 70%;
        text-align: center;
        }
        .tombol{

        color: whitesmoke;
        }
        .tombol1{
            background:#0984e3 ;
            width: 130px;
            height: 35px;
            border-radius: 5px;
            margin-top: 35px;
            }
    </style>
</head>
<body>
    <?php 
        include("koneksi.php");
        $hasil=mysqli_query($koneksi,"SELECT * FROM data_barang");
    ?>
    <table class="container" border="1">
    <tr>
        <center><h2>Form Input</h2></center>    
    </tr>
            <thead class="isi">
                <tr>
                <th>Id Makanan</th>
                <th>Nama Makanan</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Stok</th>
                <th>Modify</th>
                </tr>
            </thead>
        <?php while($data = mysqli_fetch_array($hasil)){ ?>
            <tr>
                <td> <?php echo $data['kd_barang'] ?> </td>
                <td> <?php echo $data['nama_barang'] ?> </td>
                <td> <?php echo $data['harga'] ?> </td>
                <td> <?php echo $data['satuan'] ?> </td>
                <td> <?php echo $data['kategori'] ?> </td>
                <td><img src=" <?php echo $data['url_gambar'] ?>"style='width: 100px; height: 100px;' alt='Image'></td>

                <?php if($data['stock'] <= 5) { ?>
                    <td class="stokwarna"><?php echo $data['stock'] ?> </td>
                <?php } else { ?>
                    <td><?php echo $data['stock'] ?> </td> 
                <?php } ?>

                <td>
                <button type="button" class="btn btn-secondary"><a href="formedit.php?id=<?php echo $data['kd_barang']?>" class="tombol">Edit</a></button>
                <button type="button" class="btn btn-danger"><a href="hapus.php?id=<?php echo $data['kd_barang']?>"class="tombol">Hapus</a></button>
                </td>
            </tr>
        <?php } ?>  
    </table>

    <center>
    <button type="button"class="tombol1"><a href="forminput.php" class="tombol">Tambah Data</a></button>
    </center>
</body>
</html>
