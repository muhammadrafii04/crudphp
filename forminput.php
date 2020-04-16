<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input</title>
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
 
<form  action="simpandata.php" method="post">
<div class="container">
        <table class="table" align="center">
            <tr>
                <h2>Form Input</h2>
            </tr>
            <hr>
            <tr>
                <td>
                    <h4>Nama Makanan</h4>
                </td>
                <td>
                    <input type="text" style="width: 300px" name="np">
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Harga</h4>
                </td>
                <td>
                    <input type="number" style="width: 300px" name="hrp">
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Satuan</h4>
                </td>
                <td><select name="sat" style="width: 300px">
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
                <select name= "kat" style="width: 300px">
                    <option value="Tidak Ada Pilihan">Pilih</option>
                    <option value="Minuman Dingin">Minuman</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Snack">Snack <option>
                </select>
                </td>
            </tr>
             
            <tr>
                <td>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    <button type="reset" class="btn btn-outline-danger">Reset</button>
                </td>
            </tr>
            </form>

        </table>
    </div>


</body>
</html>
