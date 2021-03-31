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
				
				?>

				<div style="display: flex;flex-direction: row;justify-content: center;padding-top: 25px;" >
					<?php while($row = mysqli_fetch_array($result))
					{
			
						?>
							<div class="card" style="width: 270px;height: 300px;padding:20px;margin: 10px;opacity: 0.9;cursor: pointer;"  onclick="window.location.href='category.php?id=<?php echo $row['id']; ?>';">
								
									  <img src="<?php echo $row['image'];?>"/>
									    <div class="card-body">
											<h2><?php echo $row['name']; ?></h2>
										</div>
								
							</div>
						<?php
						
					}
					?>

				</div>
				
			</center>
	</body>
</html>