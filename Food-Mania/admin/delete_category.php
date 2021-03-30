<?php
	include 'connection.php';
	$id = $_GET["id"];
	mysqli_query($conn,"delete from category where id='$id'");
?>

<script type="text/javascript">
	alert("Deleted");
	window.location="display_categories.php"; 	
</script>