<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <h2>Data Barang</h2>
    <table border="5">
        <tr>
            <th>&nbsp No &nbsp</th>
            <th>&nbsp Nama Merek &nbsp</th>
            <th>&nbsp Warna &nbsp</th>
            <th>&nbsp Jumlah &nbsp</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from printer");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_merek']; ?></td>
                <td><?php echo $d['warna']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a href="tambah.php">Tambah Data</a>
</body>

</html>