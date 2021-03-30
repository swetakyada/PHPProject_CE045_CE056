<?php
	include 'connection.php';
	$id=$_GET["id"];
?>

<script type="text/javascript">
	var d = confirm("Do you want to delete?");
	if(d)
	{
		window.location="delete_item_confirm.php?id=<?php echo $id;?>"; 	
	}
	else
	{
		window.location="display_menu.php"; 	
	}
	
</script>