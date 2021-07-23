<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
</head>

<body>

    <h2>Edit Data Barang</h2>
    <br>
    <?php
    include 'koneksi.php';
    $no = $_GET['no'];
    $data = mysqli_query($koneksi, "select * from mahasiswa where no='$no'");
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>No </td>
                    <td>
                        <input type="text" name="no" style="width:100px value=" <?php echo $d['no']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Merek </td>
                    <td><input type="text" name="nama_merek" style="width:200px value=" <?php echo $d['nama_merek']; ?>"></td>
                </tr>
                <tr>
                    <td>Warna </td>
                    <td><input type="text" name="warna" style="width:300px value=" <?php echo $d['warna']; ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah </td>
                    <td><input type="text" name="jumlah" style="width:80px value=" <?php echo $d['jumlah']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><button onclick="window.location.href='index.php'">Kembali</button></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>