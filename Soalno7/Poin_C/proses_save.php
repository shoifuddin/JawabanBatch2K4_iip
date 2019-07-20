
<?php
include "koneksi.php";
$nama = $_POST['nama'];
$work = $_POST['work'];
$salary = $_POST['salary'];
$nama1=$nama;
mysqli_query($koneksi,"INSERT INTO `tb_name` (`id`, `name`, `id_work`, `id_salary`) VALUES ('', '$nama', '$work', '$salary')");
?>

<script type="text/javascript">
	window.location.assign("index.php?msg=1&&nama=<?php echo $nama ?>");
</script>