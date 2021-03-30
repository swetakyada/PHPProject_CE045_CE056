<?php
    session_start();
    include 'connection.php';
    mysqli_query($conn, "update orders set ordered='1' where user_id='$_SESSION[uid]' and ordered='0'");
?>

<script type="text/javascript">
	window.location="orders.php"; 	
</script>