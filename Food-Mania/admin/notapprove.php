<?php
	include 'connection.php';
	$id=$_GET["id"];
	mysqli_query($conn,"update orders set status='-1' where id='$id'")
?>

<script type="text/javascript">
	window.location="orders.php"; 
</script>