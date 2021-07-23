<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Biodata Sederhana</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="col-md-4 col-md-offset-4 form-login">

        <?php
        if (isset($_GET['jk'])) {
            if ($_GET['jk'] == "kosong") {
                echo "<h4 style='color:red'>Nama Belum Di Masukkan!</h4>";
            }
        }
        ?>

        <div class="outter-form-login">
            <div class="logo-login">
                <em class="glyphicon glyphicon-user"></em>
            </div>
            <h2 class="text-center title-login">Form Biodata</h2><br>
            <form action="cekbiodata.php" /*class="inner-login"*/ method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="ttl" placeholder="Masukkan Tempat Tanggal Lahir" required>
                </div>

                <div class="form-group">
                    <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="usia" placeholder="Masukkan Usia" required>
                </div>

                <div class="form-control">
                    <div class="row">
                        <span class="col-md-6">Jenis Kelamin :</span>
                        <div class="col-md-3">
                            <div>
                                <input type="radio" name="gender" value="pria"> Pria
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <input type="radio" name="gender" value="wanita"> Wanita
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="reset" class="btn btn-danger" value="Reset">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
                <hr>
                <div class="text-center forget">
                    <p>Copyright &copy 2019 Made By Setiawan</p>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>