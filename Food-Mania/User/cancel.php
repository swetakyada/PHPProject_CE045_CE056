<?php
	include 'connection.php';
	$id=$_GET["id"];
	mysqli_query($conn,"delete from orders where id='$id'");
?>

<script type="text/javascript">
	window.location="orders.php"; 
</script>