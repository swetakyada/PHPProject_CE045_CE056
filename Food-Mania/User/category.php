<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Food Mania</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<style type="text/css">
			tr{
				height: 110px;
				border-bottom: 1px solid grey;
			}

		</style>
	</head>
	<body>
		<center>
			<?php
			include 'connection.php';
				include 'main.php';
				
			?>
			<div class="container card" style="height: 100%;opacity:0.9;color: solid black;background-color: #D6DDDF;">
				<?php 
					$result = mysqli_query($conn, "select * from items where category=$_GET[id]");
	                echo "<table align: 'center'>";
					echo "<tr>";
					echo "<th>Id</th>";
					echo "<th>Image</th>";
					echo "<th>Item name</th>";
					echo "<th>Price</th>";
	                echo "<th></th>";
					echo "</tr>";
					while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>"; echo $row["id"]; echo "</td>";
						echo "<td>"; ?><img src="<?php echo $row['image'];?>" height="100" width="100"><?php echo "</td>"; 
						echo "<td>"; echo $row["name"]; echo "</td>";
						echo "<td>"; echo $row["price"]; echo "</td>";
						echo "<td>"; ?><a href="select_quantity.php?id=<?php echo $row['id'];?>">Add to cart</a><?php echo "</td>"; 
						echo "</tr>";
					}
	                echo "</table>";
				?>
			</div>
		</center>
	</body>
</html>