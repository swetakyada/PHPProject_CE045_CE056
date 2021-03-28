<?php
	session_start();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Food Mania</title>
</head>
<body>
	<?php
	include 'main.php';
	if(isset($_SESSION['user']))
	{
		
		include 'orders.php';
		include 't_orders.php';
		
	}else{
		?>
		<a href="login.php">Login</a>
		<?php
	}
	?>
</body>
</html>