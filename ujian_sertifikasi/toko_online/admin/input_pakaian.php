<div class="col-md-8">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Input Data Pakaian</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<form action="" method="post" enctype="multipart/form-data" role="form">
						<div class="form-group">
							<label>Nama Pakaian</label>
							<input type="text" name="br_nm" class="form-control" placeholder="Masukkan Nama Pakaian" required />
						</div>
						<div class="form-group">
							<label> Harga Pakaian</label>
							<input type="text" name="br_hrg" class="form-control" placeholder=" Masukkan Harga Pakaian" required />
						</div>
						<div class="form-group">
							<label> Stock Pakaian</label>
							<input type="text" name="br_stok" class="form-control" placeholder=" Masukkan Jumlah Stock" required />
						</div>
						<div class="form-group">
							<label> Keterangan</label>
							<input type="text" name="ket" class="form-control" placeholder=" Masukkan Keterangan" required />
						</div>
						<div class="form-group">
							<label> Status Pakaian</label>
							<select class="form-control" style=" width: 300px; height: 30px; border: 2px; " name="br_sts">
								<option> -- Pilih Status </option>
								<option name="br_sts" value="Y"> Y </option>
								<option name="br_sts" value="N"> N</option>
							</select>
						</div>
						<div class="form-group">
							<label>Gambar Pakaian</label>

							<input type="file" name="br_gbr" style="height: 30px; color: white; background-color: dodgerblue;" />
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
					$br_stok = @$_POST['br_stok'];
					$ket = @$_POST['ket'];
					$br_sts = @$_POST['br_sts'];


					$sumber = @$_FILES['br_gbr']['tmp_name'];
					$target = 'assets/images/pakaian/';
					$nama_gambar = @$_FILES['br_gbr']['name'];


					$simpan_data = @$_POST['simpan'];

					if ($simpan_data) {

						if ($br_nm == "" || $br_hrg == "" || $br_stok == "" || $ket == "" || $br_sts == "" || $nama_gambar == "") {
							?>

							<script type="text/javascript">
								alert("Inputan harus diisi, silahkan Lengkapi lagi !!");
							</script>
						<?php

						} else {


							$pindah = move_uploaded_file($sumber, $target . $nama_gambar);

							if ($pindah) {
								mysqli_query($koneksi, "INSERT INTO pakaian VALUES ('$br_id','$br_nm','$br_hrg','$br_stok', '$ket','$br_sts' ,'$nama_gambar')");
								?>

								<script type="text/javascript">
									alert(" Data berhasil disimpan! ");
									window.location.href = '?page=admin&aksi=lihat_pakaian';
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