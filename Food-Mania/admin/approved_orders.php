<?php
	session_start();
	include 'main.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Orders</title>
		<link rel="stylesheet" type="text/css" href="css/table.css">
	</head>
	<body>
		<center>
			<?php
				include 'connection.php';
				if(isset($_SESSION['admin']))
				{
					$result=mysqli_query($conn,"select * from orders where status = '1'");
					$cou = mysqli_num_rows($result);
					if($cou > 0)
					{
						?>
						<h1>Orders</h1>
						<table border="1px">
							<tr>
								<th>OrderId</th>
								<th>ItemName</th>
								<th>Qantity</th>
								<th>Date</th>
								<th>Name</th>
								<th>Userid</th>
								<th>phone</th>
								<th>Address</th>
								<th>Total price</th>
							</tr>
							<?php
								while ($row = mysqli_fetch_array($result)) 
								{
									$item_id = $row['item_id'];
									$item = mysqli_query($conn,"select name from items where id = $item_id");
									$item_name = mysqli_fetch_array($item);
									$user_id = $row['user_id'];
									$user = mysqli_query($conn,"select * from user where id = $user_id");
									$user_details = mysqli_fetch_array($user);
									echo "<tr>";
									echo "<td>"; echo $row['id']; echo "</td>";
									echo "<td>"; echo $item_name[0]; echo "</td>";
									echo "<td>"; echo $row['quantity']; echo "</td>";
									echo "<td>"; echo $row['date']; echo "</td>";
									echo "<td>"; echo $user_details['name']; echo "</td>";
									echo "<td>"; echo $user_details['id']; echo "</td>";
									echo "<td>"; echo $user_details['phone_no']; echo "</td>";
									echo "<td>"; echo $user_details['address']; echo "</td>";	
									echo "<td>"; echo $row['total']; echo "</td>";
									echo "</tr>";
								}
								echo "<tr>";
							?>
						</table>
						<?php
					}
					else
					{
						echo "<h1>No Food Orders</h1>";
					}
                    ?>
                    Click <a href="orders.php">here</a> to see all the orders.
                    <?php
				}
			?>
		</center>
	</body>
</html>
