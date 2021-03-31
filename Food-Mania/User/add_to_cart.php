<?php
    session_start();
	include 'connection.php';
    $uid = $_SESSION['uid'];
    $res = mysqli_query($conn, "select * from items where id=$_POST[id]");
    $result = mysqli_fetch_array($res);
    $total = $_POST['quantity'] * $result['price'];
    $d = date('Y-m-d H:i:s');
    $status = mysqli_query($conn,"insert into orders values('','$_POST[id]','$uid','$_POST[quantity]','$d','0','$total','0')");
?>

<script type="text/javascript">
	window.location="cart.php"; 	
</script>