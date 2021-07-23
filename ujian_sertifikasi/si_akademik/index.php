<?php $thisPage = "Dashboard"; ?>
<?php $title = "Dashboard User" ?>
<?php $description = "Dashboard User" ?>
<?php
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
<!-- Start container -->
<div class="container">
	<div class="content">
		<div class="jumbotron">
			<h2>SISTEM INFORMASI AKADEMIK</h2>
			<p>UJI KOMPETENSI DIGITALENT VSGA JUNIOR WEB DEVELOPER 2019</p>
			<a href="data.php" data-toggle="tooltip" title="Lihat Data Mahasiswa" class="btn btn-info" role="button"><span class="glyphicon glyphicon-list"></span> Lihat Data Mahasiswa</a>
		</div> <!-- /.jumbotron -->
	</div> <!-- /.content -->
</div>
<!-- End container -->
<?php
include("footer.php"); // memanggil file footer.php
?>