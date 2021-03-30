<?php
	include 'connection.php';
	session_start();
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
			include 'main.php';
			if(isset($_SESSION['user']))
			{
				$uid =  $_SESSION['uid'];
				$total =0;
				$result=mysqli_query($conn,"select * from orders where user_id = '$uid' and ordered='1'");
				$con = mysqli_num_rows($result);
				if($con > 0)
				{
					?>
					<h1>Orders of Food</h1>
					<table border="1px">
						<tr>
							<th>OrderId</th>
							<th>ItemName</th>
							<th>Quantity</th>
							<th>Date</th>
							<th>Total</th>
							<th>Status</th>
							<th>Cancel</th>
						</tr>
					<?php
					while ($row = mysqli_fetch_array($result)) 
					{
						$res = mysqli_query($conn, "select * from items where id=$row[item_id]");
						$item = mysqli_fetch_array($res);
						echo "<tr>";
						echo "<td>"; echo $row['id'];   echo "</td>";
						echo "<td>"; echo $item['name']; echo "</td>";
						echo "<td>"; echo $row['quantity']; echo "</td>";
						echo "<td>"; echo $row['date']; echo "</td>";
						echo "<td>"; echo $row['total']; echo "</td>";
						$total = $total + $row['total'];
						echo "<td>"; echo $row['status']; echo "</td>";
						if($row['status'] == '0')
						{
							echo "<td>"; ?> <a href="cancel.php?id=<?php echo $row['id']; ?>"">Cancel</a> <?php echo "</td>";
						}
						else if($row['status'] == '1')
						{
							echo "<td>"; ?> <p>Deliver soon</p> <?php echo "</td>";
						}
						else
						{
							echo "<td>"; ?> <p>Not Approved</p> <?php echo "</td>";
						}
						echo "</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "<h1>No Food Orders</h1>";
				}
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("Please login");
					window.location="index.php";
				</script>
				<?php
			}
		?>
		</center>
</body>
</html>
