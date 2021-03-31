<?php 
	session_start();
	include 'main.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Menu</title>
		<style type="text/css">
			td{
				text-align: center;
				padding: 5px;
			}
		</style>
	</head>
	<body>
		<center>
		<h1>Items</h1>
		<a href="add_item.php" style="color: black">Add Item</a>
		<?php
			include 'connection.php';
			if(isset($_SESSION['admin']))
			{
				$res = mysqli_query($conn,"select * from items");
				echo "<table align: 'center'; border=1px>";
				echo "<tr>";
				echo "<th>Id</th>";
				echo "<th>Image</th>";
				echo "<th>Item name</th>";
				echo "<th>Price</th>";
				echo "<th>category</th>";
				echo "<th>Delete</th>";
				echo "</tr>";
				while ($row = mysqli_fetch_array($res)) 
				{
					$result = mysqli_query($conn, "select name from category where id=$row[category]");
					$category = mysqli_fetch_array($result);
					echo "<tr>";
					echo "<td>"; echo $row["id"]; echo "</td>";
					echo "<td>"; ?><img src="<?php echo $row['image'];?>" height="100" width="100"><?php echo "</td>"; 
					echo "<td>"; echo $row["name"]; echo "</td>";
					echo "<td>"; echo $row["price"]; echo "</td>";
					echo "<td>"; echo $category[0]; echo "</td>";
					echo "<td>"; ?><a href="delete_item.php?id=<?php echo $row['id'];?>">Delete</a><?php echo "</td>"; 
					echo "<tr>";
				}
				echo "</table";
			}
		?>
	</body>
</html>