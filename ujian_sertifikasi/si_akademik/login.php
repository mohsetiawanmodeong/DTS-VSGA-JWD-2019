<?php $thisPage = "Login"; ?>
<?php $title = "Login" ?>
<?php $description = "Login" ?>
<?php
include("akses.php");
include("header.php"); // memanggil file header.php
require("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
<!-- Start container -->
<div class="container">
    <div class="content login">
        <form class="form-signin" action="" method="post">
            <center>
                <h2 class="form-signin-heading">Silahkan Login</h2>
            </center><br>
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
            </div><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">Login</button>
        </form>
    </div> <!-- /.content -->
</div>
<!-- End container -->

<?php
if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($koneksi, htmlentities($_POST['username']));
    $pass = mysqli_real_escape_string($koneksi, htmlentities(md5($_POST['password'])));

    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE username='$user' AND password='$pass'") or die(mysqli_error($koneksi));
    if (mysqli_num_rows($sql) == 0) {
        echo '<center><span class="label label-danger">User tidak ditemukan</span></center>';
    } else {
        $row = mysqli_fetch_assoc($sql);
        if ($row['level'] == 'admin') {
            $_SESSION['admin'] = $user;
            $_SESSION['level'] = 'admin';
            echo '<script language="javascript">document.location="admin/index.php";</script>';
        } else {
            echo '<center><div class="alert alert-danger">Upss...!!! Login gagal.</div></center>';
        }
    }
}
?>

<?php
include("footer.php"); // memanggil file footer.php
?>