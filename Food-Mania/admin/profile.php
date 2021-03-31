<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
<?php
	session_start();
	include "connection.php";
	include 'main.php';
	if(isset($_SESSION['admin']))
	{
		$username=$_SESSION["admin"];
		$id=$_SESSION["id"];
		$sql1 = "select * from admin where username='$username' and id = '$id'";
		$result = mysqli_query($conn,$sql1);
		$multi_array = array();
		echo("<h1>Profile</h1>");
		while($row = mysqli_fetch_array($result))
		{
			?>
			<center>
				
				<table border="1px" style="width: 400px;height: 270px;">
				<tr>
					<td>Id :
					<td><?php echo $row['id']; ?>
				</tr>
				<tr>
					<td>Name :</td>
					<td><?php echo $row['username']; ?></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<td>Phone number :</td>
					<td><?php echo $row['phone_no']; ?></td>
				</tr>
				
				
						
				</table>
			</center>
				
		<?php		
		}
	}else{
		?>
		<script type="text/javascript">
			alert("Please login")
			window.location="index.php"
		</script>
	<?php
}
?>
</body>
</html>