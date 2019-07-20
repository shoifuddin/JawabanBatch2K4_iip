<?php
	include "koneksi.php";
	$id=$_POST['id'];
	$modal_name = $_POST['nama'];
	$work = $_POST['work'];
	$salary = $_POST['salary'];
	$sql="UPDATE tb_name SET name = '$modal_name', id_work = '$work' , id_salary = '$salary' WHERE id = '$id'";

	$modal=mysqli_query($koneksi,$sql);
?>

<script type="text/javascript">
	window.location.assign("index.php?msg=2&&nama=<?php echo $modal_name ?>");
</script>