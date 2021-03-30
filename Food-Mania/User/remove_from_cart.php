<?php
    session_start();
    include 'connection.php';
    mysqli_query($conn, "delete from orders where id=$_GET[id]");
?>


<script type="text/javascript">
	window.location="cart.php"; 	
</script>