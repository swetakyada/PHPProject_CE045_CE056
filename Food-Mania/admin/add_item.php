<?php
	include 'connection.php';
	session_start();
	include 'main.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="css/table.css">

	</style>

	</head>
	<body>
		<h1>Add Item</h1>
		<center>
			<form action="add_item.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td><input type="text" name="item" placeholder="name of food item" style="height: 20px; width: 300px; border-radius: 8px; padding: 10px;" required></td>
					</tr>
					<tr>
						<td><input type="number" name="price" placeholder="Enter the price" style="height: 20px; width: 300px; border-radius: 8px; padding: 10px;" required></td>
					</tr>
					<tr>
						<td><input type="text" name="image" placeholder="image path" style="height: 20px; width: 300px; border-radius: 8px; padding: 10px;" required></td>
					</tr>
					<tr>
						<td>
							<select name="category" id="category" style="height: 40px; width: 300px; border-radius: 8px; padding: 10px;" required>
								<option value="" selected disabled>Select category of food item</option>
								<?php
									$result = mysqli_query($conn,"select * from category");
									while ($row = mysqli_fetch_array($result))
									{
										echo "<option value='$row[id]'>" . $row['name'] . "</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="Insert into menu" name="submit" style="border-radius: 8px; padding: 10px; background-color: #06aed5;" required></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>

<?php
	if(isset($_SESSION['admin']))
	{
		if(isset($_POST["submit"]))
		{
			$dst1 = $_POST['image'];
			mysqli_query($conn,"insert into items values('','$_POST[item]','$_POST[price]','$dst1','$_POST[category]')");
			?>
			<script type="text/javascript">
				alert("Inserted");
				window.location="display_items.php";
			</script>

			<?php
		}
	}
	else{
		?>
		<script type="text/javascript">
			alert("Please login");
			window.location="index.php";
		</script>
		<?php
	}
?>