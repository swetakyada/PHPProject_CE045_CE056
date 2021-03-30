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
    </head>
    <body>
        <center>
            <h1>Add category</h1>
            <form action="add_category.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><input type="text" name="category" placeholder="name of food category" required>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Insert into category" name="submit" required>
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
			mysqli_query($conn,"insert into category values('','$_POST[category]')");
			?>
			<script type="text/javascript">
				alert("Added successfully");
                window.location="display_categories.php";
			</script>
			<?php
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