<?php
	session_start();
	include 'main.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cart</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	</head>
	<body>
		<center>
			<?php
				include 'connection.php';
				$result = mysqli_query($conn, "select * from orders where user_id=$_SESSION[uid] and ordered='0'");
				$con = mysqli_num_rows($result);

				
				if($con > 0)
				{ ?>
					<div class="container-sm card" style="height: 100%;opacity:0.9;color: solid black;width:75%;background-color: #D6DDDF">
					<?php  
					echo "<table align: 'center';>";
					echo "<tr>";
					echo "<th>Image</th>";
					echo "<th>Item name</th>";
					echo "<th>Quantity</th>";
					echo "<th>Total</th>";
					echo "<th></th>";
					echo "</tr>";
					while($row = mysqli_fetch_array($result))
					{
						$res = mysqli_query($conn, "select * from items where id=$row[item_id]");
						$item = mysqli_fetch_array($res);
						echo "<tr>";
						echo "<td>"; ?><img src="<?php echo $item['image'];?>" height="100" width="100"><?php echo "</td>"; 
						echo "<td>"; echo $item["name"]; echo "</td>";
						echo "<td>"; echo $row["quantity"]; echo "</td>";
						echo "<td>"; echo $row["total"]; echo "</td>";
						echo "<td>"; ?><a href="remove_from_cart.php?id=<?php echo $row['id'];?>">Remove from cart</a><?php echo "</td>"; 
						echo "</tr>";
					}
					echo "</table>";
					echo "<a href='place_order.php'>Place Order</a>";
				}
				else
				{
					echo "<h1 style='color: white'>Your cart is empty</h1>";
				}
			?>
		</center>
	</body>
</html>