<?php
	if(isset($_POST['submit'])) 
    {
     	include_once 'connection.php';
	 	$name = mysqli_real_escape_string($conn,$_POST['name']);
     	$email = mysqli_real_escape_string($conn,$_POST['email']);
     	$passwd = mysqli_real_escape_string($conn,$_POST['passwd']);
	 	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
	 	$pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
	 	$address = mysqli_real_escape_string($conn,$_POST['address']);
        		
		$sql = "insert into user values('','$name','$email','$phone','$passwd','$address','$pincode')";
        $result = mysqli_query($conn,$sql);
                
		if($result)
		{
			?>
			<script type="text/javascript">
				alert("register successfully");
				window.location="login.php";
			</script>
			<?php
		}
		else{
			?>
			<script type="text/javascript">
				alert("Sorry! not successful")
				window.location="signup.html";
			</script>
			<?php
		}
	}
?>