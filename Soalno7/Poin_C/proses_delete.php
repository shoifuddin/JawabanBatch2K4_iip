<?php
	include "koneksi.php";
	$modal_id=$_GET['modal_id'];
	$modal_name =$_GET['nama'];

	$modal=mysqli_query($koneksi,"Delete FROM tb_name WHERE id='$modal_id'");

?>

<script type="text/javascript">
	window.location.assign("index.php?msg=3&&nama=<?php echo $modal_name ?>");
</script>