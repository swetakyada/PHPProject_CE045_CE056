<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Food Mania</title>
	</head>
	<body>
		<center>
			<?php
				include 'main.php';
				include 'connection.php';
				$result = mysqli_query($conn, "select * from items where category=$_GET[id]");
                echo "<table align: 'center'; border=1px>";
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
					echo "<td>"; ?><img src="../admin/food_images/<?php echo $row['image']; ?>" height="100" width="100"><?php echo "</td>"; 
					echo "<td>"; echo $row["name"]; echo "</td>";
					echo "<td>"; echo $row["price"]; echo "</td>";
					echo "<td>"; ?><a href="select_quantity.php?id=<?php echo $row['id'];?>">Add to cart</a><?php echo "</td>"; 
					echo "</tr>";
				}
                echo "</table>";
			?>
		</center>
	</body>
</html>