<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Barang</title>
</head>

<body>
    <h3>Tambah Data Barang</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>No </td>
                <td><input type="text" name="no" style="width:100px" required></td>
            </tr>
            <tr>
                <td>Nama Merek </td>
                <td><input type="text" name="nama_merek" style="width:200px;" required></td>
            </tr>
            <tr>
                <td>Warna </td>
                <td><input type="text" name="warna" style="width:300px;" required></td>
            </tr>
            <tr>
                <td>Jumlah </td>
                <td><input type="text" name="jumlah" style="width:80px;" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
            <tr>
                <td><input type="reset" value="Ulangi"></td>
            </tr>
            <tr>
                <td><button onclick="window.location.href='index.php'">Kembali</button></td>
            </tr>
        </table>
    </form>
</body>

</html>