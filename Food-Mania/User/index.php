<?php
	session_start();
	include 'main.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Food Mania</title>
	</head>
	<body>
		<center>
			<?php
				include 'connection.php';
				$result = mysqli_query($conn, "select * from category");
				while($row = mysqli_fetch_array($result))
				{
					?>
					<div class="card" onclick="window.location.href='category.php?id=<?php echo $row['id']; ?>';">
						<div class="card-body">
							<h2><?php echo $row['name']; ?></h2>
						</div>
					</div>
					<?php
				}
			?>
		</center>
	</body>
</html>