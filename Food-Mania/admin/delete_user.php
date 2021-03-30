<?php
	include 'connection.php';
	$id=$_GET["id"];
?>

<script type="text/javascript">
	var d =confirm("Do you want to delete the user?");
	if(d)
	{
		window.location="delete_user_confirm.php?id=<?php echo $id;?>"; 	
	}
	else
	{
		window.location="display_users.php"; 	
	}
</script>