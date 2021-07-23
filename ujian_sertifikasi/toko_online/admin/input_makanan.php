<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Tambah Data Makanan</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<form action="" method="post" enctype="multipart/form-data" role="form">
						<div class="form-group">
							<label>Nama Makanan</label>
							<input type="text" name="br_nm" class="form-control" placeholder="Masukkan Nama Makanan" required />
						</div>
						<div class="form-group">
							<label> Harga Makanan</label>
							<input type="text" name="br_hrg" class="form-control" placeholder=" Masukkan Harga Makanan" required />
						</div>
						<div class="form-group">
							<label> Keterangan</label>
							<input type="text" name="ket" class="form-control" placeholder=" Masukkan Keterangan" required />
						</div>
						<div class="form-group">
							<label> Status Makanan</label>
							<select class="form-control" style=" width: 300px; height: 30px; border: 2px; " name="br_sts">
								<option> -- Pilih Status </option>
								<option name="br_sts" value="Y"> Y </option>
								<option name="br_sts" value="N"> N</option>
							</select>
						</div>
						<div class="form-group">
							<label>Gambar Makanan</label>

							<input type="file" name="br_gbr" style="background-color: black; color: white; height: 30px;" />
						</div>
						<div class="form-group">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							<input type="reset" name="reset" value="Reset" class="btn btn-danger">

						</div>
					</form>
					<?php
					include 'koneksi.php';

					$br_id = @$_POST['br_id'];
					$br_nm = @$_POST['br_nm'];
					$br_hrg = @$_POST['br_hrg'];
					$ket = @$_POST['ket'];
					$br_sts = @$_POST['br_sts'];


					$sumber = @$_FILES['br_gbr']['tmp_name'];
					$target = 'assets/images/makanan/';
					$nama_gambar = @$_FILES['br_gbr']['name'];


					$simpan_data = @$_POST['simpan'];

					if ($simpan_data) {

						if ($br_nm == "" || $br_hrg == "" || $ket == "" || $br_sts == "" || $nama_gambar == "") {
							?>

							<script type="text/javascript">
								alert("Inputan harus diisi, silahkan Lengkapi lagi !!");
							</script>
						<?php

						} else {


							$pindah = move_uploaded_file($sumber, $target . $nama_gambar);

							if ($pindah) {
								mysqli_query($koneksi, "INSERT INTO makanan VALUES ('$br_id','$br_nm','$br_hrg','$ket','$br_sts','$nama_gambar')");
								?>

								<script type="text/javascript">
									alert(" Data berhasil disimpan! ");
									window.location.href = '?page=admin&aksi=lihat_makanan';
								</script>
							<?php

							} else {


								?>
								<script type="text/javascript">
									alert("Oops...", "gambar gagal disimpan  !!:(", "error");
								</script>

							<?php
							}
						}
					}


					?>

				</div>
			</div>
		</div>
	</div>
</div>