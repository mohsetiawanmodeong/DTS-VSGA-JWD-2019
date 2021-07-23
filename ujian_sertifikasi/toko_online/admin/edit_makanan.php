<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Ubah Data Makanan
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    include "koneksi.php";
                    $kdbrg = @$_GET['kdbrg'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM makanan WHERE br_id = '$kdbrg'");
                    $data = mysqli_fetch_array($sql);

                    ?>
                    <form action="update_makanan.php" method="post" enctype="multipart/form-data" role="form">
                        <div class="form-group">
                            <label>Nama Makanan</label>
                            <input type="hidden" id="br_id" name="br_id" value="<?php echo $kdbrg; ?>" />
                            <input type=" text" name="br_nm" class="form-control" value="<?php echo $data['br_nm']; ?> " />
                        </div>
                        <div class="form-group">
                            <label> Harga Makanan</label>
                            <input type="text" name="br_hrg" class="form-control" value="<?php echo $data['br_hrg']; ?> " />
                        </div>
                        <div class="form-group">
                            <label> Keterangan</label>
                            <input type="text" name="ket" class="form-control" value="<?php echo $data['ket']; ?> " />
                        </div>
                        <div class="form-group">
                            <label> Status Makanan</label>
                            <select class="form-control" name="br_sts">
                                <option> -- Pilih Status </option>
                                <option name="br_sts" <?= $data['br_sts'] === "Y" ? 'selected' : '' ?> value="Y">Y</option>
                                <option name="br_sts" <?= $data['br_sts'] === "N" ? 'selected' : '' ?> value="N">N</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gambar Makanan</label>

                            <input type="hidden" value="<?php echo $data['br_gbr']; ?>" name="br_gbr" style="background-color: black; color: white; height: 30px;" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="simpan" value="Ubah Data" class="btn btn-info">
                            <a href="?page=admin&aksi=lihat_makanan"><span class="btn btn-success"> Kembali</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- bAGI DUA BROO-->
<div class="col-md-6">
</div>