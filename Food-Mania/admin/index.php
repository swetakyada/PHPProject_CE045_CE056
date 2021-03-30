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
			if(isset($_SESSION['admin']))
			{
				// include 'orders.php';
				// include 't_orders.php';	
			}
		?>
	</body>
</html>