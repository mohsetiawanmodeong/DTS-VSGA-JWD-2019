<?php
include 'koneksi.php';
$kdbrg = @$_GET['kdbrg'];
mysqli_query($koneksi, "DELETE FROM pakaian WHERE br_id ='$kdbrg'");

?>

<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href = "?page=admin&aksi=lihat_pakaian";
</script>